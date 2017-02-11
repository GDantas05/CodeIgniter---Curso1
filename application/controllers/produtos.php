<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Produtos extends CI_Controller
{

	public function index() {

		$this->load->database();
		$this->load->model("produtos_model");
		$this->load->helper("url");
		$this->load->helper("currency");
		$this->load->helper("form");

		$produtos = $this->produtos_model->mostraTodos();

		$dados = array('produtos' => $produtos);

		$this->load->view('produtos/index.php', $dados);
	}
}
