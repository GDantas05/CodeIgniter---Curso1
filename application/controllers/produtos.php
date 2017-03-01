<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Produtos extends CI_Controller
{

	public function index() {

		//$this->output->enable_profiler(TRUE);

		$this->load->model("produtos_model");
		$this->load->helper("currency");

		$produtos = $this->produtos_model->mostraNaoVendidos();

		$dados = array('produtos' => $produtos);

		$this->load->view('produtos/index.php', $dados);
	}

	public function formulario() {
		autorizacao();
		$this->load->view('produtos/formulario');
	}
	
	public function novo() {

		$usuarioLogado = autorizacao();
		$this->load->library('form_validation');

		$this->form_validation->set_rules("nome", "Nome", "required|min_length[5]|max_length[100]|callback_nao_tenha_a_palavra_melhor");
		$this->form_validation->set_rules("preco", "Preço", "required");
		$this->form_validation->set_rules("descricao", "Descrição", "trim|required|min_length[10]");
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");
		$sucesso = $this->form_validation->run();

		if ($sucesso) {
			$produto = array('nome'       => $this->input->post('nome'),
						 	 'descricao'  => $this->input->post('descricao'),
						 	 'preco'      => $this->input->post('preco'),
						 	 'usuario_id' => $usuarioLogado['id']
			);

			$this->load->model('produtos_model');
			$this->produtos_model->salva($produto);
			$this->session->set_flashdata("success", "Produto salvo com sucesso");

			redirect("/");
		} else {
			$this->load->view('produtos/formulario');
		}
	}

	public function mostra($id) {

		$this->load->model("produtos_model");
		$this->load->helper("typography");
		$produto = $this->produtos_model->busca($id);

		$dados = array('produto' => $produto);
		$this->load->view('produtos/mostra', $dados);
	}

	public function nao_tenha_a_palavra_melhor($nome) {

		$posicao = strpos($nome, "melhor");

		if ($posicao) {
			$this->form_validation->set_message("nao_tenha_a_palavra_melhor", "O campo '%s' não pode conter a palavra melhor");
			return FALSE;
		} else {
			return TRUE;
		}
	}
}
