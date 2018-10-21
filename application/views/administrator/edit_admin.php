<!-- Page wrapper  -->
        	<div class="page-wrapper">
        		<!-- Bread crumb -->
	            <div class="row page-titles">
	                <div class="col-md-5 align-self-center">
	                    <h3 class="text-primary">Edit Data Admin</h3> </div>
	            </div>
	            <!-- End Bread crumb -->
				<div class="container-fluid">
                <!-- Start Page Content -->
                	<div class="row">
						<div class="col-lg-12">
							<div class="card">
                                <label>Akun Admin</label>      
                                <div class="card-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url().'admin/update_admin' ?>">
                                        <?php foreach ($akun as $id) { ?>
                                        <div class="form-group">
                                            <label class="col-md-12">Username</label>
                                            <div class="col-md-12">
                                                <input name="username" type="text" value="<?php echo $id->id_admin; ?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="oldPass">
                                               Password Lama
                                            </label>
                                            <input type="password" data-val="true" data-val-required="this is Required Field" class="form-control" name="oldPass" id="oldPass" value="<?php echo $id->password; ?>" />
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