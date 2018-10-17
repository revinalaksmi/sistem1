<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data member</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-list"></i>Data member</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">

        <!-- <?php echo form_open(current_url()); ?> -->

		<h4 align="center">Edit Data member</h4><br>
		<?php echo form_open(current_url()); ?>
		<?php echo validation_errors(); ?><br>
		<!-- <hr><h5>A. DATA DIRI</h5><hr><br> -->
		<div class="form-group">
			<input type="hidden" class="form-control" name="id_member" value="<?php echo $id_member ?>" >
		</div>
		<div class="form-group">
			<label for="">Nama member</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" >
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>

		<div class="form-group">
			<label for="">Alamat</label>
			<input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" >
				
			</textarea>
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>

		<div class="form-group">
			<label for="">No Telpon</label>
			<input type="text" class="form-control" name="telp" value="<?php echo $telp ?>" >
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>
		<hr>
		<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
		<a href="<?php echo base_url('member/') ?>" class="btn btn-secondary">Cancel</a><hr>
		<br>



        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>