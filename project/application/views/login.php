
<br><br><br>
<center>
<h1>Log-in</h1>
<br>
</center>
  <div class="login-card">
    
      <form action="<?= base_url()?>login/proses_login" method="post" >
        <?=$this->session->flashdata('pesan')?>
        <input type="text" name="user" placeholder="Username" required="required">
        <input type="password" name="pass" placeholder="Password" required="required">
        <input type="submit" name="login" class="login login-submit" value="login">
      </form>
  </div>

