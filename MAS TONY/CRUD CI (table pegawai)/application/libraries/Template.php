<?php 


class Template
{
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
	}
	function views($template= null , $data= null){
		if ($template != null) {
			$data['_body'] = $this->_ci->load->view($template, $data, TRUE);
			$data['_nav'] = $this->_ci->load->view('asset/nav', $data, TRUE);
			$data['_footer'] = $this->_ci->load->view('asset/footer', $data, TRUE);
			echo $data['_template'] = $this->_ci->load->view('template', $data, TRUE);
		}	

	}

}




 ?>