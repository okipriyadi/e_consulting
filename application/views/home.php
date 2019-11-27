<div class="row">
  <div class="col-md-8">
      <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(<?= base_url()?>assets/template/images/menpan3.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate">
              <h1 class="mb-4" style="font-size:35px; text-shadow: 2px 2px 8px #000000,  0 0 5px #b5cdf2;">Komitmen kami menjadi <span>mitra unit kerja mencapai kinerja </span></h1>

            </div>
          </div>
          </div>
        </div>

        <div class="slider-item" style="background-image:url(<?= base_url()?>assets/template/images/menpan2.jpg);">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 text-center ftco-animate">
              <h1 class="mb-4" style="font-size:35px; text-shadow: 2px 2px 8px #000000,  0 0 5px #b5cdf2;">Untuk konsultasi bersifat rahasia dapat berkonsultasi langsung ke ruang Inspektorat </h1>
              <br />
            </div>
          </div>
          </div>
        </div>
      </section>
  </div>
  <div class="col-md-4">
    <div class="row" >
      <div class="col-md-12" style="background: url(<?= base_url()?>assets/template/images/menpan3v.jpg); height: 600px; ">
          <div class="row login-box" >
                <form class="login100-form validate-form" action="<?= base_url()?>index.php/login" method="post" >
                  <h4 class="login100-form-title" style="text-shadow: 0 0 0 14px #f7f5ec;"><b><u>LOGIN PEGAWAI KEMENPAN</u></b></h4>
                    <small>Masuk dengan menggunakan akun smart.menpan.go.id</small>
                  </span>
                  <br>
                    <input class="input100" type="text" name="username" placeholder="Email">
                  <div class="wrap-input100 validate-input" data-validate="Password is required" >
                    <input class="input100" type="password" name="password" placeholder="Password">
                  </div>

                  <div class="container-login100-form-btn">
                    <button class="btn btn-primary" style="border-radius:0px;">
                      Login
                    </button>
                  </div>

                  <div class="text-center p-t-136">
                    <a class="txt2" href="#">
                      - INSPEKTORAT KEMENPANRB -
                      <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                  </div>
                </form>
          </div>

          <div class="row login-box" >

                  <h4 ><b><u>LOGIN SEBAGAI TAMU</u></b></h4>

                  </span>
                  <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz" style="opacity:1">
                    <input  type="email" name="email" placeholder="Email" id="emailtamuawal">
                  </div>

                  <div class="container-login100-form-btn">
                    <button type="button" class="btn btn-primary" id="btntamu" style="border-radius:0px;" data-toggle="modal" data-target="#formTamu">
                      Login
                    </button>

                    <!-- Modal -->
                    <form  action="<?= base_url()?>index.php/login" method="post" >
                    <div class="modal fade" id="formTamu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Formulir Berikut Untuk Login</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label for="email" >Email address:</label>
                              <input type="email" name="emailtamu" class="form-control" id="emailtamu">
                            </div>
                            <div class="form-group">
                              <label for="nama">Nama:</label>
                              <input type="text" name="nama" class="form-control" id="nama">
                            </div>
                            <div class="form-group">
                              <label for="instansi">Asal Instansi:</label>
                              <input type="text" name="instansi" class="form-control" id="instansi">
                            </div>
                            <div class="form-group">
                              <label for="konsultasi">Jenis Konsultasi:</label>
                              <input type="text" name="konsultasi" class="form-control" id="konsultasi">
                            </div>
                            <div class="form-group">
                              <label for="hp">No HP/WA:</label>
                              <input type="text" name="hp" class="form-control" id="hp">
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
          </div>
      </div>
    </div>
  </div>
</div>
<section class="ftco-services ftco-no-pb">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <!--<span class="flaticon-teacher"></span>-->
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading"></h3>
            <p> Semangat melayani untuk negeri</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <!--<span class="flaticon-teacher"></span>-->
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading"></h3>
            <p> Korektif, prefentif, prediktif dan proaktif </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <!--<span class="flaticon-teacher"></span>-->
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading"></h3>
            <p>Integritas, Profesionalitas, Akuntabilitas, Objektivitas </p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
            <!--<span class="flaticon-teacher"></span>-->
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading"></h3>
            <p> Partner anda mencapai kinerja </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
  <div class="container" >
    <div class="row">
      <div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
        <div class="text px-4 ftco-animate" >
          <h2 class="mb-4" id="tutorial">Selamat datang di layanan konsultasi berbasis web</h2>
          <p>Untuk mewujudkan peran Inspektorat KemenPANRB sebagai mitra unit kerja yang aktif dan proaktif, kami mencatat pertanyaan-pertanyaan yang banyak muncul dari unit kerja dan merangkumnya dalam ke dalam FAQ (Frequently Asked Question) sehingga memudahkan unit lain yang mempunyai beberapa kendala yang serupa sehinga bisa teratasi dengan lebih optimal. </p>

        </div>
      </div>
      <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
        <h2 class="mb-4">Yang kami tawarkan</h2>
        <p>E-consulting adalah layanan berbasis web yang disediakan oleh Inspektorat KemenPANRB untuk memudahkan unit kerja melakukan konsultasi.</p>
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
              <div class="text">
                <h3>Aman</h3>
                <p>Segala informasi disimpan dengan aman di server milik Kementerian PANRB</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
              <div class="text">
                <h3>Cepat tanggap</h3>
                <p>Jaminan chat akan dibalas minimal 10 menit jika dilaksanakan pada jam kerja. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
              <div class="text">
                <h3>Auditor Bersertifikasi</h3>
                <p>Auditor yang memberikan layanan sudah melewati ujian sertifikasi untuk meningkatkan kompetensinya dalam menjalankan tugas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
              <div class="text">
                <h3>Fasilitas </h3>
                <p>Untuk informasi yang bersifat sangat rahasia dan terbatas, dapat langsung mendatangi office kami. Kami menyediakan ruang konsultasi yang nyaman yang dilengkapi dengan tablet dan computer yang dapat diakses langsung oleh pengunjung</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
              <div class="text">
                <h3>Download</h3>
                <p>Kami menyediakan sarana download aturan, template dokumen dan tutorial yang memudahkan unit kerja untuk melakukan tugasnya.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-2 d-flex">
              <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
              <div class="text">
                <h3>FAQ</h3>
                <p>Kami menyediakan FAQ terkait pertanyaan yang sering ditanyakan kepada kami.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Auditor</span></h2>
        <p></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(<?= base_url()?>assets/template/images/auditor-1.png);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Geni Indah</h3>
            <span class="position mb-2">Auditor</span>
            <div class="faded">
              <p>Integrity is doing the right thing even when no one is watching.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(<?= base_url()?>assets/template/images/auditor-2.jpeg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Azizah Try Wulandari</h3>
            <span class="position mb-2">Auditor</span>
            <div class="faded">
              <p>Personal accountability requires mindfulness, acceptance, honesty, and courage.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(<?= base_url()?>assets/template/images/auditor-3.jpeg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Ref Fitri</h3>
            <span class="position mb-2">Auditor</span>
            <div class="faded">
              <p>Professionalism doesn't mean you need to wear a business suit. Profesionalism is being confident and respectful.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(<?= base_url()?>assets/template/images/auditor-4.jpeg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Buono Aji</h3>
            <span class="position mb-2">Auditor</span>
            <div class="faded">
              <p>Objectivity requires taking subjectivity into account.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Layanan</span> Konsultasi</h2>
        <p></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 course d-lg-flex ftco-animate">
        <div class="img" style="background-image: url(<?= base_url()?>assets/template/images/course-1.jpg);"></div>
        <div class="text bg-light p-4">
          <h3><a href="#">Reformasi Birokrasi</a></h3>
          <p class="subheading"><span>PermenPANRB</span> Nomor 30 Tahun 2018 </p>
          <p>Inspektorat PANRB melayani konsultansi kepada unit kerja tentang bagaimana membangun Reformasi Birokrasi Internal di unit kerja agar berjalan dengan baik sesuai ketentuan yang berlaku.</p>
        </div>
      </div>
      <div class="col-md-6 course d-lg-flex ftco-animate">
        <div class="img" style="background-image: url(<?= base_url()?>assets/template/images/course-2.jpg);"></div>
        <div class="text bg-light p-4">
          <h3><a href="#">Zona Integritas</a></h3>
          <p class="subheading"><span>PermenPANRB</span> Nomor 10 Tahun 2019</p>
          <p>Inspektorat PANRB melayani konsultansi kepada unit kerja tentang bagaimana membangun unit kerja WBK/WBBM mulai dari cara pengajuannya dan kriteria-kriteria yang dibutuhkan.</p>
        </div>
      </div>
      <div class="col-md-6 course d-lg-flex ftco-animate">
        <div class="img" style="background-image: url(<?= base_url()?>assets/template/images/course-3.jpg);"></div>
        <div class="text bg-light p-4">
          <h3><a href="#">SAKIP</a></h3>
          <p class="subheading"><span>PermenPANRB</span> Nomor 12 Tahun 2015</p>
          <p>Inspektorat PANRB melayani konsultansi pada unit kerja terkait bagaimana mengimplementasikan SAKIP yang baik mulai dari perencanaan kinerja, pengukuran kinerja, pelaporan kinerja, evaluasi internal, dan pencapaian sasaran kinerja.</p>
        </div>
      </div>
      <div class="col-md-6 course d-lg-flex ftco-animate">
        <div class="img" style="background-image: url(<?= base_url()?>assets/template/images/course-4.jpg);"></div>
        <div class="text bg-light p-4">
          <h3><a href="#">Gratifikasi</a></h3>
          <p class="subheading"><span>PermenPANRB</span> Nomor 4 Tahun 2015 </p>
          <p>Inspektorat PANRB memberikan layanan konsultansi kepada seluruh pegawai di Kementerian PANRB apabila ingin menanyakan terkait gratifikasi ataupun melakukan pelaporan gratifikasi.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <h2 class="mb-4"><span>Nilai Dasar Pegawai</span> Kementerian PANRB</h2>
        <p>Berdasarkan Peraturan Menteri PANRB Nomor 9 Tahun 2017 tentang Kode Etik Pegawai Kementerian PANRB, nilai dasar yang harus dijunjung tinggi adalah:</p>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img mr-4" style="background-image: url(<?= base_url()?>assets/template/images/teacher-1.png)">
              </div>
              <div class="text ml-2 bg-light">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p>Melaksanakan tugas dengan jujur serta konsisten antara perkataan dan perbuatan, berperilaku terpuji, disiplin dan penuh dedikasi berdasarkan norma dan etika </p>
                <p class="name">INTEGRITAS</p>
                <span class="position">Nilai Dasar</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img mr-4" style="background-image: url(<?= base_url()?>assets/template/images/teacher-2.png)">
              </div>
              <div class="text ml-2 bg-light">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p>Menyelesaikan tugas dengan baik, tuntas, sesuai dengan kompetensi (keahlian) dan inovatif untuk mencapai hasil prima melalui kerjasama</p>
                <p class="name">PROFESIONAL</p>
                <span class="position">Nilai Dasar</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img mr-4" style="background-image: url(<?= base_url()?>assets/template/images/teacher-3.png)">
              </div>
              <div class="text ml-2 bg-light">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
                <p>Bertanggung jawab terhadap setiap tindakan, perilaku dan tugas, baik dari segi proses maupun hasil</p>
                <p class="name">AKUNTABEL</p>
                <span class="position">Nilai Dasar</span>
              </div>
            </div>
          </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<section class="ftco-gallery">
  <div class="container-wrap">
    <div class="row no-gutters">
      <div class="col-md-3 ftco-animate">
        <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= base_url()?>assets/template/images/course-1.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= base_url()?>assets/template/images/image_2.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= base_url()?>assets/template/images/image_3.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
      <div class="col-md-3 ftco-animate">
        <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?= base_url()?>assets/template/images/image_4.jpg);">
          <div class="icon mb-4 d-flex align-items-center justify-content-center">
            <span class="icon-instagram"></span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<?php
function custom_footer(){
?>
  <script>
  $(document).ready(function (){
    $('#btntamu').click(function(){
      $('#emailtamu').val($('#emailtamuawal').val());
      $.ajax({
          url: "<?php echo base_url('index.php/login/login_tamu')?>" ,
          type: "post",
          data :{"email":$('#emailtamuawal').val()},
          success: function(response){
            if(response == 1){
              //window.location.replace("<?= base_url('index.php/chat/');?>");
            }
          }
      });
    });
  });

  </script>
<?php
}
?>
