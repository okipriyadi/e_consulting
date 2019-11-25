<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->helper(array('url', 'form'));
	}

	public function index()
	{
		if (isset($_POST['username']))
		{
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			if ($username !== '' && $password !== '') {
				$db = $this->db->get_where('users', array('username' => $username), 1)->row();
				//if ($db !== null && $db !== false && md5($password) == $db->password) {
					$newdata = array(
							'user_id' => $db->id,
					        'username'  => $username,
					        'logged_in' => TRUE
					);
					$this->session->set_userdata($newdata);
					redirect('index.php/chat', 'refresh');
				//}
			}
		}elseif (isset($_POST['emailtamu'])){
			$db = $this->db->get_where('users', array('email' => $_POST['emailtamu']), 1)->row();
			if(!$db){
				$this->db->insert	('users', array(
					'name'=>$_POST["nama"],
					'username'=>$_POST["emailtamu"],
					'email'=>$_POST["emailtamu"],
					'instansi'=>$_POST["instansi"],
					'jenis_konsultasi'=>$_POST["konsultasi"],
					'hp'=>$_POST["hp"],
					'role'=>2,
				));
				$db = $this->db->get_where('users', array('email' => $_POST["emailtamu"]), 1)->row();
			}

			$newdata = array(
			 		'user_id' => $db->id,
					'username'  => $_POST["emailtamu"],
					'logged_in' => TRUE
		 );
		$this->session->set_userdata($newdata);
		///print_r($newdata);
		redirect('index.php/chat', 'refresh');
		}

		//redirect(base_url());
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function login_tamu(){

		$db = $this->db->get_where("users", array('email'=>$_POST["email"]))->row_array();
		if($db){
				$newdata = array(
					'user_id' => $db["id"],
					'username'  => $_POST["email"],
					'logged_in' => TRUE
		 	);
			$this->session->set_userdata($newdata);
			echo 1;
		}
	}
}
