			<!-- Page wrapper  -->
			<script type="text/javascript">
				function get_pembayaran(durasi) {
					var total = document.getElementById('total').value;					
					var pembayaran = total / durasi;					
					document.getElementById('angsuran').value = Math.round(pembayaran);
				}

				function validasi_kelebihan(data){
					var max = document.getElementById('max').value;
					if (data > max) {
						document.getElementById('durasi').disabled = true;
						document.getElementById('angsuran').disabled = true;
						document.getElementById('submit').disabled = true;
					}
					else{
						document.getElementById('durasi').disabled = false;
						document.getElementById('angsuran').disabled = false;
						document.getElementById('submit').disabled = false;
					}
				}
			</script>
        	<div class="page-wrapper">
        		<!-- Bread crumb -->
	            <div class="row page-titles">
	                <div class="col-md-5 align-self-center">
	                    <h3 class="text-primary">Pinjaman Modal Usaha</h3> </div>
	            </div>
	            <!-- End Bread crumb -->
				<div class="container-fluid">
                <!-- Start Page Content -->
                	<div class="row">
						<div class="col-lg-12">
                        	<div class="card">		
								<div class="card-body">
                                    <form class="form-horizontal form-material" method="post" action="<?php echo base_url().'get_data_nasabah/proses_pinjaman' ?>">
                                        <div class="form-group">
                                                <label class="col-md-12">Nominal maksimal yang disetujui</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nominal_max" data-val="true" id="max" class="form-control form-control-line" value="<?php echo $uang_pinjam; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Tulis Nominal yang diajukan</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nominal_total" onkeyup="validasi_kelebihan(this.value)" data-val="true" data-val-required="Harus diisi" id="total" class="form-control form-control-line">
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="nama" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="row">
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Waktu Pembayaran</label>
	                                                    <div class="col-md-9">
	                                                    	<select name="durasi" id="durasi" onchange="get_pembayaran(this.value)" class="form-control form-control-line">
	                                                    		<option value="6">6 Bulan</option>
	                                                    		<option value="12">12 Bulan</option>
	                                                    		<option value="24">24 Bulan</option>
	                                                    		<option value="48">48 Bulan</option>
	                                                    	</select>
	                                                        <span class="field-validation-valid text-danger" data-valmsg-for="durasi" data-valmsg-replace="true"></span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Angsuran per Bulan</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" data-val="true" data-val-required="Harus diisi" id="angsuran" name="angsuran" class="form-control">
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
                                                	<button id="submit" class="btn btn-danger btn sweet-prompt" type="submit">Ajukan</button>
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
        </body>
    </html>