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

	public function index(){
		if (isset($_POST['username'])){
			$ldap = $this->user_model->ldap_login();
			if($ldap){
				$query = $this->user_model->getUserEmail($this->input->post('username'));
				if(!$query){
					$this->session->set_flashdata('gagalLogin', 'Hubungi admin karena data anda belum diupdate di server kami');
					redirect(base_url());
				}
				$data = $query->row_array();
				$role_inspektorat = array(
					'196501201985031001' => 'inspektur', //budi prawira
					'197006051992021001' => 'admin', //ahmad zahidin
					'199509012019021004' => 'konsultan', //luqman
					'199304212019021003' => 'konsultan', //fikri azardi
					'199201242019022006' => 'konsultan', //sinta
					'199610112019022002' => 'konsultan', //Devinta
					'199511252019022004' => 'konsultan', //Hesti
					'199104232018012001' => 'konsultan', //iref
					'199009212018012002' => 'konsultan', //azizah
					//'198710052019021003' => '', //
					'199601122018012004' => 'konsultan', //Dian
					'199612122018011001' => 'konsultan', //Bagas
					'199709222018122002' => 'konsultan', //Vio
					'199506082018011003' => 'konsultan', //Aji
					'199609052018012003' => 'konsultan', //Naomi
					'199612192018121002' => 'konsultan', //Dani
					'199604112018122001' => 'konsultan', //Widayanti
				);
				if(array_key_exists($data['nip'], $role_inspektorat)){
						$role = $role_inspektorat[$data['nip']];
				}else{
						$role = "penanya";
				}
				$this->session->set_userdata('login_e-consulting',TRUE);
				$this->session->set_userdata('nip_econsulting',$data['nip']);
				$this->session->set_userdata('nama_econsulting',$data['nama']);
				$this->session->set_userdata('user_id_econsulting',$data['user_id']);
				$this->session->set_userdata('logged_in_econsulting', TRUE);
				$this->session->set_userdata('role_econsulting', $role);
				$newdata = array(
						'user_id' => $data['user_id'],
				    'username'  => $data['nama'],
				);
				redirect('chat', 'refresh');
			}else{
				$this->session->set_flashdata('gagalLogin', 'Maaf Username/Password Anda Salah');
			}
		}elseif (isset($_POST['emailtamu'])){
			$db = $this->db->get_where('users', array('email' => $_POST['emailtamu']), 1)->row();
			if(!$db){
				$this->db->insert	('users', array(
					'name'=>$_POST["nama"],
					'username'=>$_POST["emailtamu"],
					'email'=>$_POST["emailtamu"],
					'instansi'=>$_POST["instansi"],
					//'jenis_konsultasi'=>$_POST["konsultasi"],
					'hp'=>$_POST["hp"],
					'role'=>2,
				));
				$db = $this->db->get_where('users', array('email' => $_POST["emailtamu"]), 1)->row();
			};


			$newdata = array(
					'user_id_econsulting' => $db->id,
					'logged_in_econsulting' => TRUE,
					'nama_econsulting' => $_POST["nama"],
					'username'  => $_POST["emailtamu"],
					'logged_in_econsulting' => TRUE,
					'role_econsulting' => 'penanya_luar'
		 	);
			$this->session->set_userdata($newdata);
			redirect('chat', 'refresh');
		}
		redirect(base_url());
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function login_tamu(){

		$db = $this->db->get_where("users", array('email'=>$_POST["email"]))->row();
		if($db){
			$newdata = array(
					'user_id_econsulting' => $db->id,
					'logged_in_econsulting' => TRUE,
					'nama_econsulting' => $db->name,
					'username'  => $_POST["email"],
					'logged_in_econsulting' => TRUE,
					'role_econsulting' => 'penanya_luar'
			);
			$this->session->set_userdata($newdata);
			echo 1;
		}
	}
}
