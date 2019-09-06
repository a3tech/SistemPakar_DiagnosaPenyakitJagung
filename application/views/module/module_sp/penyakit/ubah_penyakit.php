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
                    <i class="fa fa-edit"></i>FORM UBAH DATA PENYAKIT</div>
                  <div class="card-body">
                    <form action="<?php echo base_url('index.php/data_penyakit/update'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="hidden" name="id_penyakit" value="<?php echo $model->id; ?>">
                        <label class="col-form-label" for="appendedInput">NAMA PENYAKIT</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text" name="nama_penyakit" value="<?php echo $model->nama_penyakit; ?>" required >
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NILAI FAKTOR KEPASTIAN</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text" name="cf" value="<?php echo $model->cf; ?>" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">DEFINISI</label>
                        <div class="controls">
                          <div class="input-group">
                           <textarea class="form-control" id="appendedInput" size="16" type="text" name="definisi" required><?php echo $model->definisi; ?></textarea>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">SOLUSI</label>
                        <div class="controls">
                          <div class="input-group">
                             <textarea class="form-control" id="appendedInput" size="16" type="text" name="solusi" required><?php echo $model->solusi; ?></textarea>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-form-label" for="appendedInput">FOTO PENYAKIT</label>
                        <div class="controls">
                          <div class="input-group">
                              <input class="form-control" size="16" type="file" id="gambar" name="gambar[]" multiple class="form-control" placeholder="Foto Alternatif">
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