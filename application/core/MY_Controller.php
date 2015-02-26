<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function layout($page,$data=null)
	{
		$this->load->view('header',$data);
		$this->load->view($page,$data);
		$this->load->view('footer',$data);;
	}

}

/* End of file MY_Nogsystem */
/* Location: ./application/controllers/MY_Nogsystem */