	<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tabungan</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Tabungan Anda</h4>
                                <h6 class="card-subtitle">Laporkan bila ada yang tidak sesuai</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No Transaksi</th>
                                                <th>Tanggal</th>
                                                <th>Setoran</th>
                                                <th>Penarikan</th>
                                                <th>Saldo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($data as $tabungan) { ?>
                                            <tr>
                                                <td><?php echo $tabungan->no_transaksi; ?></td>
                                                <td><?php echo date('d-m-Y',strtotime($tabungan->tgl_tabungan));?></td>
                                                <td>Rp. <?php echo number_format($tabungan->setoran,2,',','.');?></td>
                                                <td>Rp. <?php echo number_format($tabungan->penarikan,2,',','.');?></td>
                                                <td>Rp. <?php echo number_format($tabungan->saldo,2,',','.');?></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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