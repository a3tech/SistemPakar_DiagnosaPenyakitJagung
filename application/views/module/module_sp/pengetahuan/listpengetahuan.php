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
                  <?php echo $this->session->flashdata('konfirmasi_hapus');?>
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Tabel Data Pengetahuan</div>
                  <div class="card-body">
                    <nav>
                      <form method="post">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="<?php echo base_url('index.php/data_pengetahuan/index?tambah'); ?>">Tambah</a>
                        </li>&nbsp;&nbsp;
                    <li class="page-item">
          <input class="form-control" type="text" placeholder="Masukan id atau nama" name="kunci">
                        </li>
                      </ul>
                      </form>
                <form method="post" action="<?php echo base_url('index.php/data_pengetahuan/delete'); ?>">
                         <ul class="pagination">
                          <li class="page-item">
                            <button class="btn btn-danger" type="submit" name="btnHapus" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Pengetahuan ?')">Hapus</button>
                        </li>
                    <li class="page-item">            
          <input class="form-control" type="text" placeholder="Masukan ID Penyakit" name="id_penyakit">
                        </li>
                      </ul>

</form>
                    </nav>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>ID PENYAKIT</th>
                          <th>NAMA PENYAKIT</th>
                          <th>KELOLA</th>
                        </tr>
                      </thead>
   <?php
    foreach ($data['data']->result()  as $row){
    ?>
                      <tbody>
                          <tr>
                          <td><?php echo $row->id_penyakit; ?></td>
                          <td><?php echo $row->nama_penyakit; ?></td>
                          <td>
                            <span class="badge badge-warning"><a href="<?php echo base_url('index.php/data_pengetahuan/detail?id_penyakit='.$row->id_penyakit); ?>">Detail</a></span>
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