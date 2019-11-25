<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/styles.css') ?>">
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
	   <form action="<?= base_url()?>index.php/login" method="post">
       <input type="text" name="username">
       <input type="password" name="password">
       <input type="submit">
     </form>

		<hr />
		Demo (Username/Password)
		<hr />
		yunanhelmi/yunanhelmi
		<br />fadlitn/fadlitn
		<br />inwepo/inwepo

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
