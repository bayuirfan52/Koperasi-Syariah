<!-- Page wrapper  -->
        	<div class="page-wrapper">
        		<!-- Bread crumb -->
	            <div class="row page-titles">
	                <div class="col-md-5 align-self-center">
	                    <h3 class="text-primary">Edit Data Nasabah</h3> </div>
	            </div>
	            <!-- End Bread crumb -->
				<div class="container-fluid">
                <!-- Start Page Content -->
                	<div class="row">
						<div class="col-lg-12">
                        	<div class="card">		
								<div class="card-body">
                                    <label>Profil Nasabah</label>
                                        <form class="form-horizontal form-material" method="post" action="<?php echo base_url().'admin/update_profil' ?>">
                                        	<?php foreach ($profil as $profil) { ?>
                                            <div class="form-group">
                                                <label class="col-md-12">Nama Lengkap</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nama" value="<?php echo $profil->nama_nasabah;?>" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="row">
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Tempat Lahir</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" name="tmp_lahir" value="<?php echo $profil->tmp_lahir_nasabah;?>" class="form-control form-control-line">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Tanggal Lahir</label>
	                                                    <div class="col-md-9">
	                                                        <input type="date" name="tanggal" class="form-control" value="<?php echo $profil->tgl_lahir_nasabah;?>">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                        </div>
	                                        <!--/row-->
	                                        <div class="form-group">
                                                <label class="col-md-12">Jenis Kelamin</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="jk" value="<?php echo $profil->jk_nasabah;?>"  class="form-control-static">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Alamat Tinggal</label>
                                                <div class="col-md-12">
                                                    <textarea name="alamat" rows="5" class="form-control form-control-line"><?php echo $profil->alamat_nasabah;?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Kode Pos</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="kode_pos" max="5" value="<?php echo $profil->kode_pos;?>" class="form-control-static">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Pekerjaan</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="pekerjaan" max="5" value="<?php echo $profil->pekerjaan_nasabah;?>" class="form-control-static">
                                                </div>
                                            </div>
                                            <div class="row">
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Penghasilan</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" name="penghasilan" value="<?php echo $profil->penghasilan_nasabah;?>" class="form-control form-control-line">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Pengeluaran</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" name="pengeluaran" class="form-control" value="<?php echo $profil->pengeluaran_nasabah;?>">
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                        </div>
	                                        <!--/row-->
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button type="submit" name="id" value="<?php echo $profil->id_user;?>" class="btn btn-warning">Simpan Perubahan</button>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </form>
                                    </div>
                            </div>
                            <div class="card">
                                <label>Akun Nasabah</label>      
                                <div class="card-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url().'admin/update_akun' ?>">
                                        <?php foreach ($akun as $id) { ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Username</label>
                                            <div class="col-md-12">
                                                <input name="username" type="text" disabled="true" value="<?php echo $id->id_user; ?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="oldPass">
                                               Password Lama
                                            </label>
                                            <input type="password" data-val="true" data-val-required="this is Required Field" class="form-control" name="oldPass" id="oldPass" value="<?php echo $id->pin_user; ?>" />
                                            <span class="field-validation-valid text-danger" data-valmsg-for="oldPass" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="newPass">
                                                Password Baru
                                            </label>
                                            <input type="password" data-val="true" data-val-required="this is Required Field" class="form-control" name="newPass" id="newPass"/>
                                            <span class="field-validation-valid text-danger"  data-valmsg-for="newPass" data-valmsg-replace="true"></span>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="confirmPass">
                                                Ketik Ulang Password
                                            </label>
                                            <input type="password" data-val-equalto="Password not Match ", data-val-equalto-other="newPass" data-val="true" data-val-required="this is Required Field" class="form-control" name="confirmPass" id="confirmPass"/>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="confirmPass" data-valmsg-replace="true"></span>
                                            
                                        </div>
                                        <?php } ?>                        
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </div>
                                    </form>
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