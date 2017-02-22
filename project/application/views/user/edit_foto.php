

<br><br><br>

<center>
<TABLE Border='1' cellpadding='3' cellspacing='3'>
<td width="650px" height="200px">
<form class="form-horizontal" action="<?= base_url()?>User/edit_foto" method="post"  enctype="multipart/form-data">
  <fieldset>
    <legend>EDIT DATA FOTO</legend>
    
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
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Foto</label>
      <div class="col-lg-8">
        <input type="file" class="form-control" name = "inputFoto" accept="image/*">
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
</body>
</html>