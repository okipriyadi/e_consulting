<!DOCTYPE html>
<html lang="en">
  <?php include "head.php"; ?>
  <body>
    <style>


      .login-box{
        background: rgba(255,255,255,0.8);
        margin-top:  50px;
        margin-left: 20px;
        margin-right: 20px;
        padding-left: 10px;
        border-radius:6px;
        box-shadow: 0 0 0 14px #f7f5ec;


        }
    </style>
	  <?php include "body_header.php";?>
    <?php include $content;?>
    <?php include "body_footer.php"?>


  <script src="<?= base_url()?>assets/template/js/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/popper.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/bootstrap.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url()?>assets/template/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/owl.carousel.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/aos.js"></script>
  <script src="<?= base_url()?>assets/template/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/scrollax.min.js"></script>
  <script src="<?= base_url()?>assets/template/js/main.js"></script>
  <?php if(function_exists("custom_footer")){
    custom_footer();
  }
  if($this->session->userdata('role_econsulting')=='admin' or $this->session->userdata('role_econsulting')=='konsultan'){
  ?>
  <script>
  var interval2 = null;
  $(document).ready(function(){
    function checkNewMessage2(){
      $.ajax({
                url: "<?php echo base_url(); ?>chat/grabNewMessage",
                type: "post",
                datatype: 'json',
                data: {},
                success: function(data){
                      var obj = jQuery.parseJSON(data);
                      if(obj.length != 0){
                                var txt;
                                var msg_alert = "Ada Pesan Baru Masuk : '"+ obj[0]["judul_chat"] + "'. Apakah anda ingin menjawabnya ?";
                                var r = confirm(msg_alert);
                                if (r == true) {
                                  clearInterval(interval2);
                                  $.ajax({
                                            url: "<?php echo base_url(); ?>chat/grabNewMessageUpdate",
                                            type: "post",
                                            datatype: 'json',
                                            data: {"id_judul_chat":obj[0]["id_judul_chat"]},
                                            success: function(data){
                                              var url = "<?php echo base_url("chat")?>";
                                              window.location.replace(url);
                                            },
                                            error: function(xhr, statusTeks, kesalahan){
                                                  console.log("Kesalahan : " + kesalahan);
                                            }
                                  })
                                } else {
                                  txt = "Beritahu anggota inspektorat lain agar membalas pesan dari unit kerja";
                                  alert(txt);
                                }
                      };

                },
                error: function(xhr, statusTeks, kesalahan){
                      console.log("Kesalahan : " + kesalahan);
                }
          })
      }
      interval2 = setInterval(checkNewMessage2, 5000);
    });
  </script>
<?php
  }
?>
  </body>
</html>
