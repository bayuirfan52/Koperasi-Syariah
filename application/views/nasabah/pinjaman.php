	   <?php $status = "" ?>
       <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Pinjaman</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Pinjaman Anda</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Total Pinjaman</th>
                                                <th>Pembayaran per Bulan</th>
                                                <th>Tenggat Waktu</th>
                                                <th>Sisa Pembayaran</th>
                                                <th>Sisa Waktu</th>
                                                <th>Terakhir Bayar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($data as $pinjam) { ?>
                                            <tr>
                                                <td>Rp. <?php echo number_format($pinjam->nominal_total,2,',','.');?></td>
                                                <td>Rp. <?php echo number_format($pinjam->nominal_bulan,2,',','.'); ?></td>
                                                <td><?php echo $pinjam->pembayaran_bulan; ?></td>
                                                <td>Rp. <?php echo number_format($pinjam->sisa_pembayaran,2,',','.');?></td>
                                                <td><?php echo $pinjam->sisa_bulan; ?></td>
                                                <td><?php echo date('d M Y',strtotime($pinjam->terakhir_bayar)); ?></td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
		                        </div>
                                <br>
                                <form id="angsur" method="post" action="<?php echo base_url().'get_data_nasabah/update_angsuran' ?>">
                                    <input type="text" name="duit" value="<?php echo $pinjam->nominal_bulan ?>" hidden="true">
                                    <input type="text" name="sisa_angsur" value="<?php echo $pinjam->sisa_pembayaran ?>" hidden="true">
                                    <input type="text" name="sisa_bulan" value="<?php echo $pinjam->sisa_bulan?>" hidden="true">
                                    <button type="submit" onclick="validate(<?php echo date('m'); ?>,<?php echo date('m',strtotime($pinjam->terakhir_bayar)); ?>)" name="status" value="<?php echo $pinjam->status_pinjaman; ?>" class="btn btn-danger">Bayar Angsuran</button>
                                </form>
                                <?php $status = $pinjam->status_pinjaman; } ?>
		                    </div>
		                </div>
		                <div class="col-md-12">
	                        <div class="card p-30">  
	                        	<div class="card-body">                      	
		                            <h2 class="m-b-0">Ajukan Pinjaman</h2>   
		                            <br>
		                            <br>                     	                            
			                        <div class="row">
			                        	<br>
		                            	<br>
			                        	<div class="col-md-6">
			                        	<form method="post" action="<?php echo base_url('get_data_nasabah/validate_pinjaman/')?>">
		                                    <div class="form-group row">
		                                        <p class="card-title">Modal Usaha</p>
		                                        <div class="col-md-9">
		                                        	<input type="text" name="status" hidden="true" value="<?php echo $status; ?>">
		                                            <button type="submit" name="id" value="1" class="btn-rounded btn-danger">Ajukan</button>
		                                        </div>
		                                    </div>
		                                </form>
		                                </div>
		                                <!--/span-->
		                                <div class="col-md-6">
		                            	<form method="post" action="<?php echo base_url().'get_data_nasabah/validate_pinjaman/'?>"> 
		                                    <div class="form-group row">
		                                        <p class="card-title">Kendaraan</p>
		                                        <div class="col-md-9">
		                                        	<input type="text" name="status" hidden="true" value="<?php echo $status; ?>">
		                                            <button type="submit" name="id" value="2" class="btn-rounded btn-danger">Ajukan</button>
		                                        </div>
		                                    </div>
		                                </form>
		                                </div>
		                                <!--/span-->                                
		                            </div>
		                        </div>
		                    </div>
                    	</div>
		            </div>
		            <!-- End PAge Content -->
		        </div>
		        <!-- End Container fluid  -->
		        <!-- footer -->
		        <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
		        <!-- End footer -->		        
		    </div>
		    <!-- End Page wrapper  -->
		</div>
    <!-- End Wrapper -->
        <!-- All Jquery -->
        <script type="text/javascript">
            function validate(bulan,bulan_bayar) {
                if (bulan == bulan_bayar) {
                    alert('Anda tidak dapat melakukan pembayaran angsuran pada bulan yang sama');
                    document.getElementById('angsur').action = "";
                }
                else{
                    alert('Apakah anda yakin untuk membayar?');
                    return true;
                }
            }
        </script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/datatables.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/datatables/datatables-init.js'?>"></script>
</body>
</html>