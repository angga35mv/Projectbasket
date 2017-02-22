

<br><br><br>

<center>
<TABLE Border='1' cellpadding='3' cellspacing='3'>
<td width="650px" height="200px">
  <fieldset>
    <legend>DAFTAR USER</legend>
      
      <table border="1">
      <tr>
        <td class="col-lg-1 control-label" align="center"><font size="4">No.</font></td>
        <td class="col-lg-1 control-label" align="center"><font size="4">Id</font></td>
        <td class="col-lg-2 control-label" align="center"><font size="4">Nama </font></td>
        <td class="col-lg-2 control-label" align="center"><font size="4">Email </font></td>
        <td class="col-lg-2 control-label" align="center"><font size="4">Username </font></td>
        <td class="col-lg-2 control-label" align="center"><font size="4">Tipe </font></td>    
      </tr>
      <?php
        $no =0;
        foreach ($user as $temp) {
          $no++;
      ?>
          <tr>
            <td class="col-lg-1 control-label" align="center"><font size="2"><?=$no;?></font></td>
            <td class="col-lg-1 control-label" align="center"><font size="2"><a href='<?= base_url()?>admin/showdatauser/<?= $temp->id_anggota?>'><?=$temp->id_anggota;?></a></font></td>
            <td class="col-lg-2 control-label" align="center"><font size="2"><?=$temp->nm_anggota;?></font></td>
            <td class="col-lg-2 control-label" align="center"><font size="2"><?=$temp->email;?></font></td>
            <td class="col-lg-2 control-label" align="center"><font size="2"><?=$temp->username;?></font></td>
            <td class="col-lg-2 control-label" align="center">
              <font size="2">
                <?php 
                  if($temp->tipe_anggota ==0){
                    echo "User";
                  }else{
                    echo "Admin";
                  }
                ?> 
              </font>
            </td>  
          </tr>
      <?php
        }
      ?>
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