<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Member</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-list"></i>Data Member</div>
    <div class="card-body">
      <!-- <div class="row"> -->
        <div class="col-lg-6 offset-lg-3">

		<?php    
			$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		?>

		<?php echo form_open( 'member/do_insert', array('class' => 'needs-validation', 'novalidate' => '') ); ?> 
		<h4 align="center">Tambah Data member</h4><br>
		<?php echo validation_errors(); ?><br>
		<div class="form-group">
			<label for="">Nama member</label>
			<!-- <input type="text" class="form-control" name="nama" placeholder="Meja v5" value="<?php //echo set_value('nama') ?>" required> -->
			<input type="text" class="form-control" name="nama" placeholder="" required>
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>

		<div class="form-group">
			<label for="">Alamat</label>
			<!-- <input type="text" class="form-control" name="nama" placeholder="Meja v5" value="<?php //echo set_value('nama') ?>" required> -->
			<!-- <input type="text" class="form-control" name="jml" placeholder="500" required> -->
			<textarea name="alamat" class="form-control" placeholder="" required>
				
			</textarea>
			<!-- <div class="invalid-feedback">Mohon isikan Nama Barang</div> -->
		</div>

		<div class="form-group">
			<label for="">No Telpon</label>
			<!-- <input type="text" class="form-control" name="nama" placeholder="Meja v5" value="<?php //echo set_value('nama') ?>" required> -->
			<input type="text" class="form-control" name="telp" placeholder="" required>
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