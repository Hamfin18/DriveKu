<div class="container">
<?php echo $error;?>

<?php echo form_open_multipart('control_upload/do_upload');?>
	<span><h3>Pilih File</h3></span>
	<div class="row ">
		<div class="col-md-6">
			<input type="file" name="userfile" />
		</div>
	</div>
	<div class="mt-2">
		<input type="submit" value="upload" />
	</div>
</form>
</div>