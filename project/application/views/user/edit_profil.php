

<br><br><br>

<center>
<TABLE Border='1' cellpadding='3' cellspacing='3'>
<td width="650px" height="200px">
<form class="form-horizontal" action="<?= base_url()?>User/edit_data" method="post"  enctype="multipart/form-data">
  <fieldset>
    <legend>EDIT DATA ANGGOTA</legend>
    
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
      <label for="inputID" class="col-lg-2 control-label">ID</label>
      <div class="col-lg-8">
        <label class="col-lg-2 control-label"><?php echo $id_anggota;?></label>
        <input type="hidden" class="form-control" name="inputID" value= "<?=$id_anggota;?>" placeholder="Nama Lengkap">
        <input type="hidden" class="form-control" name="inputTipe" value= "<?=$tipe_anggota;?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputNama" class="col-lg-2 control-label">Nama Lengkap</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="inputNama" value= "<?=$nm_anggota;?>" placeholder="Nama Lengkap">
      </div>
    </div>
     <div class="form-group">
      <label for="inpuEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="inputEmail" value= "<?=$email;?>" id="email"  placeholder="Email">
      </div>
      <p id="warning_email"></p>
    </div>
    <div class="form-group">
      <label for="inputUser" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name="inputUser" id="user" value= "<?=$username;?>" placeholder="Username">
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
        <input type="text" class="form-control" name = "inputTmptLhr"  value= "<?=$tmp_lhr;?>" placeholder="Tempat Lahir">
      </div>
      <p id="warning_tmpt_lhr"></p>
    </div>
   <div class="form-group">
      <label for="inputTglLhr" class="col-lg-2 control-label">Tanggal Lahir</label>
      <div class="col-lg-8">
        <div class="input-group date form_date col-md-8" data-date="<?=$tgl_lhr;?>" data-date-format="yyyy-mm-dd" data-link-field="TglLhr" data-link-format="yyyy-mm-dd">
          <input class="form-control" size="16" type="text" value="<?=$tgl_lhr;?>" readonly>
          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
        <input type="hidden" name = "inputTglLhr" id = "TglLhr" value="<?=$tgl_lhr;?>" placeholder="Tanggal Lahir" />      
      </div>
      <p id="warning_tgl_lhr"></p>
    </div>
    <div class="form-group">
      <label for="inputTgg" class="col-lg-2 control-label">Tinggi badan</label>
      <div class="col-lg-8">
        <input type="text" maxlength="3"  id = "tgg" class="form-control" name = "inputTgg" placeholder="Tinggi badan"  value= "<?=$tgg_bdn;?>">
      </div>
    </div>
    <div class="form-group">
      <label for="alamat" class="col-lg-2 control-label">Alamat</label>
      <div class="col-lg-8">
        <textarea class="form-control" rows="3" name = "inputAlamat" id="alamat" placeholder="Alamat Lengkap"> <?=$almt_anggota;?> </textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Jenis Kelamin</label>
      <div class="col-lg-8">
        <div class="Jenis Kelamin">
          <label>
            <input type="radio" name="inputJK" id="optionsRadios1" value="P" <?php if(strcmp($jk_anggota,"P")==0) {echo "checked='checked'";} ?> >
            Pria
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="inputJK" id="optionsRadios2" value="W" <?php if(strcmp($jk_anggota,"W")==0) {echo "checked='checked'";} ?>>
            Wanita
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Jurusan</label>
      <div class="col-lg-8">
        <select class="form-control"  name = "inputJrs" id="select">
          <option value="SI" <?php if(strcmp($jrs_anggota,"SI")==0) {echo "selected";} ?>>SI (Sistem Informasi)</option>
          <option value="TI" <?php if(strcmp($jrs_anggota,"TI")==0) {echo "selected";} ?>>TI (Teknik Informatika)</option>
        </select>
    </div>
  </div>  
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Posisi yang diinginkan</label>
      <div class="col-lg-8">
        <select class="form-control"  name = "inputPos" id="select">
          <option value="PG" <?php if(strcmp($pos_bskt,"PG")==0) {echo "selected";} ?>>Point Guard</option>
          <option value="SG" <?php if(strcmp($pos_bskt,"SG")==0) {echo "selected";} ?>>Shooting Guard</option>
          <option value="SF" <?php if(strcmp($pos_bskt,"sF")==0) {echo "selected";} ?>>Small Forward</option>
          <option value="PF" <?php if(strcmp($pos_bskt,"PF")==0) {echo "selected";} ?>>Power Forward</option>
          <option value="C"  <?php if(strcmp($pos_bskt,"C")==0)  {echo "selected";} ?>>Center</option>
          <option value="--" <?php if(strcmp($pos_bskt,"--")==0) {echo "selected";} ?>>Saya Tidak Tahu</option>
        </select>
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