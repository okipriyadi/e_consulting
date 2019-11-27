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

        if (!isset($this->session->userdata['logged_in_econsulting']) || $this->session->userdata['logged_in_econsulting'] === false) {
            redirect(base_url());
        }
    }

    public function index()
    {
        $idSender = $this->session->userdata('user_id_econsulting');
        $judul_chats = $this->chat_model->getAllJudulChatByIdSender($idSender);
        if($judul_chats){
          $chats = $this->chat_model->getChatByIdJudul($judul_chats[0]["id_judul_chat"]);
          $judul = $judul_chats[0]["judul_chat"];
        }else{
          $chats = array();
          $judul = "";
        }



				$data = array(
                      'judul' => $judul,
                      'chats' => $chats,
                      'content' => 'chat/chat_dashboard.php',
                      'judul_chats' => $judul_chats
                    );
				$this->load->view('index', $data);
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
