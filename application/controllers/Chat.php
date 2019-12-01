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
        $id_user = $this->session->userdata('user_id_econsulting');
        if($this->session->userdata('role_econsulting') == 'penanya'){
          $judul_chats = $this->chat_model->getAllJudulChatByIdSender($id_user);
        }else{
          $judul_chats = $this->chat_model->getAllJudulChatByIdReceiver($id_user);
        }

        if($judul_chats){
          $chats = $this->chat_model->getChatByIdJudul($judul_chats[0]["id_judul_chat"]);
          $this->chat_model->updateChatStatusByIdJudul($judul_chats[0]["id_judul_chat"]);
          $judul = $judul_chats[0]["judul_chat"];
          $send_by = $judul_chats[0]["nama"];
          $GLOBALS['id_judul_chat']  = $judul_chats[0]["id_judul_chat"];
        }else{
          $chats = array();
          $judul = "";
          $GLOBALS['id_judul_chat']  = "";
          $send_by = "";
        }
				$data = array(
                      'send_by' => $send_by,
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
      $id_judul_chat = htmlentities($this->input->post('id_judul_chat', true));
      $judul_chat = $this->chat_model->getJudulChatByIdJudul($id_judul_chat);
      if($this->session->userdata('role_econsulting') == 'penanya'){
        $sendTo = (int)$judul_chat['send_to'];
        $sendBy = (int)$judul_chat['send_by'];
      }else{
        $sendTo = (int)$judul_chat['send_by'];
        $sendBy = (int)$judul_chat['send_to'];
      }
      $data = array(
        'message' => htmlentities($this->input->post('message', true)),
        'send_to' => $sendTo,
        'send_by' => $sendBy ,
        'judul_chat_id' => (int)$id_judul_chat
      );
      $this->chat_model->tambahChat($data);
    }

    public function newKonsultasi()
    {
      $judul_chat = htmlentities($this->input->post('judul'));
      $jenis_konsultasi = htmlentities($this->input->post('select_konsultasi'));
      $id_user = $this->session->userdata["user_id_econsulting"];
      $id_judul_chat = $this->chat_model->createNewKonsultasi($judul_chat, $jenis_konsultasi, $id_user);
      $data = array(
        'message' => "Selamat Datang, ada yang bisa kami bantu ?",
        'send_to' => $id_user,
        'send_by' => 0 ,
        'judul_chat_id' => (int)$id_judul_chat
      );
      $this->chat_model->tambahChat($data);
      redirect(base_url('chat'));

    }


    public function getNewMessage()
  	{
      $id_judul_chat = htmlentities($this->input->post('id_judul_chat', true));
      $newMessage = $this->chat_model->getNewMessage($id_judul_chat, $this->session->userdata["user_id_econsulting"]);
      $this->chat_model->updateChatStatusForNewMessage($id_judul_chat, $this->session->userdata["user_id_econsulting"]);
  		$data = json_encode($newMessage);
  		echo ($data);
  	}
}
