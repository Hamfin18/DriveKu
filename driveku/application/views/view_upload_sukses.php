
<div class="container">
	<h3>Your file was successfully uploaded!</h3>

	<ul>
	<?php foreach ($upload_data as $item => $value):?>
	<li><?php echo $item;?>: <?php echo $value;?></li>
	<?php endforeach; ?>
	</ul>

	<a href="<?= base_url('control_home');?>"><button type="button" class="btn btn-primary" >kembali</button></a>
</div>
