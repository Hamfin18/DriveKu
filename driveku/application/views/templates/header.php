<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style.css">

    <title><?= $judul ?></title>
  </head>
  <body>
  	
	  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  		<div class="container">
				  <a class="navbar-brand" href="<?=base_url('control_home');  ?>" >Selamat Datang <?=$this->session->userdata('namaUser')  ?></a>
				  <a class="navbar-brand float-right" href="<?=base_url('control_home/endSession');  ?>" onclick="return confirm('yakin ingin keluar?');">Logout</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>


				    	
				    </div>

				  </div>
			</div>
		</nav>
	
    

    