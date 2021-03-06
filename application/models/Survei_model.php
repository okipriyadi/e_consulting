<?php
class Survei_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }



    public function getSurveiById($id_survei){
      $this->db->select('*');
      $this->db->order_by("pertanyaan.id_pertanyaan");
      $this->db->join('pilihan','pilihan.id_pertanyaan = pertanyaan.id_pertanyaan','left');
      $query = $this->db->get_where("pertanyaan", array('id_survei'=>$id_survei));
      return $query->result_array();
    }

    public function create_jawaban($jawaban, $id_pertanyaan){
        $this->db->insert("jawaban",array("jawaban"=>$jawaban, "id_pertanyaan"=>$id_pertanyaan));
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function get_bintang(){
        $this->db->select('jawaban');
        $this->db->group_by('jawaban');
        $this->db->order_by('jawaban');
        $result = $this->db->get_where("jawaban",array("id_pertanyaan"=>0));
        return $result->result_array();
    }

    public function count_jawaban($id_survei, $id_pertanyaan){
        $this->db->select('count(jawaban) as total, jawaban');
        $this->db->group_by('jawaban');
        $this->db->order_by('jawaban');
        $result = $this->db->get_where("jawaban",array("id_pertanyaan"=>$id_pertanyaan));
        return $result->result_array();
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

    public function create_proyek($data){
        $this->db->insert("task_project",$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function create_pekerjaan($data){
        $this->db->insert("task_detail",$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function create_history($data_history){
        $this->db->insert("task_history",$data_history);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function create_status($data){
        $this->db->insert("task_status",$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

}
?>
