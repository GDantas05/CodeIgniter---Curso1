<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Vendas extends CI_Controller
{

	public function index() {

		$usuario = autorizacao();
		$this->load->model("produtos_model");
		$produtosVendidos = $this->produtos_model->buscaVendidos($usuario);
		$dados = array("produtosVendidos" => $produtosVendidos);

		$this->load->view("vendas/index", $dados);
	}

	public function nova() {
		$this->load->model("vendas_model");
		$usuario = autorizacao();

		$venda = array(
			"produto_id"      => $this->input->post("produto_id"),
			"comprador_id"    => $usuario["id"],
			"data_de_entrega" => dataPtBrParaMySQL($this->input->post("data_de_entrega"))
		);

		$this->vendas_model->salva($venda);
		$this->session->set_flashdata("success", "Pedido de compra efetuado com sucesso");
		redirect("");
	}
}
