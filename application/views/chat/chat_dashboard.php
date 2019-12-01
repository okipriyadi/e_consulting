<link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/css/chat.css') ?>">

<div class="row" id="container" style="background:black">

  <div class="container app" >
    <div class="row app-one" style="min-height:400px">
      <div class="col-sm-4 side">
        <div class="side-one">
          <div class="row heading">
            <div class="col-sm-2 col-xs-2 heading-avatar">
              <div class="heading-avatar-icon">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" >
              </div>
            </div>
            <div class="col-sm-10 col-xs-10" style="margin:0px;padding:0px; top:5px; font-weight:500" id="kotak">
              <a class="heading-name-meta" style="color:white"><?php echo $this->session->userdata('nama_econsulting') ?></a>
            </div>
          </div>


          <div class="row sideBar">
            <a href="#" data-toggle="modal" data-target="#konsultasiBaru">
              <div class="row sideBar-body" style="width:100%">
                <div class="col-sm-3 col-xs-3 sideBar-avatar">
                  <div class="avatar-icon">
                    <i class="fas fa-plus-circle fa-3x" style="color:red"></i>
                  </div>
                </div>
                <div class="col-sm-9 col-xs-9 sideBar-main">
                  <div class="row">
                    <div class="col-sm-8 col-xs-8 sideBar-name">
                      <span class="name-meta" style="font-weight:bold; color:red">Buat Konsultasi Baru
                    </span>
                    </div>
                    <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                      <span class="time-meta pull-right">
                    </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>


            <?php
            foreach ($judul_chats as $key => $judul_chat) {
            ?>
            <div class="row sideBar-body" style="width:100%">
              <div class="col-sm-3 col-xs-3 sideBar-avatar">
                <div class="avatar-icon">
                  <i class="fas fa-envelope-square fa-4x"></i>
                </div>
              </div>
              <div class="col-sm-9 col-xs-9 sideBar-main">
                <div class="row">
                  <div class="col-sm-8 col-xs-8 sideBar-name">
                    <span class="name-meta"><?php echo $judul_chat["judul_chat"]?>
                  </span>
                  </div>
                  <div class="col-sm-4 col-xs-4 pull-right sideBar-time">
                    <span class="time-meta pull-right">18:18
                  </span>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
          </div>
        </div>

        </div>

      <div class="col-sm-8 conversation">
        <div class="row heading">
          <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
            <div class="heading-avatar-icon">
              <img src="https://bootdey.com/img/Content/avatar/avatar6.png">
            </div>
          </div>
          <div class="col-sm-9 col-xs-8 heading-name">
            <a class="heading-name-meta" style="color:white">
              <?php
                if($this->session->userdata('role_econsulting')=='penanya'){
                  echo 'Admin Inspektorat';
                }else{
                  print_r($send_by);
                }
              ?>

            </a>
            <span class="heading-online">Online</span>
          </div>
          <div class="col-sm-1 col-xs-1  heading-dot pull-right">
            <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
          </div>
        </div>

        <div class="row message" id="conversation">
          <div class="row message-previous">
            <div class="col-sm-12 previous">
              <a onclick="previous(this)" id="ankitjain28" name="20">
                <?php print_r($judul) ?>
              </a>
            </div>
          </div>


          <?php
            foreach ($chats as $key => $chat) {
              if($chat["send_by"] ==  $this->session->userdata('user_id_econsulting')){
          ?>

                <div class="row message-body" style="width:100%">
                  <div class="col-sm-12 message-main-sender">
                    <div class="sender">
                      <div class="message-text">
                        <?= $chat["message"]; ?>
                      </div>
                      <span class="message-time pull-right">
                        <?= $chat["time"] ?>
                      </span>
                    </div>
                  </div>
                </div>
        <?php
            }else{
        ?>
                  <div class="row message-previous">
                    <div class="col-sm-12 message-main-receiver">
                      <div class="receiver">
                        <div class="message-text">
                         <?= $chat["message"]; ?>
                        </div>
                        <span class="message-time pull-right">
                            <?= $chat["time"] ?>
                        </span>
                      </div>
                    </div>
                  </div>
        <?php
            }
          }
        ?>
        </div>

      </div>



        <div class="row reply" style="position: fixed; bottom: 0; background:red; ">
          <div class="col-sm-1 col-xs-1 reply-emojis">
            <i class="fa fa-smile-o fa-2x"></i>
          </div>
          <div class="col-sm-9 col-xs-9 reply-main">
            <textarea class="form-control" rows="1" id="comment" placeholder="Tulis Disini"></textarea>
          </div>
          <div class="col-sm-1 col-xs-1 reply-recording">
            <i class="fas fa-paper-plane fa-2x " style="color:white" id="sendButton"></i>
          </div>
          <div class="col-sm-1 col-xs-1 reply-send">
            <i class="fa fa-send fa-2x" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<input type="text" id="hereToFocus" style="color:white; border:0px">


<!-- Modal -->
<form  action="<?= base_url()?>chat/newKonsultasi" method="post" >
<div class="modal fade" id="konsultasiBaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Formulir Berikut Untuk Membuat Konsultasi Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="email" >Judul Konsultasi:</label>
          <input type="text" name="judul" class="form-control" id="judul">
        </div>
        <div class="form-group">
          <label for="nama">Jenis Konsultasi:</label>
          <input list="jenis_konsultasi" name="select_konsultasi" class="form-control" id="select_konsultasi">
          <datalist  id="jenis_konsultasi">
              <option value="Reformasi Birokrasi">
              <option value="Zona Integritas">
              <option value="Sakip">
              <option value="Izin Konsinyering">
              <option value="Audit/Reviu Kinerja">
              <option value="Manajemen Risiko">
              <option value="Tindak Lanjut BPK">
              <option value="LHKASN/LHKPN">
              <option value="Gratifikasi">
              <option value="Kepegawaiaan">
          </datalist>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
</div>


<div class="text-center p-t-136">
<a class="txt2" href="#">
  - INSPEKTORAT KEMENPANRB -
  <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
</a>
</div>
</form>

<?php
function custom_footer(){
  global $id_judul_chat;
 ?>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	$(function(){
      $(".heading-compose").click(function() {
        $(".side-two").css({
          "left": "0"
        });
      });

      $(".newMessage-back").click(function() {
        $(".side-two").css({
          "left": "-100%"
        });
      });
  });

  $(document).ready(function(){
    $('#comment').focus();
    $("#sendButton").click(function(){
          var dt = new Date();
          var time = dt.getHours() + ":" + dt.getMinutes()
          var comment = $('#comment').val();
          sendMessage(comment,<?= $id_judul_chat ?>);
          $('#conversation').append(`
                  <div class="row message-body" style="width:100%" id="a`+ time +`">
                    <div class="col-sm-12 message-main-sender">
                      <div class="sender">
                        <div class="message-text">
                          `+ comment +`
                        </div>
                        <span class="message-time pull-right">
                          `+time+`
                        </span>
                      </div>
                    </div>
                  </div>
         `);
         $('#comment').val('');
         $('#hereToFocus').focus();
         $('#comment').focus();
     });


    function sendMessage(message, id_judul_chat){
      $.ajax({
                url: "<?php echo base_url(); ?>chat/sendMessage",
                type: "post",
                datatype: 'json',
                data: {"message":message, "id_judul_chat":id_judul_chat},
                success: function(data){

                  },
                error: function(xhr, statusTeks, kesalahan){
                      console.log("Kesalahan : " + kesalahan);
                }
          })
    };

    function checkNewMessage(){
      $.ajax({
                url: "<?php echo base_url(); ?>chat/getNewMessage",
                type: "post",
                datatype: 'json',
                data: {"id_judul_chat":<?= $id_judul_chat ?>},
                success: function(data){
                      var dt = new Date();
                      var time = dt.getHours() + ":" + dt.getMinutes();
                      var obj = jQuery.parseJSON(data);
                      if(obj.length != 0){
                          $.each(obj, function( index, value ) {
                                $('#conversation').append(`
                                        <div class="row message-body" style="width:100%" id="a`+ time +`">
                                          <div class="col-sm-12 message-main-receiver">
                                            <div class="receiver">
                                              <div class="message-text">
                                                `+ value["message"] +`
                                              </div>
                                              <span class="message-time pull-right">
                                                `+time+`
                                              </span>
                                            </div>
                                          </div>
                                        </div>
                               `);
                               $('#comment').val('');
                               $('#hereToFocus').focus();
                               $('#comment').focus();
                            });
                     }
                },
                error: function(xhr, statusTeks, kesalahan){
                      console.log("Kesalahan : " + kesalahan);
                }
          })
      }
      interval = setInterval(checkNewMessage, 1000);
  });
  </script>
<?php
}
?>
