<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-12">
                  <?php echo $this->session->flashdata('tambah');?>
                   <?php echo $this->session->flashdata('ubah');?>
                  <?php echo $this->session->flashdata('hapus');?>
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Tabel Data Pegguna</div>
                  <div class="card-body">
                    <nav>
                      <form method="post">
                      <ul class="pagination">
                    <li class="page-item">
          <input class="form-control" type="text" placeholder="Masukan id atau nama" name="kunci">
                        </li>
                      </ul>
                    </nav>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>ID PENGGUNA</th>
                          <th>NAMA PENGGUNA</th>
                          <th>EMAIL</th>
                          <th>USERNAME</th>
                          <th>PASSWORD</th>
                          <th>KELOLA</th>
                        </tr>
                      </thead>
   <?php
  foreach ($rows as $row){
    ?>
                      <tbody>
                          <tr>
                          <td><?php echo $row->id_pengguna; ?></td>
                          <td><?php echo $row->nama_pengguna; ?></td>
                          <td><?php echo $row->email; ?></td>
                          <td><?php echo $row->username; ?></td>
                          <td><?php echo $row->password; ?></td>
                          <td>
                            <span class="badge badge-warning"><a href="<?php echo base_url('index.php/sp_controller/data_pengguna/update?id_pengguna='.$row->id_pengguna); ?>">Ubah</a></span>
                            <span class="badge badge-danger"><a href="<?php echo base_url('index.php/sp_controller/data_pengguna/delete?id_pengguna='.$row->id_pengguna); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')">Hapus</a></span>
                          </td>
                        </tr>
                      </tbody>
     <?php 
      } ?>
                    </table>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>
</body>
</html>