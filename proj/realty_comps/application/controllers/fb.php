<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
'<?xml version="1.0" encoding="utf-8"?><request method="project.list"><page>1</page><per_page>15</per_page></request>'
*/


class Fb extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	// private $pass;
	public function __construct(){

		// http://localhost:8080/ash3_opt_www/www2/scripts/fw/ci/ci_2_0_1/
		// ?code=AQAoIz3VTNilYgf9bXP_97Vv7xp-pT58sxI6h7OZzalCwmiHlmLd1_C92CbP4yMJvWVcLisKQS78l0flNtt7FKUF0EszmR0-WrkvARlG272_x-RYYEehHnoDEGMVVN-gVCLmWJhrEsg_qqXdvWDnI-_idEHZ3jDXknUyssndgPGaqXKxPC1JpEluOj3WUU8NruCQiEhCYav0F1VgTPKMQCVd9KiQx7-o_ttKx5AI0KQk7G20eXwjw1NpRQTSldpG-JogfKAl9fMKZsskBSIhTkc7IIK3buZzLLPgIJNBslRx4-KeHc3nizbZmnxXNbL0Dkw
		// &
		// state=bbf3d4c7ac1d838e93f12ebe5e401d64#_=_

		parent::__construct();
		// parse_str( $_SERVER['QUERY_STRING'], $_REQUEST );

		// print_r($_REQUEST);
		// echo "<br />";
		// print_r( $_SERVER['QUERY_STRING']);

		$this->config->load("fb",TRUE);
		$config = $this->config->item('fb');

		// $this->config->load("database",TRUE);


		$this->load->library("facebook-php-sdk-2/src/facebook", $config);
		

		$this->load->database();


		// $this->facebook = new Facebook($config);
		// print_r($this->facebook);
	}

	public function index()
	{
		$this->load->model('fb_model');


		// $userId = $this->facebook->getUser();
		$userId = 653776779;

		// If user is not yet authenticated, the id will be zero
		if($userId == 0){
			// Generate a login url
			$data['loginurl'] = $this->facebook->getLoginUrl(array('scope'=>'email,read_stream'));

			$this->load->view('fb_index', $data);
		} else {

			// Get user's data and print it

			#$user = $this->facebook->api('/me');
			// $user = $this->facebook->api('/me?fields=posts.until(12/4/2014).since(11/15/2014)');
			// $user = $this->facebook->api('/me?fields=posts.until(04-12-2014).since(15-11-2014)');


			#$post = $this->facebook->api('/me/feed?since=15-11-2014&until=04-12-2014');

			// $a = strptime('22-09-2008', '%d-%m-%Y');
			// $timestamp = mktime(0, 0, 0, $a['tm_mon']+1, $a['tm_mday'], $a['tm_year']+1900);

			// echo "<br />";
			// print "USER-USER";
			// echo "<br /><pre>";
			// print_r($user);
			// print "POST-FEED";
			// print_r($post);
			// echo "<br /></pre>";

			$user = $this->config->item( 'user', 'fb');
			$user = json_decode($user, true);

			$post = $this->config->item( 'post', 'fb');
			// $post = json_decode($post, true);

			$email = $user['email'];
			$row = $this->fb_model->get_user_by_email($email);

			if ( empty( $row ))
			{
				// insert into users table
				$this->fb_model->insert_into_user($email);

			}
			else if(!empty($row))
			{
				$fb_row = $this->fb_model->select_from_fb_by_users_id($row[0]->id);

				if(empty($fb_row))
				{
					// insert into fb table
					$this->fb_model->insert_into_fb($row[0]->id, $post);
				}
				else {
					// else update
					// update not always needed, only when stored data is different from the data thats freshly pulled
					$this->fb_model->update_fb($fb_row[0]->id, $post);
				}
			}

			// select data from fb table & return
			$fb_row_data = $this->fb_model->select_from_fb_by_fb_id($fb_row[0]->id);
			// Getting wall_post_data here from `fb` table in DB
			$d = $fb_row_data[0]->data;
			$d = json_decode($d, true);

			$data['wall_post_data'] = $d;
			$data['logouturl'] = $this->facebook->getLogoutUrl();


		}

		$this->load->view('fb_index', $data);

	}

	private function makeCurlCall($xml_body)
	{
		// Make a call to Freshbooks api, and get project list
		$ret = $this->curl->simple_post($this->fbooks_url, array(), array( CURLOPT_POSTFIELDS => $xml_body, CURLOPT_USERPWD => $this->pass ));
		$ret = new SimpleXMLElement($ret);
		return $ret;
	}

	private function getAllTaskList()
	{
		$xml_body = '<?xml version="1.0" encoding="utf-8"?><request method="task.list"></request>';
		$ret = self::makeCurlCall($xml_body);
		return $ret;
	}

	public function list_all()
	{
		/*
		$xml_body = '<?xml version="1.0" encoding="utf-8"?><request method="project.list"><page>1</page><per_page>1</per_page></request>';
		*/
		$xml_body = '<?xml version="1.0" encoding="utf-8"?><request method="project.list"></request>';
		$ret = self::makeCurlCall($xml_body);

		$data = array('data'=>$ret);
		$this->load->view('freshbooks_list', $data);
	}

	// Done
	public function update($id)
	{

		$ret = null;
		$message = null;
		$p = $this->input->post();
		if($p)
		{
			$this->form_validation->set_error_delimiters("<div class='form-errors'>", "</div>");
			$this->form_validation->set_rules('proj', 'Project', 'required');
			$this->form_validation->set_rules('tasks[]', 'Tasks', 'trim|required|numeric');
			$this->form_validation->set_rules('time', 'Time', 'trim|required|integer|xss_clean');
			$message = "Errors";

			if($this->form_validation->run() !== FALSE)
			{
				$id = $this->input->post('proj');
				$hour_budget = $this->input->post('time');
				$xml_string = '<?xml version="1.0" encoding="utf-8"?><request method="project.update"><project><project_id>'.$id.'</project_id><hour_budget>'.$hour_budget.'</hour_budget>';
				$xml_string .= '<tasks>';
				foreach( $this->input->post('tasks') as $k => $v )
					$xml_string .= "<task><task_id>".$v."</task_id></task>";
				$xml_string .= "</tasks>";
				$xml_string .= "</project></request>";
				$xml_body = $xml_string;
				// Fire update Project api call
				$ret = self::makeCurlCall($xml_body);
				$message = "Project updated";
			}
		}

		$xml_body = '<?xml version="1.0" encoding="utf-8"?><request method="project.get"><project_id>'.$id.'</project_id></request>';
		$ret = self::makeCurlCall($xml_body);

		foreach($ret->project->tasks->task as $k => $t)
			$projTaskIds[] = (int) $t->task_id;

		$allTasks = self::getAllTaskList();
		$data = array('data'=>$ret, 'message'=>$message, 'allTasks'=>$allTasks, 'projTaskIds'=> $projTaskIds );
		$this->load->view('freshbooks_update', $data);
	}

	public function createTask()
	{

		$ret = null;
		$message = null;

		$p = $this->input->post();
		if($p)
		{
			$this->form_validation->set_rules('name', 'Name', 'trim|required|alpha_numeric|xss_clean');
			$this->form_validation->set_rules('rate', 'Rate', 'trim|integer|xss_clean');
			$this->form_validation->set_rules('desc', 'Description', 'trim|xss_clean');

			$message = "Errors";

			if($this->form_validation->run() !== FALSE)
			{
				$name = $this->input->post('name');
				$rate = $this->input->post('rate');
				$desc = $this->input->post('desc');

				$xml_body = '<request method="task.create"><task><name>'.$name.'</name><rate>'.$rate.'</rate><description>'.$desc.'</description></task></request>';

				// Make a call and create project_name, task, time
				$ret = self::makeCurlCall($xml_body);
				$message = "Task Created";
			}
		}

		$data = array('data'=>$ret, 'message'=>$message);
		$this->load->view('freshbooks_create', $data);
	}

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */