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
                    <i class="fa fa-align-justify"></i>Tabel Hasil Diagnosis</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr align="center" >
                          <th colspan="4">Hasil Diagnosa Penyakit Berdasarkan Jawaban yang diberikan</th>
                        </tr>
                      </thead>
  
                      <tbody>
                      <tr>
                   
                      <th>Nama</th>
                      <td align="center" colspan="3"><?php echo $nama_pengguna; ?></td>
                      </tr>
                      <tr>
                      <th>Email</th>
                      <td align="center" colspan="3"><?php echo $email; ?></td>
                      </tr>
                      <tr align="center">
                      <th colspan="4">Data Penyakit Tanaman Jagung </th>
                      </tr>
                      <tr>
                      <th>Nama Penyakit</th> 
                      <td align="center" colspan="3"><?php echo $nama_penyakit; ?></td>
                      </tr>
                      <tr>
                      <th>Faktor Kepastian</th> 
                      <td align="center" colspan="3"><?php echo number_format($this->nilai_cf,1); ?>%</td>
                      </tr>
                      <tr>
                      <th>Siklus Penyakit</th>
                      <td align="justify" colspan="3"><?php echo nl2br(htmlspecialchars($definisi)); ?></td>
                      </tr>
                      <tr>
                      <th>Pengendalian</th>
                      <td align="justify" colspan="3"><?php echo nl2br(htmlspecialchars($solusi)); ?></td>
                      </tr>
                      <tr>
                      <th>Foto Penyakit</th>
                      <td align="center"><img class="navbar-brand-full" src="<?php echo base_url('uploads/'.$foto2) ?>" width="150" height="150"></td>
                      <td align="center"><img class="navbar-brand-full" src="<?php echo base_url('uploads/'.$foto3) ?>" width="150" height="150" ></td>
                      <td align="center"><img class="navbar-brand-full" src="<?php echo base_url('uploads/'.$foto3) ?>" width="150" height="150" ></td>
                      </tr>
                      </tbody>
   
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