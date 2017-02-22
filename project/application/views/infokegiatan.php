<br><br><br>

<section id="services">
  <div class="container">
  <center><h1 class="intro-lead-in">Kegiatan</h1></center><br>
        <div class="col-md-12 row text-left">
          <table class="table table-striped">
            <thead>
            <tr>
              <th><h3>Tanggal</h3></th>
              <th><h3>Kegiatan</h3></th>            
            </tr>
            </thead>
              <tbody>
              <?php foreach($kegiatan as $u){ ?>
                <tr>
                  <td><h5><?php echo $u->tanggal ?></h5></td>
                  <td><h5><?php echo $u->kegiatan ?></h5></td>
                </tr>
              <?php } ?>          
              </tbody>
          </table>
        </div>
  </div>
</section>