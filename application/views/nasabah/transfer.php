			<link href="<?php echo base_url().'assets/css/lib/sweetalert/sweetalert.css'?>" rel="stylesheet">
            <!-- Page wrapper  -->
        	<div class="page-wrapper">
        		<!-- Bread crumb -->
	            <div class="row page-titles">
	                <div class="col-md-5 align-self-center">
	                    <h3 class="text-primary">Pengaturan Akun</h3> </div>
	            </div>
	            <!-- End Bread crumb -->
				<div class="container-fluid">
                <!-- Start Page Content -->
                	<div class="row">
						<div class="col-lg-12">
                        	<div class="card">		
								<div class="card-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url().'get_data_nasabah/terima_transfer' ?>">
                                        <div class="form-group">
                                                <label class="col-md-12">Nama Tujuan</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nama" data-val="true" data-val-required="Harus diisi" id="nama" class="form-control form-control-line">
                                                    <div id="hasil"></div>
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="nama" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="row">
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Nomor Rekening</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" data-val="true" data-val-required="Harus diisi" id="no_tujuan" name="no_tujuan" class="form-control form-control-line">
	                                                        <span class="field-validation-valid text-danger" data-valmsg-for="no_tujuan" data-valmsg-replace="true"></span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Nominal</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" data-val="true" data-val-required="Harus diisi" id="nominal" name="nominal" class="form-control">
	                                                        <span class="field-validation-valid text-danger" data-valmsg-for="nominal" data-valmsg-replace="true"></span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                        </div>
	                                        <!--/row-->                                       
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                            	<div class="sweetalert m-t-15">
                                                	<button class="btn btn-danger btn sweet-prompt" onclick="alert('Apakah Anda Yakin?')" type="submit">Kirim</button>
                                                </div>
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
    <script src="<?php echo base_url().'assets/js/lib/sweetalert/sweetalert.min.js'?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url().'assets/js/lib/sweetalert/sweetalert.init.js'?>"></script>
</body>
</html>