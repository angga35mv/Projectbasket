<section id="services">
    <center>
        <h1>Tambah Kegiatan</h1>
    </center><br><br>
    <form action="<?php echo base_url(). 'admin_kegiatan/tambah_aksi'; ?>" method="post">
        <div class="col-md-6 col-md-push-4">
            <div class="bs-example">
            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label">tanggal</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="tanggal" class="form-control" placeholder="Nama">
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">kegiatan</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="kegiatan" class="form-control" placeholder="Acara">
                </div><br><br>

                <div class="col-lg-3 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary" value="Tambah">Tambah</button>
                </div>
            </fieldset>
            </div>
        </div>
    </form>

    <br>
</section>