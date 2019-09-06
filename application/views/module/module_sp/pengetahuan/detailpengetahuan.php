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
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Tabel Detail Data Pengetahuan</div>
                  <div class="card-body">
                    <nav>
                    </nav>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr>
                          <th>ID GEJALA</th>
                          <th>NAMA GEJALA</th>
                        </tr>
                      </thead>
   <?php
  foreach ($this->rows as $row){
    ?>
                      <tbody>
                          <tr>
                          <td><?php echo $row->id_gejala; ?></td>
                          <td><?php echo $row->nama_gejala; ?></td>
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