
<br><br><br><center>
<section id="services">
  <div class="container">
        <div class="col-rg-10 row text-left">
          <center><h1>Kegiatan</h1> <br></center>
          <center><table class="table">
            <thead>
            <tr>
              <th>Tanggal</th>
              <th>Kegiatan</th>            
            </tr>
            </thead>

              <tbody>
              <?php foreach($kegiatan as $u){ ?>
                <tr>
                  <td><?php echo $u->tanggal ?></td>
                  <td><?php echo $u->kegiatan ?></td>
                  <td>
                    <?php echo anchor('admin_kegiatan/edit/'.$u->id,'Edit'); ?>
                       <?php echo anchor('admin_kegiatan/hapus/'.$u->id,'Hapus'); ?>
                  </td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
          </center>
                <div class="text-center">
                    <a href="admin_kegiatan/tambah"><button class="btn btn-primary">Tambah kegiatan</button></a>
                </div>
        </div>
  </div>
</section>
</center>