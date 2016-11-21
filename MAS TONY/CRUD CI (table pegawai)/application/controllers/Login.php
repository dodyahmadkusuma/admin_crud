<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
	$this->template->views('Login');
	}
	public function auth()
	{
		
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql="select * from login where user = '{$user}'";
	$query = mysql_query($sql);
	if (mysql_num_rows($query) == 1 ) {
		$dataLoginDB = mysql_fetch_array($query);
		if ($pass == $dataLoginDB['password']) {
			$_SESSION['userdata'] = $dataLoginDB;
			header('Location: data/'); 
		}else {
			header('Location: index');
		}
	}else {
		header('Location:  index');
	}


	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */