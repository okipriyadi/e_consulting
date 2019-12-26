<?php
class Chat_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function tambah_judul($data){
      $this->db->insert("judul_chat ",$data);
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }

    public function tambahChat($data){
      $this->db->insert("chat",$data);
      $insert_id = $this->db->insert_id();
      return $insert_id;
    }

    public function getAllJudulChat($idSender){
      $this->db->select('*');
      $this->db->join('user','user.user_id=judul_chat.send_by','left');
      $this->db->order_by("id_judul_chat", "desc");
      $query = $this->db->get('judul_chat');
      return $query->result_array();
    }

    public function getAllJudulChatByIdSender($idSender){
      $this->db->select('*');
      $this->db->join('user','user.user_id=judul_chat.send_by','left');
      $this->db->order_by("id_judul_chat", "desc");
      $query = $this->db->get_where('judul_chat',array('send_by'=>$idSender));
      return $query->result_array();
    }

    public function getAllJudulChatByIdSenderLuar($idSender){
      $this->db->select('*');
      $this->db->join('users','users.id=judul_chat.send_by','left');
      $this->db->order_by("id_judul_chat", "desc");
      $query = $this->db->get_where('judul_chat',array('send_by'=>$idSender));
      return $query->result_array();
    }

    public function getAllJudulChatByIdReceiver($idReceiver){
      $this->db->select('*');
      $this->db->join('user','user.user_id=judul_chat.send_by','left');
      $this->db->order_by("id_judul_chat", "desc");
      $query = $this->db->get_where('judul_chat',array('send_to'=>$idReceiver));
      return $query->result_array();
    }

    public function getJudulChatByIdJudul($idJudul){
      $this->db->select('*');
      $query = $this->db->get_where('judul_chat',array('id_judul_chat'=>$idJudul));
      return $query->row_array();
    }

    public function getChatByIdJudul($idJudul){
      $this->db->select('*');
      //$this->db->join('judul_chat', 'judul_chat.id_judul_chat = chat.judul_chat_id', 'left');
      $query = $this->db->get_where('chat',array('judul_chat_id'=>$idJudul));
      return $query->result_array();
    }

    public function getNewMessage($idJudul, $sendTo){
      $this->db->select('*');
      $this->db->from('chat');
      $this->db->where('judul_chat_id',$idJudul);
      $this->db->where('send_to', $sendTo);
      $this->db->where('status',0);
      return $this->db->get()->result_array();
    }

    public function getGrabNewMessage(){
      $this->db->select('*');
      $this->db->from('judul_chat');
      $this->db->order_by('id_judul_chat', 'DESC');
      $this->db->where('send_to',0);
      return $this->db->get()->result_array();
    }

    public function updateGrabNewMessage($idJudulChat, $sendTo){
      $this->db->update("judul_chat",array("send_to"=>$sendTo), array("id_judul_chat" =>$idJudulChat));
      return 1;
    }

    public function updateRating($idJudulChat, $penilaian){
      $this->db->update("judul_chat",array("penilaian"=>$penilaian), array("id_judul_chat" =>$idJudulChat));
      return 1;
    }

    public function getAllStatus(){
        $this->db->select('*');
        $query = $this->db->get_where('task_status',array());
		    return $query->result_array();
    }



    public function getProjectById($id_project){
      $this->db->select('*');
      $query = $this->db->get_where("task_project", array('id_project'=>$id_project));
      return $query->row_array();
    }

    public function get_history($jumlah_proyek){
      $this->db->select('*');
      $this->db->order_by("date_creation", "desc");
      $this->db->join('task_project','task_project.id_project= task_history.id_project','left');
      $this->db->limit($jumlah_proyek, 0);
      $query = $this->db->get("task_history");
      return $query->result_array();
    }

    public function get_history_by_id_project($id_project){
      $this->db->select('*');
      $this->db->order_by("date_creation", "desc");
      $this->db->join('task_project','task_project.id_project= task_history.id_project','left');
      $this->db->limit(8, 0);
      $query = $this->db->get_where("task_history", array('task_history.id_project'=>$id_project));
      return $query->result_array();
    }

    public function getAllProject(){
      $this->db->select('*');
      $this->db->join('user','user.user_id= task_project.id_creator','left');
      $this->db->order_by("created_at", "desc");
      $query = $this->db->get("task_project");
      return $query->result_array();
    }

    public function getSatatusByProjectId($id_project){
      $this->db->select('*');
      $this->db->join('task_project', 'task_project.id_project = task_status.id_project','left');
      $query = $this->db->get_where("task_status", array('task_status.id_project'=>$id_project));
      return $query->result_array();
    }


    public function getTaskByProject($id_project){
      $this->db->select('*');
      $this->db->join('task_status', 'task_detail.id_status = task_status.id_status','left');
      $this->db->join('task_project', 'task_project.id_project = task_status.id_project','left');
      $this->db->order_by("task_status.id_status"); //order ini tidak boleh berubah karena digunakan sepaket dengan view agar tersusun dengan benar
      $query = $this->db->get_where("task_detail", array('task_status.id_project'=>$id_project));
      return $query->result_array();
    }

    public function getStatusByStatusId($id_status){
      $this->db->select('*');
      $query = $this->db->get_where("task_status", array('id_status'=>$id_status));
      return $query->row_array();
    }

    public function getTaskByTaskId($id_task){
      $this->db->select('*');
      $this->db->join('task_status', 'task_detail.id_status = task_status.id_status','left');
      $this->db->join('task_project', 'task_project.id_project = task_status.id_project','left');
      $query = $this->db->get_where("task_detail", array('id_detail'=>$id_task));
      return $query->row_array();
    }

    public function updateTaskStatus($id_detail, $id_status){
      $this->db->update("task_detail",array("id_status"=>$id_status), array("id_detail" =>$id_detail));
      return 1;
    }

    public function updateChatStatusByIdJudul($idJudulChat){
      $this->db->update("chat",array("status"=>1), array("judul_chat_id" =>$idJudulChat));
      return 1;
    }

    public function updateChatStatusForNewMessage($idJudulChat, $sendTo){
      $this->db->update("chat",array("status"=>1), array("judul_chat_id" =>$idJudulChat, "send_to" =>$sendTo));
      return 1;
    }

    public function getProjectTaskByStatus($status_id){
      $this->db->select('*');
      $query = $this->db->get_where("task_detail", array('status_id'=>$status_id));
      return $query->result_array();
    }


    public function getAllStatusOrderState(){
        $this->db->select('*');
        $this->db->join('task_status', 'task_detail.id_status = task_status.id_status','left');
        $this->db->join('task_project', 'task_project.id_project = task_status.id_project','left');
        $this->db->join('task_state', 'task_state.id_state = task_status.id_state','left');
        $this->db->order_by("task_status.id_state");
        $this->db->order_by("task_detail.id_status");
        $query = $this->db->get_where('task_detail',array());
		    return $query->result_array();
    }




    public function get_pilihan($id_pilihan){
      $this->db->select('*');
      $query = $this->db->get_where('pilihan',array('id_pilihan'=>$id_pilihan));
      return $query->row_array();
    }

    public function get_pilihans_by_id_pertanyaan($id_pertanyaan){
      $this->db->select('*');
      $query = $this->db->
      order_by('id_pilihan ASC')->
      get_where('pilihan',array('id_pertanyaan'=>$id_pertanyaan));

      return $query->result_array();
    }

    public function update_pilihan($id_pilihan, $nilai){
        $this->db->update("pilihan",array("skor"=>$nilai), array("id_pilihan" =>$id_pilihan));
        return 1;
    }

    public function createNewKonsultasi($judul, $jenis_konsultasi, $id_user){
        $data = array(
          'judul_chat' => $judul,
          'jenis_konsultasi' =>$jenis_konsultasi,
          'send_by' => $id_user
        );
        $this->db->insert("judul_chat",$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }


}
?>
