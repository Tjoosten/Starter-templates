<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Welcome extends CI_Controller {
		public function index() {
			// Varieble(s)
			$Data = array();

			// View(s)
			$this->load->view(''); // Header (HTMl)
			$this->load->view(''); // Navbar
			$this->load->view(''); // Content
			$this->load->view(''); // Footer
		}
	}
