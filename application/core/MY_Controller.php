<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function layout($data=null)
	{
		echo modules::run('layout/header',$data);
		echo modules::run('layout/footer',$data);
	}

}

/* End of file MY_Nogsystem */
/* Location: ./application/controllers/MY_Nogsystem */