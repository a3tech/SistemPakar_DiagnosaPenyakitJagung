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
                    <i class="fa fa-edit"></i>FORM UBAH DATA PENGETAHUAN</div>
                  <div class="card-body">
                    <form action="<?php echo base_url('index.php/data_pengetahuan/update'); ?>" method="post" class="form-horizontal">
                        <div class="form-group">      
                        <label class="col-form-label" for="appendedInput">ID PENYAKIT</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" name="id_penyakit" type="text"value="<?php echo $model->id; ?>" required disabled>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                   
                         <div class="form-group">
                          <div class="controls">
                          <div class="input-group">
                          <select class="form-control" id="appendedInput" name="id_gejala">
                          <?php foreach ($rows1 as $row){ ?>
                          <option value='<?php echo $row->id_gejala; ?>'><?php echo $row->id_gejala; ?></option>
                          <?php } ?>
                           </select>
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