	<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Nasabah</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Nasabah</h4>
                                <h6 class="card-subtitle">Mohon teliti seluruh data nasabah</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No Tabungan</th>
                                                <th>Nama Pemilik</th>
                                                <th>Tempat dan Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Pekerjaan</th>
                                                <th>Penghasilan</th>
                                                <th>Pengeluaran</th>
                                                <!--<th>Aksi</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php foreach ($anggota as $nasabah) { ?>
                                            <tr>
                                                <td><?php echo $nasabah->id_user;?></td>
                                                <td><?php echo $nasabah->nama_nasabah;?></td>
                                                <td><?php echo $nasabah->tmp_lahir_nasabah;?>, <?php echo date('d M Y',strtotime($nasabah->tgl_lahir_nasabah)); ?></td>
                                                <td><?php echo $nasabah->jk_nasabah;?></td>
                                                <td><?php echo $nasabah->alamat_nasabah;?>, <?php echo $nasabah->kode_pos; ?></td>
                                                <td><?php echo $nasabah->no_hp ?> </td>
                                                <td><?php echo $nasabah->pekerjaan_nasabah;?></td>
                                                <td>Rp. <?php echo number_format($nasabah->penghasilan_nasabah,2,',','.');?></td>
                                                <td>Rp. <?php echo number_format($nasabah->pengeluaran_nasabah,2,',','.');?></td>
                                                <!--<td><form method="post" action="<?php echo base_url().'admin/edit_nasabah' ?>"><button class="btn btn-danger" name="id" type="submit" value="<?php echo $nasabah->id_user;?>">Edit</button></form></td>-->
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