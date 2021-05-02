
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar DriveKu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100 bg-primary">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
					
				<form class="login100-form validate-form flex-sb flex-w row" method="POST" action="<?=base_url('control_daftar/tambah');?>">
					<div class="col-md-12">
						<span class="login100-form-title p-b-32">
							form pendaftaran
						</span>
					</div>	
					<?php if(validation_errors() ) : ?>
						<div class="alert alert-danger col-md-12" role="alert">
						  <?=validation_errors();  ?>
						</div>
					<?php endif; ?>
					
				
					<div class="col-md-12">
						<span class="txt1 p-b-11">
							Nama lengkap
						</span>
					</div>			
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="namaUser">
						<span class="focus-input100"></span>
					</div>
					
					
					<span class="txt1 p-b-11 col-md-12">
						jenis kelamin
						</span>
					
					<!-- Group of default radios - option 1 -->
					<div class="container col-md-12">
					<div class="row container ">
						<div class="form-check col-md-6">
						  <input type="radio" class="form-check-input" id="jkUser" name="jkUser" value="laki">
						  <label class="form-check-label">Laki-laki</label>
						</div>

						<!-- Group of material radios - option 2 -->
						<div class="form-check col-md-6">
						  <input type="radio" class="form-check-input" id="jkUser" name="jkUser" value="perempuan" checked>
						  <label class="form-check-label">Perempuan</label>
						</div>

						
						
					</div>
					</div>

					<span class="txt1 p-b-11 mt-3 col-md-12">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11 col-md-12">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11 col-md-12">
						password
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="password" name="password1" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11 col-md-12">
						ketik ulang password
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<input class="input100" type="password" name="password2" >
						<span class="focus-input100"></span>
					</div>


					
					

					<div class="row mx-auto">
						<div class="container-login100-form-btn col-md-6 ">
							<button class="login100-form-btn" type="submit" value="daftar">
								Daftar
								
							</button>
						</div>
						
					</div>	
				</form>
			</div>
		</div>
	</div>
	

	<div ></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>