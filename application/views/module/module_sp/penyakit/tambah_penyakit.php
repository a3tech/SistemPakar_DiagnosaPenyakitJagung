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
                    <i class="fa fa-edit"></i>FORM TAMBAH DATA PENYAKIT</div>
                  <div class="card-body">
                    <form class="form-horizontal" action="create" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NAMA PENYAKIT</label>
                        <div class="controls">
                          <div class="input-group">
                          <input type="text" class="form-control" id="appendedInput" name="nama_penyakit" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NILAI FAKTOR KEPASTIAN</label>
                        <div class="controls">
                          <div class="input-group">
                           <input class="form-control" id="appendedInput" type="text" name="cf" placeholder="Masukan Angka"  required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">DEFINISI</label>
                        <div class="controls">
                          <div class="input-group">
                           <textarea class="form-control" id="appendedInput" size="16" type="text" name="definisi" required></textarea>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="col-form-label" for="appendedInput">SOLUSI</label>
                        <div class="controls">
                          <div class="input-group">
                            <textarea class="form-control" id="appendedInput" size="16" type="text" name="solusi" required></textarea>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="col-form-label" for="appendedInput">FOTO ALTERNATIF</label>
                        <div class="controls">
                          <div class="input-group">
                              <input class="form-control" size="16" type="file" id="gambar" name="gambar[]" multiple class="form-control" placeholder="Foto Penyakit">
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

          <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
</body>
</html>