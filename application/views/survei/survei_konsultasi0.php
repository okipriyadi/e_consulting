<div class="row" style="padding:10px">
    <div class="col-md-4 " style=" ">
    </div>
		<div class="col-md-4 " style=" ">
			<div style="margin:15px; background-color:#b5cdf2;">
				<center>
						<img src="<?php echo base_url() ?>assets/template/images/survei-kepuasan-konsultasi2.jpg" style="margin-top:10px;height:130px">
						<br/>
						<br/>
						<h5>Survei Kepuasan Konsultasi</h5>
            <button class="btn btn-secondary btn-lg" style="margin-bottom:20px" data-toggle="modal" data-target="#modalDataAwal" >Mulai Survei</button>
				</center>
			</div>
		</div>
</div>




<!-- Modal Pertama -->
<div class="modal fade" id="modalDataAwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="email" ><?=  $surveis[0]['pertanyaan']?></label><br>
          <?php //print_r($surveis)?>
          <input list="jawaban1" name="jawaban1">
          <datalist name="jawaban1" id="jawaban1">
            <?php
              foreach ($surveis as $key ) {
                if($key['pertanyaan'] == $surveis[0]['pertanyaan'] ){
            ?>
                  <option value="<?= $key['pilihan'] ?>">
            <?php
                }
              }
            ?>

          </datalist>
          <br ><hr >
          <label for="email" ><?=  $surveis[7]['pertanyaan']?></label><br>
          <input list="jawaban2" name="jawaban2">
          <datalist name="jawaban2" id="jawaban2">
            <?php
              foreach ($surveis as $key ) {
                if($key['pertanyaan'] == $surveis[7]['pertanyaan'] ){
            ?>
                  <option value="<?= $key['pilihan'] ?>">
            <?php
                }
              }
            ?>

          </datalist>
          <br ><hr >
          <label for="email" ><?=  $surveis[11]['pertanyaan']?></label><br>
          <input list="jawaban3" name="jawaban3">
          <datalist name="jawaban3" id="jawaban3">
            <?php
              foreach ($surveis as $key ) {
                if($key['pertanyaan'] == $surveis[11]['pertanyaan'] ){
            ?>
                  <option value="<?= $key['pilihan'] ?>">
            <?php
                }
              }
            ?>

          </datalist>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataDua">Next</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal Kedua -->
<div class="modal fade" id="modalDataDua" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <?php //print_r($surveis)?>
          <label for="email" ><?=  $surveis[25]['pertanyaan']?></label><br>

          <input type="radio" value="Ya">&nbsp; Ya</option> &nbsp;&nbsp;&nbsp;
          <input type="radio" value="Tidak">&nbsp; Tidak</option>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataTiga">Next</button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Modal ketiga -->
<div class="modal fade" id="modalDataTiga" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow:auto">
        <div class="form-group">
          <?php //print_r($surveis)?>
          <label for="email" ><?=  $surveis[27]['pertanyaan']?></label><br>

          <input type="radio" value="Ya">&nbsp; Ya</option> &nbsp;&nbsp;&nbsp;
          <input type="radio" value="Tidak">&nbsp; Tidak</option>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataEmpat">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal ketiga -->
<div class="modal fade" id="modalDataEmpat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow:auto">
        <div class="form-group">
          <?php //print_r($surveis)?>
          <label for="email" ><?=  $surveis[29]['pertanyaan']?></label><br>

          <input type="radio" value="Ya">&nbsp; Ya</option> &nbsp;&nbsp;&nbsp;
          <input type="radio" value="Tidak">&nbsp; Tidak</option>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataLima">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal kelima -->
<div class="modal fade" id="modalDataLima" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow:auto">
        <div class="form-group">
          <?php //print_r($surveis)?>
          <label for="email" ><?=  $surveis[31]['pertanyaan']?></label><br>

          <input type="radio" value="Ya">&nbsp; Ya</option> &nbsp;&nbsp;&nbsp;
          <input type="radio" value="Tidak">&nbsp; Tidak</option>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataEnam">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal keenam -->
<div class="modal fade" id="modalDataEnam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow:auto">
        <div class="form-group">
          <?php //print_r($surveis)?>
          <label for="email" ><?=  $surveis[33]['pertanyaan']?></label><br>

          <input type="radio" value="Ya">&nbsp; Ya</option> &nbsp;&nbsp;&nbsp;
          <input type="radio" value="Tidak">&nbsp; Tidak</option>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataTujuh">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal ketujuh -->
<div class="modal fade" id="modalDataTujuh" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mohon Isi Survei Berikut </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow:auto">
        <div class="form-group">
          <?php //print_r($surveis)?>
          <label for="email" ><?=  $surveis[35]['pertanyaan']?></label><br>

          <input type="radio" value="Ya">&nbsp; Ya</option> &nbsp;&nbsp;&nbsp;
          <input type="radio" value="Tidak">&nbsp; Tidak</option>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalDataDua">Next</button>
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
