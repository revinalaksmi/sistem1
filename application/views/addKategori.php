<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Kategori</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-list"></i>Data Kategori</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">
		<h4 align="center">Tambah Data Kategori</h4><br>
		<?php echo form_open( 'kategori/do_insert', array('class' => 'needs-validation', 'novalidate' => '') ); ?> 
		<?php echo validation_errors(); ?><br>
		<div class="form-group">
			<label for="">Nama </label>
			<input type="text" class="form-control" name="namakat" placeholder="" required>
		<hr>
		<button id="submitBtn" type="submit" class="btn btn-primary">Simpan</button>
		<a href="<?php echo base_url('Kategori/') ?>" class="btn btn-secondary">Cancel</a><hr>
		<br>



        </div>
      <!-- </div> -->
    </div>
  </div>
</div>
</div>