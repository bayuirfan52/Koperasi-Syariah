			<link href="<?php echo base_url().'assets/css/lib/sweetalert/sweetalert.css'?>" rel="stylesheet">
            <!-- Page wrapper  -->
        	<div class="page-wrapper">
        		<!-- Bread crumb -->
	            <div class="row page-titles">
	                <div class="col-md-5 align-self-center">
	                    <h3 class="text-primary">Pinjaman Kendaraan</h3> </div>
	            </div>
	            <!-- End Bread crumb -->
				<div class="container-fluid">
                <!-- Start Page Content -->
                	<div class="row">
						<div class="col-lg-12">
                        	<div class="card">		
								<div class="card-body">
                                    <form id="form" class="form-horizontal form-material" method="post" action="<?php echo base_url().'get_data_nasabah/pinjaman_kendaraan' ?>">
                                        <div class="form-group">
                                                <label class="col-md-12">Masukkan Harga Mobil</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="harga" data-val="true" data-val-required="Harus diisi" id="harga" class="form-control form-control-line">
                                                    <div id="hasil"></div>
                                                    <span class="field-validation-valid text-danger" data-valmsg-for="nama" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <button class="btn btn-info" onclick="get_DP()">Periksa DP</button>
                                            <div class="row">
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Besar DP</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" data-val="true" data-val-required="Harus diisi" id="dp" name="dp" class="form-control form-control-line">
	                                                        <span class="field-validation-valid text-danger" data-valmsg-for="no_tujuan" data-valmsg-replace="true"></span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                            <div class="col-md-6">
	                                                <div class="form-group row">
	                                                    <label class="control-label text-right col-md-3">Nominal yang Harus Dibayar</label>
	                                                    <div class="col-md-9">
	                                                        <input type="text" data-val="true" data-val-required="Harus diisi" id="total_biaya" name="total_biaya" class="form-control">
	                                                        <span class="field-validation-valid text-danger" data-valmsg-for="nominal" data-valmsg-replace="true"></span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                            <!--/span-->
	                                        </div>
	                                        <!--/row-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Waktu Pembayaran</label>
                                                        <div class="col-md-9">
                                                            <select name="durasi" id="durasi" onchange="get_pembayaran(this.value)" class="form-control form-control-line">
                                                                <option value="12">12 Bulan (12 kali)</option>
                                                                <option value="24">24 Bulan (24 Kali)</option>
                                                                <option value="36">36 Bulan (36 kali)</option>
                                                                <option value="48">48 Bulan (48 bulan)</option>
                                                            </select>
                                                            <span class="field-validation-valid text-danger" data-valmsg-for="rekening" data-valmsg-replace="true"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <label class="control-label text-right col-md-3">Besar Angsuran</label>
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
                                                	<button class="btn btn-danger btn sweet-prompt" onclick="validasi_pinjaman()" type="submit">Kirim</button>
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
            <script type="text/javascript">
                function get_DP() {
                    var harga = document.getElementById('harga').value;
                    var DP = harga * 0.25;
                    var total_angsur = harga - DP;
                    document.getElementById('dp').value = DP;
                    document.getElementById('total_biaya').value = total_angsur;
                }

                function get_pembayaran(durasi){
                    var biaya = document.getElementById('total_biaya').value;
                    var hasil = biaya / durasi;
                    document.getElementById('angsuran').value = Math.ceil(hasil);
                }

                function validasi_pinjaman() {
                    var saldo = <?php echo $saldo; ?>;
                    var dp = document.getElementById('dp').value;
                    if (saldo < dp) {
                        alert('Maaf, Saldo Anda kurang untuk membayar biaya DP');
                        document.getElementById('form').action = "";
                    }
                    else{
                        alert('Apakah Anda Yakin?');
                        return true;
                    }
                }
            </script>
    <script src="<?php echo base_url().'assets/js/lib/form-validation/jquery.validate.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/form-validation/jquery.validate.unobtrusive.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/sweetalert/sweetalert.min.js'?>"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url().'assets/js/lib/sweetalert/sweetalert.init.js'?>"></script>
</body>
</html>