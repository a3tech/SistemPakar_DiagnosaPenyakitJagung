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
                    <i class="fa fa-align-justify"></i>Tabel Data Penyakit</div>
                  <div class="card-body">
                    <nav>
                      <form method="post">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="<?php echo base_url('index.php/data_penyakit/index?tambah=form_tambah'); ?>">Tambah</a>
                        </li>&nbsp;&nbsp;
                    <li class="page-item">
          <input class="form-control" type="text" placeholder="Masukan id atau nama" name="kunci">
                        </li>
                      </ul>
                    </nav>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>ID PENYAKIT</th>
                          <th>NAMA PENYAKIT</th>
                          <th>Nilai Faktor Kepastian</th>
                          <th>KELOLA</th>
                        </tr>
                      </thead>
   <?php
  foreach ($rows as $row){
    ?>
                      <tbody>
                          <tr>
                          <td><?php echo $row->id_penyakit; ?></td>
                          <td><?php echo $row->nama_penyakit; ?></td>
                          <td><?php echo $row->faktor_kepastian; ?></td>
                          <td>
                            <span class="badge badge-warning"><a href="<?php echo base_url('index.php/data_penyakit/detail?id_penyakit='.$row->id_penyakit); ?>">Detail</a></span>
                            <span class="badge badge-warning"><a href="<?php echo base_url('index.php/data_penyakit/update?id_penyakit='.$row->id_penyakit); ?>">Ubah</a></span>
                            <span class="badge badge-danger"><a href="<?php echo base_url('index.php/data_penyakit/delete?id_penyakit='.$row->id_penyakit); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')">Hapus</a></span>
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