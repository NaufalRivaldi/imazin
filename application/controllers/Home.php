<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->view('index2');
	}

	public function index2(){
		$this->load->view('index');
	}
}
