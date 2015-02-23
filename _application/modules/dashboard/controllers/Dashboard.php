<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	//Layout Padrão
	public function index()
	{
		$this->layout();
	}

}

/* End of file Dashboard */
/* Location: ./application/controllers/Dashboard */