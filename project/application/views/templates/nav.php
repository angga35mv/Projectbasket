
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
        <li><a href="<?= base_url()?>Home"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
        <?php
          if (isset($this->session->userdata['logged_in'])) {
            $data = $this->session->userdata['logged_in'];
            if($data['tipe']==1){
        ?>
              <li  class="dropdown" id="myDropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="btn btn-info btn-lg" >
                  <span class="glyphicon glyphicon-bell">
                  <span class="bubble" id="jumlah_notifikasi"></span></a>
                  <ul class="dropdown-menu" id="isi_notifikasi">

                  <!--
                    <li><a href="#"target="_blank">  Upcoming  </a></li>
                    <li><a href="#"target="_blank">  Upcoming  </a></li>
                    <li><a href="#"></a></li>
                    <li role="separator" class="divider"></li>
                    <li class="#">Sudah Lewat :</li>
                    <li><a href="#"target="_blank">Pemilihan Ketua UKM</a></li>
                  -->
                  </ul>
                </li>
        <?php   
            }
          }
        ?>
        <li><a href="<?= base_url()?>Home#club1"><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span> Kegiatan UKM</a></li>
        <li><a href="<?= base_url()?>map"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  Lokasi Latihan</a></li>
        <li><a href="<?= base_url()?>video"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>  Video Latihan</a></li>
        <li>
        <a href="<?= base_url()?>infokegiatan"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>Info Kegiatan</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Daftar<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?= base_url()?>Registrasi_Anggota">Registrasi Anggota</a></li>
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
      	<li><a href="<?= base_url()?>Home#pemisah"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Pengurus</a></li>
        <li><a href="<?= base_url()?>Home#visi"><span class="glyphicon glyphicon-pawn" aria-hidden="true"></span> VISI - MISI</a></li>
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