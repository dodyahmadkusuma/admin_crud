<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->template->views('about');
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */