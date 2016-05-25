<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	public function index()
	{
		$this->load->view('master');
	}
	public function new_code()
	{
		$this->load->view('new');
	}
}
