<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Layout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function header($data=null)
	{
		$this->load->view('header',$data);
	}

	public function footer($data=null)
	{
		$this->load->view('footer',$data);
	}

	public function menu_lateral($data=null)
	{
		$this->load->view('menu_lateral',$data);
	}

}

/* End of file Layout.php */
/* Location: ./application/controllers/Layout.php */