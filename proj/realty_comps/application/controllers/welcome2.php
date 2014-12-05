<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	// Add
	public function __construct(){

		parent::__construct();

		print "contruct";
		
		// $this->load->helper(array('form', 'xml'));

		$this->load->library("facebook-php-sdk/src/facebook", $this->config );
		print_r($this->facebook);

		#require_once("facebook.php");
		
		// Freshbooks api config settings
		#self::set_app_config();
		
		// $this->fbooks_url = $this->config->item('freshbooks_api_scheme').$this->config->item('freshbooks_api_domain').$this->config->item('freshbooks_api_endpoint');
		// $this->pass = $this->config->item('freshbooks_api_auth_token');

		#$facebook = new Facebook($config);

	}
	// Add-

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */