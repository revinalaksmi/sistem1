

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
    <div class="card-header"><i class="fa fa-sitemap"></i> Data member</div>
    <div class="card-body">
      <div class="row">
        <a href="<?php echo site_url('member/addmember/') ?>" class="btn btn-primary">Tambah member</a> 
        <div class="col-md-12"><br></div>
        <table id="table_id" class="table table-hover table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr> 
          <th>ID</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Action
          </p></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($result as $d){ ?>
         <tr>
         	<td><?php echo $d['id_member']; ?></td>
         	<td><?php echo $d['nama']; ?></td>
         	<td><?php echo $d['alamat']; ?></td>
         	<td><?php echo $d['telp']; ?></td>
         	<td><a  class="btn btn-sm btn-outline-warning" href="<?php echo base_url()."member/edit/".$d['id_member']; ?>">Edit</a>
         		<a class="btn btn-sm btn-outline-danger" href="<?php echo base_url()."member/do_delete/".$d['id_member']; ?>" >Hapus</a>
         	</td>
         </tr>
      </tbody> <?php } ?>
      <tfoot>
        <tr>
          <th>Kode</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No Telp</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </tfoot>
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