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
  ?>  

  </body>
</html>
