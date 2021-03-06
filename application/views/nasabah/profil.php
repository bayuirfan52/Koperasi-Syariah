		<!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Profil Anda</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
					<div class="col-lg-12">
					    <div class="card">
							<div class="card-body">
					            <div class="row">
					            	<?php foreach ($data as $profil) { ?>
					                <div class="col-md-3 col-xs-6 b-r"> <strong>Nama Lengkap</strong>
					                    <br>
					                    <p class="text-muted"><?php echo $profil->nama_nasabah; ?></p>
					                </div>
					                <div class="col-md-3 col-xs-6 b-r"> <strong>Tempat dan Tanggal Lahir</strong>
					                    <br>
					                    <p class="text-muted"><?php echo $profil->tmp_lahir_nasabah; ?>, <?php echo date("d F Y",strtotime($profil->tgl_lahir_nasabah));?></p>
					                </div>
					                <div class="col-md-3 col-xs-6 b-r"> <strong>Jenis Kelamin</strong>
					                    <br>
					                    <p class="text-muted"><?php echo $profil->jk_nasabah; ?></p>
					                </div>
					                <div class="col-md-3 col-xs-6"> <strong>Alamat</strong>
					                    <br>
					                    <p class="text-muted"><?php echo $profil->alamat_nasabah; ?>. <?php echo $profil->kode_pos; ?></p>
					                </div>
					                <div class="col-md-3 col-xs-6 b-r"> <strong>Pekerjaan</strong>
					                    <br>
					                    <p class="text-muted"><?php echo $profil->pekerjaan_nasabah; ?></p>
					                </div>
					                <div class="col-md-3 col-xs-6 b-r"> <strong>Penghasilan dan Pengeluaran</strong>
					                    <br>
					                    <p class="text-muted">Penghasilan : Rp. <?php echo number_format($profil->penghasilan_nasabah,2,',','.'); ?>. Pengeluaran : Rp. <?php echo number_format($profil->pengeluaran_nasabah,2,',','.'); ?></p>
					                </div>
					                <div class="col-md-3 col-xs-6 b-r"> <strong>Nomor Handphone</strong>
					                    <br>
					                    <p class="text-muted"><?php echo $profil->no_hp; ?></p>
					                </div>
					                <?php } ?>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>