<!-- Page wrapper  -->
        	<div class="page-wrapper">
        		<!-- Bread crumb -->
	            <div class="row page-titles">
	                <div class="col-md-5 align-self-center">
	                    <h3 class="text-primary">Edit Data Karyawan</h3> </div>
	            </div>
	            <!-- End Bread crumb -->
				<div class="container-fluid">
                <!-- Start Page Content -->
                	<div class="row">
						<div class="col-lg-12">
                        	<div class="card">		
								<div class="card-body">
                                    <label>Profil Karyawan</label>
                                        <form class="form-horizontal form-material" method="post" action="<?php echo base_url().'dashboard_karyawan/update_profil' ?>">
                                        	<?php foreach ($profil as $profil) { ?>
                                            <div class="form-group">
                                                <label class="col-md-12">Nama Lengkap</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nama" disabled="true" value="<?php echo $profil->nama_karyawan;?>" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="row">
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Tempat Lahir</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" name="tmp_lahir" disabled="true" value="<?php echo $profil->tmp_lahir_karyawan;?>" class="form-control form-control-line">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Tanggal Lahir</label>
	                                                    <div class="col-md-9">
	                                                        <input type="date" name="tanggal" class="form-control" disabled="true" value="<?php echo $profil->tgl_lahir_karyawan;?>">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                        </div>
	                                        <!--/row-->
	                                        <div class="form-group">
                                                <label class="col-md-12">Jenis Kelamin</label>
                                                <div class="col-md-12">
                                                    <select name="jk" disabled="true" class="form-control">
                                                        <option value="Laki-Laki" <?php if ($profil->jk_karyawan == "Laki-Laki")echo "selected='true';";?> >Laki-Laki</option>
                                                        <option value="Perempuan" <?php if ($profil->jk_karyawan == "Perempuan")echo "selected='true';";?> >Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Alamat Tinggal</label>
                                                <div class="col-md-12">
                                                    <textarea name="alamat" rows="5" class="form-control form-control-line"><?php echo $profil->alamat_karyawan;?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Kode Pos</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="kode_pos" max="5" value="<?php echo $profil->kode_pos;?>" class="form-control-static">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="id" value="<?php echo $profil->id_user;?>" class="btn btn-warning">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script src="<?php echo base_url().'assets/js/lib/form-validation/jquery.validate.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/form-validation/jquery.validate.unobtrusive.min.js'?>"></script>
</body>
</html>