<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function autenticar() {

		$this->load->model('usuarios_model');
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));

		$usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);

		if ($usuario) {
			$this->session->set_userdata('usuario_logado', $usuario);
			$this->session->set_flashdata('success', 'Usuário logado com sucesso'); //SÓ FUNCIONA NA PRIMEIRA REQUISIÇÃO
		} else {
			$this->session->set_flashdata('danger', 'Usuário e/ou senha inválida');
		}

		redirect('/');
		//$this->load->view('login/autenticar', $dados);
	}

	public function logout() {
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata('success', 'Deslogado com sucesso');

		redirect('/');
		//$this->load->view("login/logout");
	}
}