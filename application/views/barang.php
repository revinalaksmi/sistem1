

<div class="content-wrapper"> <!-- "keseluruhan konten" -->
  <div class="container-fluid"> <!-- isi content -->
<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Data Barang</li>
  </ol>

  <!-- Menampilkan data kategori-->
  <div class="card mb-3">
    <div class="card-header"><i class="fa fa-sitemap"></i> Data Barang</div>
    <div class="card-body">
      <div class="row">
        <a href="<?php echo site_url('Barang/addBarang/') ?>" class="btn btn-primary">Tambah Barang</a> 
        <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr> 
          <th>ID</th>
          <th>Kategori</th>
          <th>Nama</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Action
          </p></th>
        </tr>
      </thead> 
      <tbody>  <?php foreach($result as $d){ ?>
         <tr>
         	<td><?php echo $d['id']; ?></td>
          <td><?php echo $d['namakat']; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['stok']; ?></td>
          <td><?php echo $d['harga']; ?></td>
          <td><a  class="btn btn-sm btn-outline-warning" href="<?php echo base_url()."barang/edit/".$d['id']; ?>">Edit</a>
            <a class="btn btn-sm btn-outline-danger" href="<?php echo base_url()."barang/do_delete/".$d['id']; ?>" >Hapus</a>
          </td>
         </tr>
      </tbody> <?php } ?>
    </table>
    </div>
    </div>
  </div>
</div>
</div>


<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>