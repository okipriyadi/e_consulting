<?php

class Chat extends CI_Controller
{
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');

        if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] === false) {
            redirect(base_url());
        }

        $this->user = $this->db->get_where('users', array('id' => $this->session->userdata['user_id']), 1)->row();
    }

    public function index()
    {
        $teman = $this->db->where('id !=', $this->user->id)->get('users');
				$data = array('content' => 'chat/chat_dashboard.php','teman'=> $teman );
				$this->load->view('index', $data);
    }

    public function tambah_judul()
    {
        print_r($_POST);
        $judul_konsultasi = $_POST["judul_konsultasi"];
        $jenis_konsultasi = $_POST["jenis_konsultasi"];
        $data = array(
          "judul_chat" => $judul_konsultasi,
          "jenis_konsultasi" => $jenis_konsultasi
        );
        $result= $this->chat_model->tambah_judul($data);
    	  $this->session->set_userdata(array("id_judul_chat"=>$result));
        return(base_url("index.php/chat"));
    }



    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('users', array('id' => $this->input->post('chatWith')), 1)->row();

            // Get Chats
            $chats = $this->db
                ->select('chat.*, users.name')
                ->from('chat')
                ->join('users', 'chat.send_by = users.id')
                ->where('(send_by = '. $this->user->id .' AND send_to = '. $friend->id .')')
                ->or_where('(send_to = '. $this->user->id .' AND send_by = '. $friend->id .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();

            $result = array(
                'name' => $friend->name,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage()
    {
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->user->id
        ));
    }
}
