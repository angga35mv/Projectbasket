<section id="services">
	<center>
		<h1>Edit planning</h1>
        <br><br>
	</center>
	<?php foreach($kegiatan as $u){ ?>
	<form action="<?php echo base_url(). 'admin_kegiatan/update'; ?>" method="post">
		<div class="col-md-6 col-md-push-4">
            <div class="bs-example">
            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Tanggal</label>
                    <div class="col-lg-5">
                        <input type="hidden" name="id" value="<?php echo $u->id ?>">
                        <input required="required" type="text" name="tanggal" class="form-control" value="<?php echo $u->tanggal ?>">
                    </div>
                </div><br><br>

                <div class="form-group">
                    <label class="col-lg-2 control-label">Kegiatan</label>
                    <div class="col-lg-5">
                        <input required="required" type="text" name="kegiatan" class="form-control" value="<?php echo $u->kegiatan ?>">
                    </div>
                </div><br><br>

                <div class="col-lg-3 col-lg-offset-3">
                    <button type="submit" class="btn btn-primary" value="Simpan">Ubah</button>
                </div>

            </fieldset>
            </div>
        </div>
    </form>

	<?php } ?>
</section>