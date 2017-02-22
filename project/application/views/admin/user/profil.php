

<br><br><br>

<center>
<TABLE Border='1' cellpadding='3' cellspacing='3'>
<td width="650px" height="200px">
  <fieldset>
    <legend>PROFIL</legend>
    
    <div class="form-group" > 
      <center> 
        <img src="<?=base_url()?><?=$foto_anggota;?>"  style="width:304px;height:228px;">
      </center>
    </div>
    <table >
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Nama Lengkap</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label"><font size="4"><?=$nm_anggota;?></font></td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Email</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label"><font size="4"><?=$email;?></font></td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Tempat Lahir</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label"><font size="4"><?=$tmp_lhr;?></font></td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Tanggal Lahir</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label"><font size="4"><?=$tgl_lhr;?></font></td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Tinggi</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label"><font size="4"><?=$tgg_bdn;?></font></td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Alamat</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label"><font size="4"><?=$almt_anggota;?></font></td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Jenis Kelamin</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label">
          <font size="4">
            <?php if(strcmp($jk_anggota,"P")==0){
              echo "Pria";
            }else{
              echo "Wanita";
            }
            ?>
          </font>
        </td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Jurusan</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label">
          <font size="4">
            <?php if(strcmp($jrs_anggota,"SI")==0){
              echo "SI (Sistem Informasi)";
            }else{
              echo "TI (Teknik Informatika)";
            }
            ?>
          </font>
        </td>  
      </tr>
      <tr>
        <td class="col-lg-4 control-label"><font size="4">Posisi yang diinginkan</font></td>
        <td class="col-lg-1 control-label"><font size="4">:</font></td>
        <td class="col-lg-8 control-label">
          <font size="4">
            <?php if(strcmp($pos_bskt,"PG")==0){
              echo "Point Guard";
            } else if(strcmp($pos_bskt,"SG")==0){
              echo "Shooting Guard";
            } else if(strcmp($pos_bskt,"SF")==0){
              echo "Small Forward";
            } else if(strcmp($pos_bskt,"PF")==0){
              echo "Power Forward";
            } else if(strcmp($pos_bskt,"C")==0){
              echo "Center";
            } else if(strcmp($pos_bskt,"--")==0){
              echo "Tidak Tahu";
            }
            ?>
          </font>
        </td>  
      </tr>
      <tr>
        <td colspan="3" class="col-lg-13 control-label">
          <!--<form action="<?= base_url()?>user/showeditprofil" method="post"  enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="id" value ="<?=$id_anggota;?>">
              <button type="submit" class="btn btn-primary">Edit</button>
          </form>
          -->
          <center>
            <a class="btn btn-primary" href="<?= base_url()?>admin/showeditprofil/<?= $id_anggota?>">Edit Data</a>
            <a class="btn btn-primary" href="<?= base_url()?>admin/showeditfoto/<?= $id_anggota?>">Edit Foto</a>
            <a class="btn btn-primary" href="<?= base_url()?>admin/hapususer/<?= $id_anggota?>">Hapus Data</a>
          </center>
        </td>
      </tr>
    </table>
    </fieldset>
    
</td>
</TABLE>

  <div>
    <footer>
        <p>&copy; 2016 Company, Inc. &middot; </p>
      </footer>

    </div><!-- /.container -->
</center>
  </body>
</html>