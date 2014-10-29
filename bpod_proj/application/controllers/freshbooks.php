<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
'<?xml version="1.0" encoding="utf-8"?><request method="project.list"><page>1</page><per_page>15</per_page></request>'
*/


class Freshbooks extends CI_Controller {

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
		parent::__construct();
		$this->load->helper(array('form', 'xml'));
		$this->load->library(array("curl", "form_validation"));

		// Freshbooks api config settings
		self::set_app_config();
		$this->fbooks_url = $this->config->item('freshbooks_api_scheme').$this->config->item('freshbooks_api_domain').$this->config->item('freshbooks_api_endpoint');

		$this->pass = $this->config->item('freshbooks_api_auth_token');
	}

	private function set_app_config()
	{
		/*
		curl -u '3973893a30b9629c772171da5b9329b9':X 'https://companyz-receivables.freshbooks.com/api/2.1/xml-in' -d '<?xml version="1.0" encoding="utf-8"?><request method="project.list"><page>1</page><per_page>15</per_page></request>';
		*/
		$this->config->set_item('freshbooks_api_scheme', 'https://');
		$this->config->set_item('freshbooks_api_domain', 'companyz-receivables.freshbooks.com');
		$this->config->set_item('freshbooks_api_endpoint', '/api/2.1/xml-in');
		$this->config->set_item('freshbooks_api_auth_token', '3973893a30b9629c772171da5b9329b9');
	}

	public function index()
	{
		$this->load->view('freshbooks_index');
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