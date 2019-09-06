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
                    <i class="fa fa-edit"></i>FORM UBAH DATA PENGGUNA</div>
                  <div class="card-body">
                    <form action="<?php echo base_url('index.php/sp_controller/data_pengguna/update'); ?>" method="post" class="form-horizontal">
                        <div class="form-group">
                          <input type="hidden" name="id_pengguna" value="<?php echo $model->id; ?>">
                        <label class="col-form-label" for="appendedInput">NAMA PENGGUNA</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text" name="nama_pengguna" value="<?php echo $model->nama_pengguna; ?>" required >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">EMAIL</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="email" name="email" value="<?php echo $model->email; ?>" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">USERNAME</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text" name="username" value="<?php echo $model->username; ?>" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">PASSWORD</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="password" name="password" value="<?php echo $model->password; ?>" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
          
                      <div class="form-actions">
                        <button class="btn btn-primary" name="btnSubmit" type="submit">Simpan</button>
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