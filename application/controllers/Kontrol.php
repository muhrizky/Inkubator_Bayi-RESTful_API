<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontrol extends CI_Controller {
	public function index()
	{
		$this->load->view('v_kontrol');
	}
}
