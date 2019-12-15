<?php

class Survei extends CI_Controller
{
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        if (!isset($this->session->userdata['logged_in_econsulting']) || $this->session->userdata['logged_in_econsulting'] === false) {
            redirect(base_url());
        }

        $this->user = $this->db->get_where('users', array('id' => $this->session->userdata['user_id_econsulting']), 1)->row();
    }

    public function index()
    {
         function yaTidak($datas){
           $jmlTidak = 0 ;
           $jmlYa = 0;
           foreach($datas as $data){
             if($data["jawaban"]=="Tidak"){
               $jmlTidak = $data["total"];
             }elseif($data["jawaban"]=="Ya"){
               $jmlYa = $data["total"];
             }
           }
           return array("Ya"=>$jmlYa, "Tidak"=>$jmlTidak);
         }

         $count_konsultan = $this->survei_model->count_jawaban(3, 229);
         $count_akomodasi = $this->survei_model->count_jawaban(3, 230);
         $count_akomodasi = yaTidak($count_akomodasi);
         $count_mudah = $this->survei_model->count_jawaban(3, 231);
         $count_mudah = yaTidak($count_mudah);
         $count_informasi = $this->survei_model->count_jawaban(3, 232);
         $count_informasi = yaTidak($count_informasi);
         $count_sopan = $this->survei_model->count_jawaban(3, 233);
         $count_sopan = yaTidak($count_sopan);
         $count_terbantu = $this->survei_model->count_jawaban(3, 234);
         $count_terbantu = yaTidak($count_terbantu);
         $get_bintangs = $this->survei_model->get_bintang();
         $i = 0;
         $jumlah = 0;
         foreach($get_bintangs as $bintang){
           $jumlah = $jumlah + $bintang["jawaban"];
           $i++;
         }
         $count_bintang = $jumlah/$i;
         $GLOBALS['count_bintang'] = $count_bintang;
         $GLOBALS['count_konsultan'] = $count_konsultan;
				 $data = array(
           'content' => 'survei/survei.php',
           'count_bintang'=>$count_bintang,
           'count_akomodasi'=>$count_akomodasi,
           'count_mudah'=>$count_mudah,
           'count_informasi'=>$count_informasi,
           'count_sopan'=>$count_sopan,
           'count_terbantu'=>$count_terbantu
         );
				 $this->load->view('index', $data);
    }

    public function survei_konsultasi()
    {
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           print_r($_POST);
           foreach ($_POST as $key => $value) {
             if($value){
               $id_pertanyaan = explode("pertanyaan", $key)[1];
               $result = $this->survei_model->create_jawaban($value, $id_pertanyaan);
               redirect(base_url("index.php/survei"));
             }
           }
         }

         $surveis = $this->survei_model->getSurveiById(3);
         $id_judul = $this->input->get('id_judul_chat');
         $judul_chat =  "";
         if($id_judul){
            $judul_chat = $this->chat_model->getJudulChatByIdJudul($id_judul);
         }
         $data = array(
           'content' => 'survei/survei_konsultasi.php',
           'judul_chat' => $judul_chat,
           'surveis' => $surveis,
           // 'count_consultan'=> $count_konsultan
         );
         $this->load->view('index', $data);

    }
}
