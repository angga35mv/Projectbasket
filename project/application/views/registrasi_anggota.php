

<br><br><br>

<center>
<TABLE Border='1' cellpadding='3' cellspacing='3'>
<td width="650px" height="200px">
<form class="form-horizontal" action="<?= base_url()?>Registrasi_Anggota/input_data" method="post"  enctype="multipart/form-data">
  <fieldset>
    <legend>REGISTRASI ANGGOTA</legend>
    
    <div class="form-group" > 
      <center> 
        <TABLE>
          <tr >
            <td  width="550"><center> <h3><?=$this->session->flashdata('pesan')?></h3></center></td>
          </tr>
        </TABLE>
        </center>
      </div>
    <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Nama Lengkap</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="inputNama" placeholder="Nama Lengkap">
      </div>
    </div>
     <div class="form-group">
      <label for="inpuEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="inputEmail" id="email"  placeholder="Email">
      </div>
      <p id="warning_email"></p>
    </div>
    <div class="form-group">
      <label for="inputUser" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="inputUser" id="user" placeholder="Username">
      </div>
      <p id="warning_user_name"></p>
    </div>
     <div class="form-group">
      <label for="inputPass" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-8">
        <input type="password" class="form-control" name="inputPass" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputTmptLhr" class="col-lg-2 control-label">Tempat Lahir</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name = "inputTmptLhr" placeholder="Tempat Lahir">
      </div>
      <p id="warning_tmpt_lhr"></p>
    </div>
   <div class="form-group">
      <label for="inputTglLhr" class="col-lg-2 control-label">Tanggal Lahir</label>
      <div class="col-lg-8">
        <div class="input-group date form_date col-md-8" data-date="" data-date-format="dd MM yyyy" data-link-field="TglLhr" data-link-format="yyyy-mm-dd">
          <input class="form-control" size="16" type="text" value="" readonly>
          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        <input type="hidden" name = "inputTglLhr" id = "TglLhr" placeholder="Tanggal Lahir" />      
      </div>
      <p id="warning_tgl_lhr"></p>
    </div>
    <div class="form-group">
      <label for="inputTgg" class="col-lg-2 control-label">Tinggi badan</label>
      <div class="col-lg-8">
        <input type="text" maxlength="3"  id = "tgg" class="form-control" name = "inputTgg" placeholder="Tinggi badan" value="1" >
      </div>
    </div>
    <div class="form-group">
      <label for="alamat" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="3" name = "inputAlamat" id="alamat"  placeholder="Alamat Lengkap"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Jenis Kelamin</label>
      <div class="col-lg-8">
        <div class="Jenis Kelamin">
          <label>
            <input type="radio" name="inputJK" id="optionsRadios1" value="P" checked="">
            Pria
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="inputJK" id="optionsRadios2" value="W">
            Wanita
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Jurusan</label>
      <div class="col-lg-8">
        <select class="form-control"  name = "inputJrs" id="select">
          <option value="SI">SI (Sistem Informasi)</option>
          <option value="TI">TI (Teknik Informatika)</option>
        </select>
        <br>
    </div>
  </div>  
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Posisi yang diinginkan</label>
      <div class="col-lg-8">
        <select class="form-control"  name = "inputPos" id="select">
          <option value="PG">Point Guard</option>
          <option value="SG">Shooting Guard</option>
      <option value="SF">Small Forward</option>
          <option value="PF">Power Forward</option>
          <option value="C">Center</option>
          <option value="--">Saya Tidak Tahu</option>
        </select>
        <br>
    </div>
  </div>  
  <div class="form-group">
      <label class="col-lg-2 control-label">Foto</label>
      <div class="col-lg-8">
        <input type="file" class="form-control" name = "inputFoto" accept="image/*">
        <input type="hidden" class="form-control" name="inputTipe" value= "0">
      </div>
  </div>

    <div class="form-group">
      <div class="col-lg-8 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
  </form>
</td>
</TABLE>

  <div>
    <footer>
        <p>&copy; 2016 Company, Inc. &middot; </p>
      </footer>

    </div><!-- /.container -->
</center>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    
    <script src="<?= base_url()?>assets/js/ajax.js"></script> 
    <script type="text/javascript">
      $('.form_date').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
      });

      $("#tgg").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
            (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
            (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
  
  </script>
  </body>
</html>