<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Monitoring extends CI_Controller {
	public function index()
	{
		$this->load->view('v_monitoring');
	}
}
