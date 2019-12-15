<style>
.jududl_tabel{
  background-color:black;
  color:white;
  text-align:center;
  font-weight: bold;
}

.ganjil {
  background-color:#8f959c;
  color:white;

}

.genap {
  background-color:#545656;
  color:white
}


</style>
<div class="row" style="padding:10px">
  <div class="col-md-12" >
    <center>
    <h1>Survei Kepuasan Konsultasi <?php if($judul_chat){ echo $judul_chat["judul_chat"]; } ?></h1>
    <form action="<?= base_url() ?>index.php/survei/survei_konsultasi" method="post">
    <table class="table table-bordered dataTable" style="width:80%">
      <tr class="jududl_tabel">
        <td>No</td>
        <td width="40%">Pertanyaan</td>
        <td>Pilihan</td>
      </tr>
      <tr class="ganjil">
        <td>1</td>
        <td><?= $surveis[0]["pertanyaan"] ?></td>
        <td>
          <input list="jawaban1" name="pertanyaan<?=$surveis[0]['id_pertanyaan']?>">
          <datalist id="jawaban1">
            <?php
              foreach ($surveis as $key ) {
                if($key['pertanyaan'] == $surveis[0]['pertanyaan'] ){
            ?>
                  <option value="<?= $key['pilihan'] ?>" >
            <?php
                }
              }
            ?>
            </datalist>
        </td>
      </tr>
      <tr class="genap">
        <td>2</td>
        <td><?= $surveis[7]['pertanyaan'] ?></td>
        <td>
          <input list="jawaban2" name="pertanyaan<?=$surveis[7]['id_pertanyaan']?>">
          <datalist id="jawaban2">
              <?php
                foreach ($surveis as $key ) {
                  if($key['pertanyaan'] == $surveis[7]['pertanyaan'] ){
              ?>
                    <option value="<?= $key['pilihan'] ?>" >
              <?php
                  }
                }
              ?>
          </datalist>
        </td>
      </tr>
      <tr class="ganjil">
        <td>3</td>
        <td><?= $surveis[11]['pertanyaan'] ?></td>
        <td>
              <?php
                foreach ($surveis as $key ) {
                  if($key['pertanyaan'] == $surveis[11]['pertanyaan'] ){
              ?>
                    <input type="radio" value="<?= $key['pilihan'] ?>" name="pertanyaan<?=$surveis[11]['id_pertanyaan']?>">&nbsp; <?= $key['pilihan'] ?> <br>
              <?php
                  }
                }
              ?>
        </td>
      </tr>
      <tr class="genap">
        <td>4</td>
        <td><?= $surveis[25]['pertanyaan'] ?></td>
        <td>
              <input type="radio" value="Ya" name="pertanyaan<?=$surveis[25]['id_pertanyaan']?>">&nbsp; Ya <br>
              <input type="radio" value="Tidak" name="pertanyaan<?=$surveis[25]['id_pertanyaan']?>">&nbsp; Tidak<br>
              <label>Jika Tidak Apa Alasannya</label><br>
              <input type="text" name="pertanyaan239">
        </td>
      </tr>
      <tr class="ganjil">
        <td>5</td>
        <td><?= $surveis[27]['pertanyaan'] ?></td>
        <td>
              <input type="radio" value="Ya" name="pertanyaan<?=$surveis[27]['id_pertanyaan']?>">&nbsp; Ya <br>
              <input type="radio" value="Tidak" name="pertanyaan<?=$surveis[27]['id_pertanyaan']?>">&nbsp; Tidak<br>
              <label>Jika Tidak Apa Alasannya</label><br>
              <input type="text" name="pertanyaan240">
        </td>
      </tr>
      <tr class="ganjil">
        <td>6</td>
        <td><?= $surveis[29]['pertanyaan'] ?></td>
        <td>
              <input type="radio" value="Ya" name="pertanyaan<?=$surveis[29]['id_pertanyaan']?>">&nbsp; Ya <br>
              <input type="radio" value="Tidak" name="pertanyaan<?=$surveis[29]['id_pertanyaan']?>">&nbsp; Tidak<br>
              <label>Jika Tidak Apa Alasannya</label><br>
              <input type="text" name="pertanyaan241">
        </td>
      </tr>
      <tr class="genap">
        <td>7</td>
        <td><?= $surveis[31]['pertanyaan'] ?></td>
        <td>
              <input type="radio" value="Ya" name="pertanyaan<?=$surveis[31]['id_pertanyaan']?>">&nbsp; Ya <br>
              <input type="radio" value="Tidak" name="pertanyaan<?=$surveis[31]['id_pertanyaan']?>">&nbsp; Tidak<br>
              <label>Jika Tidak Apa Alasannya</label><br>
              <input type="text" name="pertanyaan242">
        </td>
      </tr>
      <tr class="ganjil">
        <td>8</td>
        <td><?= $surveis[33]['pertanyaan'] ?></td>
        <td>
              <input type="radio" value="Ya" name="pertanyaan<?=$surveis[33]['id_pertanyaan']?>">&nbsp; Ya <br>
              <input type="radio" value="Tidak" name="pertanyaan<?=$surveis[33]['id_pertanyaan']?>">&nbsp; Tidak<br>
              <label>Jika Tidak Apa Alasannya</label><br>
              <input type="text" name="pertanyaan243">
        </td>
      </tr>
      <tr class="genap">
        <td>9</td>
        <td><?= $surveis[40]['pertanyaan'] ?></td>
        <td>
              <textarea name="pertanyaan245"></textarea>
        </td>
      </tr>
      <tr class="ganjil">
        <td>10</td>
        <td>Seberapa puas anda dengan pelayanan kami</td>
        <td>



              <i class="fa fa-star fa-2x puas" id="puas1"></i>

              <i class="fa fa-star fa-2x puas" id="puas2"></i>

              <i class="fa fa-star fa-2x puas" id="puas3"></i>

              <i class="fa fa-star fa-2x puas" id="puas4"></i>

              <i class="fa fa-star fa-2x puas" id="puas5"></i>
              <input type="text" value="0" name="pertanyaan0" id="pertanyaan0" style="display:none">

        </td>
      </tr>
    </table>
    <input type="submit" class="btn btn-primary btn-lg">
  </form>
  </center>

  </div>
</div>
<?php
function custom_footer(){
?>
<script>
$( document ).ready(function(){
  var sudahClick = 0;


  function bintang1(){
    $("#puas1").css({"color":"yellow"});
    $("#puas2").css({"color":"white"});
    $("#puas3").css({"color":"white"});
    $("#puas4").css({"color":"white"});
    $("#puas5").css({"color":"white"});
  }

  function bintang2(){
    $("#puas1").css({"color":"yellow"});
    $("#puas2").css({"color":"yellow"});
    $("#puas3").css({"color":"white"});
    $("#puas4").css({"color":"white"});
    $("#puas5").css({"color":"white"});
  }

  function bintang3(){
    $("#puas1").css({"color":"yellow"});
    $("#puas2").css({"color":"yellow"});
    $("#puas3").css({"color":"yellow"});
    $("#puas4").css({"color":"white"});
    $("#puas5").css({"color":"white"});
  }

  function bintang4(){
    $("#puas1").css({"color":"yellow"});
    $("#puas2").css({"color":"yellow"});
    $("#puas3").css({"color":"yellow"});
    $("#puas4").css({"color":"yellow"});
    $("#puas5").css({"color":"white"});
  }

  function bintang5(){
    $("#puas1").css({"color":"yellow"});
    $("#puas2").css({"color":"yellow"});
    $("#puas3").css({"color":"yellow"});
    $("#puas4").css({"color":"yellow"});
    $("#puas5").css({"color":"yellow"});
  }

  $("#puas1").hover(function(){
    if(sudahClick == 0){
      bintang1();
    }
  })
  $("#puas2").hover(function(){
    if(sudahClick == 0){
      bintang2();
    }
  })
  $("#puas3").hover(function(){
    if(sudahClick == 0){
      bintang3();
    }
  });
  $("#puas4").hover(function(){
    if(sudahClick == 0){
      bintang4();
    }
  });
  $("#puas5").hover(function(){
    if(sudahClick == 0){
      bintang5()
    }
  });

  $("#puas1").click(function(){
      sudahClick = sudahClick +1;
      bintang1();
      $('#pertanyaan0').val("1")
  })
  $("#puas2").click(function(){
      sudahClick = sudahClick +1;
      bintang2();
      $('#pertanyaan0').val("2")
  })
  $("#puas3").click(function(){
      sudahClick = sudahClick +1;
      bintang3();
      $('#pertanyaan0').val("3")
  });
  $("#puas4").click(function(){
      sudahClick = sudahClick +1;
      bintang4();
      $('#pertanyaan0').val("4")
  });
  $("#puas5").click(function(){
      sudahClick = sudahClick +1;
      bintang5()
      $('#pertanyaan0').val("5");
  });

  $(".puas").mouseleave(function(){
    if(sudahClick == 0){
      $(".puas").css({"color":"white"});
    }
  });


});
</script>
<?php
}
?>
