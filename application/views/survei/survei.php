<link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/css/chat.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/template/css/card.css') ?>">
<script src="<?= base_url('assets/template/js/') ?>Chart.bundle.js"></script>


<div class="row" style="padding:10px">
		<div class="col-md-4" style=" ">
			<div style="margin:15px; background-color:#b5cdf2;">
				<center >
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSdvAHUI9hKREWelgNR97dnCSc--ogYJs_CAjUIJmDDFhE9NxA/viewform?usp=sf_link" target="_blank">
						<img src="<?php echo base_url() ?>assets/template/images/logo2.png" style="margin-top:10px;height:130px">
						<br/>
						<br/>
						<h5>Survei Integritas Organisasi</h5>
					</a>
				</center>
			</div>
		</div>
		<div class="col-md-4" style=" ">
			<div style="margin:15px; background-color:#b5cdf2;">
				<center>
					<a href="https://forms.gle/NboSmMHw3CVSQJA37" target="_blank">
						<img src="<?php echo base_url() ?>assets/template/images/survei-integritas.jpg" style="margin-top:10px;height:130px">
						<br/>
						<br/>
						<h5>Survei Integritas Jabatan</h5>
					</a>
				</center>
			</div>
		</div>
		<div class="col-md-4" style=" ">
			<div style="margin:15px; background-color:#b5cdf2;">
				<center>
					<a href="<?= base_url()?>index.php/survei/survei_konsultasi" >
						<img src="<?php echo base_url() ?>assets/template/images/survei-kepuasan-konsultasi2.jpg" style="margin-top:10px;height:130px">
						<br/>
						<br/>
						<h5>Survei Kepuasan Konsultasi</h5>
					</a>
				</center>
			</div>
		</div>
	</div>
		<div class="row" id="container"style="padding:30px">
		  <div class="col-md-12" style=" ">
				    <h1>
				        Hasil <i class="fa fa-home"></i> Survei Kepuasan Konsultasi<br>
				    </h1>
				    <div class="row" style="clear:both"></div>
						<div class="row">
						<div class="col-md-3">
							<center>Apakah Anda Puas Terhadap Layanan Kami </center>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<center><i class="fa fa-star fa-3x" id="puas1"></i><i class="fa fa-star fa-3x" id="puas2"></i><i class="fa fa-star fa-3x" id="puas3"></i><i class="fa fa-star fa-3x" id="puas4"></i><i class="fa fa-star fa-3x" id="puas5"></i></center>
						</div>
						<div class="col-md-3">
							<center>Jumlah Penanganan Konsultasi Berdasarkan Konsultan</center>
							<canvas id="myChart" width="100%" height="100%"></canvas>
							<script>
							var ctx = document.getElementById('myChart');
							var myPieChart = new Chart(ctx, {
								type: 'pie',
								data: {
									// These labels appear in the legend and in the tooltips when hovering different arcs
									labels: ['Geni','Azizah','Iref', 'Sinta', 'Bagas'],
									datasets: [{
											label: '# of Votes',
											data: [10, 20, 30, 20,5],
											backgroundColor: [
												 'rgba(255, 99, 132, 0.2)',
												 'rgba(54, 162, 235, 0.2)',
												 'rgba(255, 206, 86, 0.2)',
												 'rgba(200, 245, 100, 0.2)',
												 'rgba(100, 26, 86, 0.2)'
										 ],
										 borderColor: [
												'rgba(255, 99, 132, 1)',
												'rgba(54, 162, 235, 1)',
												'rgba(255, 206, 86, 1)',
												'rgba(54, 162, 235, 0.2)',
												'rgba(255, 99, 132, 0.2)',
										],
										borderWidth: 1
									}],
								},
							});
							</script>
						</div>
						<div class="col-md-3">
							<center>Jumlah Penanganan Konsultasi Berdasarkan Unit Kerja</center>
							<canvas id="myChart2" width="100%" height="100%"></canvas>
							<script>
								var ctx = document.getElementById('myChart2');
								var myPieChart2 = new Chart(ctx, {
							    type: 'pie',
									data: {
										// These labels appear in the legend and in the tooltips when hovering different arcs
										labels: ['RB KUNWAS','Yanlik','SDMA', 'Balaks'],
								 		datasets: [{
												label: '# of Votes',
								        data: [10, 20, 30,10],
												backgroundColor: [
													 'rgba(255, 99, 132, 0.2)',
													 'rgba(54, 162, 235, 0.2)',
													 'rgba(200, 245, 100, 0.2)',
													 'rgba(255, 206, 86, 0.2)'
											 ],
											 borderColor: [
												 'rgba(255, 99, 132, 1)',
  												'rgba(54, 162, 235, 1)',
  												'rgba(255, 206, 86, 1)',
  												'rgba(54, 162, 235, 0.2)',
					            ],
					            borderWidth: 1
								    }],


													},
								});

							</script>
						</div>
						<div class="col-md-3">
							<center>Jumlah Penanganan Konsultasi Berdasarkan Kategori Konsultasi</center>
							<canvas id="myChart3" width="100%" height="100%"></canvas>
							<script>
								var ctx = document.getElementById('myChart3');
								var myPieChart3 = new Chart(ctx, {
							    type: 'pie',
									data: {
										// These labels appear in the legend and in the tooltips when hovering different arcs
										labels: ['SAKIP','Manajemen Resiko','Reformasi Birokrasi', 'Zona Integritas'],
								 		datasets: [{
												label: '# of Votes',
								        data: [5, 4, 3, 2],
												backgroundColor: [
													 'rgba(54, 162, 235, 0.2)',
													 'rgba(255, 206, 86, 0.2)',
													 'rgba(200, 245, 100, 0.2)',
													 'rgba(255, 99, 132, 0.2)'
											 ],
											 borderColor: [
												 'rgba(255, 99, 132, 1)',
													'rgba(54, 162, 235, 1)',
													'rgba(255, 206, 86, 1)',
													'rgba(54, 162, 235, 0.2)'
											],
					            borderWidth: 1
								    }],


													},
								});
							</script>
						</div>
					</div>
					<hr>
					<hr>
					<div class="row">
						<div class="col-md-1">

						</div>
						<div class="col-md-2">
								<center style="font-size:12px">Menurut anda, apakah tersedia tempat dan waktu konsultasi yang memadai? *</center><br>
						</div>
						<div class="col-md-2">
								<center style="font-size:12px">Menurut anda, apakah unit kerja memperoleh pelayanan konsultasi dengan mudah?</center><br>
						</div>
						<div class="col-md-2">
								<center style="font-size:12px">Menurut anda, apakah auditor mampu memberikan informasi dan saran yang dibutuhkan oleh unit kerja?</center>
						</div>
						<div class="col-md-2">
								<center style="font-size:12px">Menurut anda, apakah auditor mampu bersikap sopan dan ramah dalam memberikan pelayanan konsultasi?</center>
						</div>
						<div class="col-md-2">
								<center style="font-size:12px">Menurut anda, apakah unit kerja merasa terbantu atas informasi dan saran yang diberikan oleh auditor? *</center>
						</div>
					</div>


					<div class="row">
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<canvas id="myChart4" height="400"></canvas>
							<script>
							var ctx = document.getElementById('myChart4');
							var myChart4 = new Chart(ctx, {
								type: 'bar',
								data: {
										labels: ['Ya', 'Tidak'],
										datasets: [{
												label: '# of Votes',
												data: [<?= $count_akomodasi["Ya"] ?>, <?= $count_akomodasi["Tidak"] ?>],
												backgroundColor: [
														'rgba(255, 99, 132, 0.2)',
														'rgba(54, 162, 235, 0.2)',
												],
												borderColor: [
														'rgba(255, 99, 132, 1)',
														'rgba(54, 162, 235, 1)',
												],
												borderWidth: 1
										}]
								},
								options: {
										scales: {
												yAxes: [{
														ticks: {
																beginAtZero: true
														}
												}]
										}
								}
							});
							</script>
						</div>

						<div class="col-md-2">
							<canvas id="myChart5" height="400"></canvas>
							<script>
							var ctx = document.getElementById('myChart5');
							var myChart5 = new Chart(ctx, {
								type: 'bar',
								data: {
										labels: ['Ya', 'Tidak'],
										datasets: [{
												label: '# of Votes',
												data: [<?= $count_mudah["Ya"] ?>, <?= $count_mudah["Tidak"] ?>],
												backgroundColor: [
														'rgba(255, 99, 132, 0.2)',
														'rgba(54, 162, 235, 0.2)',
												],
												borderColor: [
														'rgba(255, 99, 132, 1)',
														'rgba(54, 162, 235, 1)',
												],
												borderWidth: 1
										}]
								},
								options: {
										scales: {
												yAxes: [{
														ticks: {
																beginAtZero: true
														}
												}]
										}
								}
							});
							</script>
						</div>
						<div class="col-md-2">
							<canvas id="myChart6" height="400"></canvas>
							<script>
							var ctx = document.getElementById('myChart6');
							var myChart6 = new Chart(ctx, {
								type: 'bar',
								data: {
										labels: ['Ya', 'Tidak'],
										datasets: [{
												label: '# of Votes',
												data: [<?= $count_informasi["Ya"] ?>, <?= $count_informasi["Tidak"] ?>],
												backgroundColor: [
														'rgba(255, 99, 132, 0.2)',
														'rgba(54, 162, 235, 0.2)',
												],
												borderColor: [
														'rgba(255, 99, 132, 1)',
														'rgba(54, 162, 235, 1)',
												],
												borderWidth: 1
										}]
								},
								options: {
										scales: {
												yAxes: [{
														ticks: {
																beginAtZero: true
														}
												}]
										}
								}
							});
							</script>
						</div>
						<div class="col-md-2">
							<canvas id="myChart7" height="400"></canvas>
							<script>
							var ctx = document.getElementById('myChart7');
							var myChart7 = new Chart(ctx, {
								type: 'bar',
								data: {
										labels: ['Ya', 'Tidak'],
										datasets: [{
												label: '# of Votes',
												data: [<?= $count_sopan["Ya"] ?>, <?= $count_sopan["Tidak"] ?>],
												backgroundColor: [
														'rgba(255, 99, 132, 0.2)',
														'rgba(54, 162, 235, 0.2)',
												],
												borderColor: [
														'rgba(255, 99, 132, 1)',
														'rgba(54, 162, 235, 1)',
												],
												borderWidth: 1
										}]
								},
								options: {
										scales: {
												yAxes: [{
														ticks: {
																beginAtZero: true
														}
												}]
										}
								}
							});
							</script>
						</div>
						<div class="col-md-2">
							<canvas id="myChart8" height="400"></canvas>
							<script>
							var ctx = document.getElementById('myChart8');
							var myChart8 = new Chart(ctx, {
								type: 'bar',
								data: {
										labels: ['Ya', 'Tidak'],
										datasets: [{
												label: '# of Votes',
												data: [<?= $count_terbantu["Ya"] ?>, <?= $count_terbantu["Tidak"] ?>],
												backgroundColor: [
														'rgba(255, 99, 132, 0.2)',
														'rgba(54, 162, 235, 0.2)',
												],
												borderColor: [
														'rgba(255, 99, 132, 1)',
														'rgba(54, 162, 235, 1)',
												],
												borderWidth: 1
										}]
								},
								options: {
										scales: {
												yAxes: [{
														ticks: {
																beginAtZero: true
														}
												}]
										}
								}
							});
							</script>
						</div>
					</div>
			</div>
		</div>
</div>
<?php
echo $count_bintang;
function custom_footer(){
?>
	<script>
		$( document ).ready(function(){
			function bintang1(){
				$("#puas1").css({"color":"yellow"});
				$("#puas2").css({"color":"grey"});
				$("#puas3").css({"color":"grey"});
				$("#puas4").css({"color":"grey"});
				$("#puas5").css({"color":"grey"});
			}

			function bintang2(){
				$("#puas1").css({"color":"yellow"});
				$("#puas2").css({"color":"yellow"});
				$("#puas3").css({"color":"grey"});
				$("#puas4").css({"color":"grey"});
				$("#puas5").css({"color":"grey"});
			}

			function bintang3(){
				$("#puas1").css({"color":"yellow"});
				$("#puas2").css({"color":"yellow"});
				$("#puas3").css({"color":"yellow"});
				$("#puas4").css({"color":"grey"});
				$("#puas5").css({"color":"grey"});
			}

			function bintang4(){
				$("#puas1").css({"color":"yellow"});
				$("#puas2").css({"color":"yellow"});
				$("#puas3").css({"color":"yellow"});
				$("#puas4").css({"color":"yellow"});
				$("#puas5").css({"color":"grey"});
			}

			function bintang5(){
				$("#puas1").css({"color":"yellow"});
				$("#puas2").css({"color":"yellow"});
				$("#puas3").css({"color":"yellow"});
				$("#puas4").css({"color":"yellow"});
				$("#puas5").css({"color":"yellow"});
			}

			var jumlah_bintang = <?php echo $GLOBALS['count_bintang']  ?>;
			if(jumlah_bintang == 1){
				bintang1();
			}else if (jumlah_bintang == 2) {
				bintang2();
			}else if (jumlah_bintang == 3) {
				bintang3();
			}else if (jumlah_bintang == 4) {
				bintang4();
			}else if (jumlah_bintang == 5) {
				bintang5();
			}
		});


	</script>
<?php
}
 ?>
