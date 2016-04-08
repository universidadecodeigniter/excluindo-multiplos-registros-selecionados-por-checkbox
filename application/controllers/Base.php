<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('contatos_model');
	}

	public function Index()
	{
		$data['contatos'] = $this->contatos_model->GetContatos();
		$this->load->view('home', $data);
	}

	public function Excluir()
	{
			$ids = $this->input->post("excluir_todos");
			$numRegs = count($ids);

			if($numRegs > 0)
			{
				$this->contatos_model->Delete($ids);
				$this->session->set_flashdata('resultado', "$numRegs Contato(s) excluído(s) com sucesso.");
			}
			else
			{
				$this->session->set_flashdata('erro', "Nenhum registro selecionado para exclusão.");
			}

			redirect();
	}

}
