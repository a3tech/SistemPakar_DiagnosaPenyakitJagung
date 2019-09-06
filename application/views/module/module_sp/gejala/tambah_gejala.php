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
                    <i class="fa fa-edit"></i>FORM TAMBAH DATA GEJALA</div>
                  <div class="card-body">
                    <form class="form-horizontal" action="create" method="post">
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NAMA GEJALA</label>
                        <div class="controls">
                          <div class="input-group">
                          <input type="text" class="form-control" id="appendedInput" name="nama_gejala" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                        <label class="col-form-label" for="appendedInput">TINGKAT KEPERCAYAAN</label>
                        <div class="controls">
                          <div class="input-group">
                          <input type="text" class="form-control" id="appendedInput" name="cf" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="btnSubmit">Simpan</button>
                        <button class="btn btn-secondary" type="button" onclick=self.history.back()>Batal</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
</body>
</html>