<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index() {
		
		$data['main_content'] = 'view_homepage';
		$this->load->view('includes/template', $data);
	}
	
	public function about() {
		
		$data['main_content'] = 'view_about';
		$this->load->view('includes/template', $data);
	}
	
	public function gallery() {
		
		$data['main_content'] = 'view_gallery';
		$this->load->view('includes/template', $data);
	}
	
	public function contact() {
		
		$data['main_content'] = 'view_contact';
		$this->load->view('includes/template', $data);
	}
	
	public function travelling_kit() {
		
		$data['main_content'] = '';
		$this->load->view('includes/template', $data);
	}
}
