<div class="py-2 bg-primary">
  <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md-5 pr-4 d-flex topper align-items-center">
            <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
            <span class="text">Jalan Jenderal Sudirman Kav. 69 Lantai 5, Jakarta Selatan </span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
            <span class="text">inspektorat@menpan.go.id </span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
            <span class="text"> (021) – 739381-89  Ext : 2226
</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
  <div class="container d-flex align-items-center" style="height">
    <a class="navbar-brand" href="index.html">
      <img src="<?= base_url()?>assets/template/images/e_consulting.ico" style="display: inline-block; position: absolute; height:80px; margin-top:-20px">
      <span style="padding-left :90px">E-Consulting &nbsp; Inspektorat</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link pl-0">Home</a></li>
        <!--<li class="nav-item"><a href="#tutorial" class="nav-link">Tutorial</a></li> -->
        <?php
            if (isset($this->session->userdata['logged_in']))  {
        ?>
              <li class="nav-item"><a href="<?= base_url() ?>index.php/chat" class="nav-link">Chat</a></li>
        <?php
            }
         ?>
        <li class="nav-item"><a href="#" class="nav-link">Auditor</a></li>
        <li class="nav-item"><a href="<?= base_url() ?>index.php/survei" class="nav-link">Survei</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Layanan Konsultasi</a></li>
        <li class="nav-item"><a href="<?= base_url() ?>index.php/Download" class="nav-link">download</a></li>
        <li class="nav-item"><a href="<?= base_url() ?>index.php/faq" class="nav-link">FAQ</a></li>
        <?php
            if (isset($this->session->userdata['logged_in']))  {
        ?>
              <li class="nav-item"><a href="<?= base_url() ?>index.php/login/logout" class="nav-link">Logout</a></li>
        <?php
            }else{
        ?>
              <li class="nav-item"><a href="<?= base_url() ?>" class="nav-link">Login</a></li>
        <?php
        }
         ?>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->
