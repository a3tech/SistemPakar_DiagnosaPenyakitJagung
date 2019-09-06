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
                    <i class="fa fa-align-justify"></i>Tabel Detail Data Hasil Diagnosis</div>
                  <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <tbody>
                        <tr>
                        <th align="center">ID KONSULTASI</th>
                        <td colspan="3" align="center"><?php echo $this->row->id_konsultasi; ?></td>
                        </tr>
                        <tr>
                        <th align="center">NAMA PENYAKIT</th>
                        <td colspan="3" align="center"><?php echo $this->row->nama_penyakit; ?></td>
                        </tr>
                        <tr>
                        <th align="center">DEFINISI PENYAKIT</th>
                        <td colspan="3" align="justify"><?php echo nl2br(htmlspecialchars($this->row->definisi)); ?></td>
                        </tr>
                        <tr>
                        <th align="center">SOLUSI PENYAKIT</th>
                        <td colspan="3" align="justify"><?php echo nl2br(htmlspecialchars($this->row->solusi)); ?></td>
                        </tr>
                        <tr>
                        <th>FOTO PENYAKIT</th>
                        <td align="center"><img class="navbar-brand-full" src="<?php echo base_url('uploads/'.$this->row->foto1) ?>" width="150" height="150"></td>
                        <td align="center"><img class="navbar-brand-full" src="<?php echo base_url('uploads/'.$this->row->foto2) ?>" width="150" height="150" ></td>
                        <td align="center"><img class="navbar-brand-full" src="<?php echo base_url('uploads/'.$this->row->foto3) ?>" width="150" height="150" ></td>
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