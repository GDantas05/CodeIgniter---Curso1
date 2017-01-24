<?php
/**
* 
*/
class Produtos extends CI_Controller
{

	public function index() {

		$produtos = array();
		$bola = array('nome' => 'Bola de Futebol', 'descricao' => 'Bola de Futebol', 'preco' => 300);
		$hd   = array('nome' => 'HD Externo', 'descricao' => 'HD Externo', 'preco' => 400);
		array_push($produtos, $bola, $hd);

		$dados = array('produtos' => $produtos);

		$this->load->view('produtos/index.php', $dados);
	}
}