		<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Pembayaran</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                	<div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                            	<form method="post" action="<?php echo base_url().'get_data_nasabah/update_riwayat/2' ?>">  
                                <div class="media-body media-text-left">
                                    <h2>PLN</h2>
                                    <p class="m-b-0">Masukkan Kode PLN</p>
                                    <input type="text" name="id" data-val="true" data-val-required="Harus diisi" id="id" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                    <br>
                                    <p class="m-b-0">Masukkan Nominal</p>
                                    <input type="text" data-val="true" data-val-required="Harus diisi" name="nominal" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                </div>
                                <br>
                                <div class="media-body media media-middle">
                                	<button type="submit"  name="nama_bayar" value="PLN" class="btn-rounded btn-danger">Bayar</button>
                                </div>                             
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <form method="post" action="<?php echo base_url().'get_data_nasabah/update_riwayat/2' ?>">  
                                <div class="media-body media-text-left">
                                    <h2>PDAM</h2>
                                    <p class="m-b-0">Masukkan Kode PDAM</p>
                                    <input type="text" name="id" data-val="true" data-val-required="Harus diisi" id="id" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                    <br>
                                    <p class="m-b-0">Masukkan Nominal</p>
                                    <input type="text" name="nominal" data-val="true" data-val-required="Harus diisi" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                </div>
                                <br>
                                <div class="media-body media media-middle">
                                	<button type="submit" name="nama_bayar" value="PDAM" class="btn-rounded btn-danger">Bayar</button>
                                </div>                             
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <form method="post" action="<?php echo base_url().'get_data_nasabah/update_riwayat/2' ?>">  
                                <div class="media-body media-text-left">
                                    <h2>PBB</h2>
                                    <p class="m-b-0">Masukkan Kode PBB</p>
                                    <input type="text" name="id" data-val="true" data-val-required="Harus diisi" id="id" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                    <br>
                                    <p class="m-b-0">Masukkan Nominal</p>
                                    <input type="text" name="nominal" data-val="true" data-val-required="Harus diisi" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                </div>
                                <br>
                                <div class="media-body media media-middle">
                                	<button type="submit" name="nama_bayar" value="PBB" class="btn-rounded btn-danger">Bayar</button>
                                </div>                             
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <form method="post" action="<?php echo base_url().'get_data_nasabah/update_riwayat/2' ?>">  
                                <div class="media-body media-text-left">
                                    <h2>Telkom</h2>
                                    <p class="m-b-0">Masukkan Kode Telkom</p>
                                    <input type="text" name="id" data-val="true" data-val-required="Harus diisi" id="id" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                    <br>
                                    <p class="m-b-0">Masukkan Nominal</p>
                                    <input type="text" name="nominal" data-val="true" data-val-required="Harus diisi" class="form-control form-control-line">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="id" data-valmsg-replace="true"></span>
                                </div>
                                <br>
                                <div class="media-body media media-middle">
                                	<button type="submit" name="nama_bayar" value="Telkom" class="btn-rounded btn-danger">Bayar</button>
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