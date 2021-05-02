<div class="container mt-3">
	<?php if($this->session->flashdata('flash')): ?>
	<div class="row mt-3">
		 <div class="col-md-12">
		 		<div class="alert alert-warning alert-dismissible fade show" role="alert">
				  <span>Data berhasil <?= $this->session->flashdata('flash');  ?> </span>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
		 </div>
	</div>
	<?php endif; ?>
	
	
		<div class="row">
			<div class="col-md-6">
			<a href="<?=base_url('control_upload');  ?>"><button type="button" class="btn btn-primary" >Upload File</button></a>	
			</div>
		</div>
		
			
			<form action="<?=base_url('control_home');  ?>" method="post" class="mt-2" >
			<div class="input-group mb-3">
		  		<input type="text" class="form-control" placeholder="Cari File" aria-describedby="button-addon2" name="key">
		  		<div class="input-group-append">
		    	<button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
		    	</div>
			</div>			
			</form>
			
				
		<div class="row mt-2">
			<div class="col-md-12">
				<ul class="list-group">
					<?php foreach ($file_user as $file) :?>
				  <li class="list-group-item"><?= $file['file']  ?>
				  	<a href="<?=base_url('control_home/deleteData/')?><?=$file['file'];  ?>" class="badge badge-danger float-right" onclick="return confirm('yakin ingin menghapus?');">Delete</a>

				  	<a href="<?=base_url('control_home/downloadFile/')?><?=$file['file'];  ?>" class="badge badge-primary float-right">Download</a>

				  </li>

				<?php endforeach; ?>
				</ul>
			</div>
		</div>
</div>
	



