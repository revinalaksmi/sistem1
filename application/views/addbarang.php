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
        	<?php echo form_open( 'barang/do_insert', array('class' => 'needs-validation', 'novalidate' => '') ); ?> 
		<?php echo validation_errors(); ?><br>
		<h4 align="center">Tambah Data Barang</h4><br>
		<?php echo validation_errors(); ?><br>
		<div class="form-group">
			<label for="">Nama </label>
			<input type="text" class="form-control" name="nama" placeholder="" required>
			
		</div>
		<div class="form-group">
		<label for="">Kategori </label>
		<select name="id_kategori"  required>
                            <option value="">Pilih Kategori</option>
                            <?php foreach($result as $category){ ?>
                            <option value="<?php echo $category['id_kategori']; ?>"><?php echo $category['namakat']; ?></option>
                            <?php } ?>
                        </select>
			
			
		</div>
		<div class="form-group">
			<label for="">Stok </label>
			
			<input type="text" class="form-control" name="stok" placeholder="" required>
		</div>
		

		<div class="form-group">
			<label for="">Harga</label>
			<input type="text" class="form-control" name="harga" placeholder="" required>
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