<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fornecedor extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('fornecedores');
			$crud->set_subject('Fornecedores');
			$crud->columns('nome','nome_fantasia');

			$output = $crud->render();

			$this->layout();

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function cadastro()
	{
		
	}

}

/* End of file fornecedor.php */
/* Location: ./application/controllers/fornecedor.php */