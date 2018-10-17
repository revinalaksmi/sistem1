<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Pembeli</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-list"></i>Data Barang</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">
		<h4 align="center">Edit Data Barang</h4><br>
		<?php echo form_open(current_url()); ?>
				<?php echo validation_errors(); ?><br>
		<div class="form-group">
			<input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" >
		</div>
		<div class="form-group">
			<label for="">Nama Barang</label>
			<input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" >
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>
		<div class="form-group">
			<label for="">Nama Kategori</label>
			<input type="text" class="form-control" name="id_kategori" value="<?php echo $id_kategori ?>" >
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>
		<div class="form-group">
			<label for="">Stok</label>
			<input type="text" class="form-control" name="stok" value="<?php echo $stok ?>" >
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>
		

		<div class="form-group">
			<label for="">Harga</label>
			<input type="text" class="form-control" name="harga" value="<?php echo $harga ?>" >
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>

		
		
		<hr>
		<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
		<a href="<?php echo base_url('Pembeli/') ?>" class="btn btn-secondary">Cancel</a><hr>
		<br>



        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>