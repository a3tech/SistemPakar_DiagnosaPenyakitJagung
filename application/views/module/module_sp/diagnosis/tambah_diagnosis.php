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
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i>Diagnosis Penyakit Tanaman Jagung</div>
                  <div class="card-body">
                     <?php
                      if($kondisi==1){
                      ?>
                      <form method="post" action="create">
                    <input  name="id_gejala" value="<?php echo $row2; ?>" type="hidden"/>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr align="center">
                          <th>Jawab Pertanyaan Dibawah Ini Sesuai dengan Gejala yang dialami</th>
                        </tr>
                      </thead>
  
                      <tbody>
                      <tr align="center">
                   
                      <td>Apakah <?php echo $row1; ?> ?</td>
                      </tr>
                          <tr align="center">
                      <td>
                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="jawaban" value="Ya">Ya
                      </div>

                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="jawaban" value="Tidak">Tidak
                      </div>
                    </td>
                         </tr>
                        <tr align="center">
                        <td>
                       <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NILAI KEPASTIAN</label>
                        <div class="controls">
                          <div class="input-group">
                          <select class="form-control" id="appendedInput" name="cf">
                          <option value="">Pilih Salah Satu</option>
                          <option value=0.1>Pasti Tidak (10 %)</option>
                          <option value=0.2>Hampir Pasti Tidak (20 %)</option>
                          <option value=0.3>Kemungkinan Besar Tidak (30 %)</option>
                          <option value=0.4>Mungkin Tidak (40 %)</option>
                          <option value=0.5>Kemungkinan Kecil (50 %)</option>
                          <option value=0.6>Mungkin (60 %)</option>
                          <option value=0.7>Kemungkinan Besar (70 %)</option>
                          <option value=0.8>Hampir Pasti (80 %)</option>
                          <option value=1>Pasti (100 %)</option>
                           </select>
                            <div class="input-group-append">
                            </div>
                          </div>  
                        </div>
                      </div><!--
                          <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NILAI KEPASTIAN</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text" name="cf" placeholder="Masukan Angka" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>!-->
                        </td>
                        </tr>
                        
                        </tr>
                        <tr align="center">
                        <td>
                            <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="btnSubmit">Jawab</button>
                      </div>
                        </td>
                        </tr>

                      </tbody>
   
                    </table>
                    </form>

                    <?php }elseif($kondisi==2){ ?>
                    <form method="post" action="create">
                    <input  name="id_gejala" value="<?php echo $this->tmp_id; ?>" type="hidden"/>
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                      <thead>
                        <tr align="center">
                          <th>Jawab Pertanyaan Dibawah Ini Sesuai dengan Gejala yang dialami</th>
                        </tr>
                      </thead>
  
                      <tbody>
                      <tr align="center">
                   
                      <td>Apakah <?php echo $row1; ?> ?</td>
                      </tr>
                          <tr align="center">
                      <td>
                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="jawaban" value="Ya">Ya
                      </div>

                      <div class="form-check-inline">
                      <input type="radio" class="form-check-input" name="jawaban" value="Tidak">Tidak
                      </div>
                    </td>
                        </tr>
                                     <tr align="center">
                        <td>
                       <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NILAI KEPASTIAN</label>
                        <div class="controls">
                          <div class="input-group">
                          <select class="form-control" id="appendedInput" name="cf">
                          <option value="">Pilih Salah Satu</option>
                          <option value=0.1>Pasti Tidak (10 %)</option>
                          <option value=0.2>Hampir Pasti Tidak (20 %)</option>
                          <option value=0.3>Kemungkinan Besar Tidak (30 %)</option>
                          <option value=0.4>Mungkin Tidak (40 %)</option>
                          <option value=0.5>Kemungkinan Kecil (50 %)</option>
                          <option value=0.6>Mungkin (60 %)</option>
                          <option value=0.7>Kemungkinan Besar (70 %)</option>
                          <option value=0.8>Hampir Pasti (80 %)</option>
                          <option value=1>Pasti (100 %)</option>
                           </select>
                            <div class="input-group-append">
                            </div>
                          </div>  
                        </div>
                      </div><!--
                          <div class="form-group">
                        <label class="col-form-label" for="appendedInput">NILAI KEPASTIAN</label>
                        <div class="controls">
                          <div class="input-group">
                            <input class="form-control" id="appendedInput" size="16" type="text" name="cf" placeholder="Masukan Angka" required>
                            <div class="input-group-append">
                            </div>
                          </div>
                        </div>
                      </div>!-->
                        </td>
                        </tr>
                        
                        </tr>
                        <tr align="center">
                        <td>
                            <div class="form-actions">
                        <button class="btn btn-primary" type="submit" name="btnSubmit">Jawab</button>
                      </div>
                        </td>
                        </tr>
                      </tbody>
   
                    </table>
                    </form>
                    <?php } ?>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>

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