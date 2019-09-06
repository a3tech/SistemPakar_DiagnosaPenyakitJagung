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
                  <?php echo $this->session->flashdata('hapus');?>
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Tabel Data Hasil Diagnosis</div>
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
                          <th>ID KONSULTASI</th>
                          <th>NAMA PENYAKIT</th>
                          <th>FAKTOR KEPASTIAN</th>
                          <th>TANGGAL DIAGNOSIS</th>
                          <th>KELOLA</th>
                        </tr>
                      </thead>
   <?php
 foreach ($data['data']->result()  as $row){
    ?>
                      <tbody>
                          <tr>
                          <td><?php echo $row->id_konsultasi; ?></td>
                          <td><?php echo $row->nama_penyakit; ?></td>
                          <td><?php echo $row->tingkat_kepercayaan; ?>%</td>
                          <td><?php echo $row->tanggal; ?></td>
                          <td>
                            <span class="badge badge-warning"><a href="<?php echo base_url('index.php/data_diagnosis/detail?id_konsultasi='.$row->id_konsultasi); ?>">Detail</a></span>
                            <span class="badge badge-danger"><a href="<?php echo base_url('index.php/data_diagnosis/delete?id_konsultasi='.$row->id_konsultasi); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini ?')">Hapus</a></span>
                          </td>
                        </tr>
                      </tbody>
     <?php 
      } ?>
                    </table>
                        <?php 
                    if(isset($data['pagination'])){
                      echo $data['pagination']; 
                            }
                          ?>
                               <nav>
 <ul class="pagination">  
<li class="page-item">
<a class="page-link" href="<?php echo base_url('index.php/data_diagnosis/index?id_pengguna='.$this->username); ?>">Cetak Laporan</a>
</li></ul> </nav>
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