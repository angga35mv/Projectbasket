
      <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="Home"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <li><a href="<?= base_url()?>map"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  Lokasi Latihan</a></li>
        <li><a href="<?= base_url()?>video"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>  Video Latihan</a></li>
        <li>
        <a href="<?= base_url()?>infokegiatan"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>Info Kegiatan</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Daftar<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="Registrasi_Anggota">Registrasi Anggota</a></li>
          </ul>
        </li>
        <?php
          if (isset($this->session->userdata['logged_in'])) {
            $data = $this->session->userdata['logged_in'];
            if($data['tipe']==1){
        ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Administrasi<span   class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="<?= base_url()?>admin/showdaftaruser">Daftar Member</a></li>
                  <li><a href="<?= base_url()?>admin_kegiatan">Tambah Kegiatan</a></li>
                </ul>
            </li>
        <?php   
            }
          }
        ?>
        </ul>
      <ul class="nav navbar-nav navbar-right">
      	
        <li><a href="<?= base_url()?>facebook"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> facebook </a> </li>
        <?php
          if (isset($this->session->userdata['logged_in'])) {
            $data = $this->session->userdata['logged_in'];
        ?>
            <li><a href='<?= base_url()?>user'><?=$data['username'];?></a></li>
            <li><a href='<?= base_url()?>login/logout'> Logout</a></li>
        <?php 
            }else{
        ?>

        
              <li><a href='<?= base_url()?>Login'>Login</a></li>
        <?php   
            }
        ?>
      </ul>
    </div>
  </div>
</nav>