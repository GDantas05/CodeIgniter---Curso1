<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
*/
class Utils extends CI_Controller
{

	public function migrate() {

		$this->load->library("migration");
		$sucesso = $this->migration->current();

		if ($sucesso) {
			echo 'Migração realizada com sucesso';
		} else {
			show_error($this->migration->error_string());
		}

	}
}
