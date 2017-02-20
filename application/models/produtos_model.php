<?php 
/**
* 
*/
class Produtos_model extends CI_Model
{
	
	public function mostraTodos() {

		$produtos = $this->db->get("produtos");
		return $produtos->result_array();
	}
	
	public function salva($produto) {
		$this->db->insert('produtos', $produto);
	}

	public function busca($id) {
		return $this->db->get_where("produtos", array(
	    	   		"id" => $id
			   ))->row_array();
	}
}