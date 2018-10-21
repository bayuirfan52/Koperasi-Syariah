        <link rel="stylesheet" href="<?php echo base_url().'assets/css/lib/html5-editor/bootstrap-wysihtml5.css'?>" />
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Berita</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
                        <li class="breadcrumb-item active">Editor</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tulis Berita</h4>
                                <h6 class="card-subtitle">Editor</h6>
                            <?php if (isset($data)) { foreach ($data as $berita) {  ?>
                                   <form method="post" action="<?php echo base_url().'admin/update_berita' ?>" enctype="multipart/form_data">                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Judul</label>
                                        <input type="text" name="judul" value="<?php echo $berita->judul_berita ?>" class="form-control">
                                        <br>
                                        <label class="col-md-12">Masukkan Gambar Deskripsi</label>
                                        <input type="file" accept="image/*" name="gambar" value="<?php echo $berita->image ?>" class="form-control-file">
                                        <br>
                                        <textarea name="isi" class="textarea_editor form-control" rows="15" placeholder="Tulis sesuatu ..." style="height:450px"><?php echo $berita->isi; ?></textarea>
                                        <br>
                                        <button type="submit" name="id" value="<?php echo $berita->id_berita ?>" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                            <?php } 
                                    } else { ?>
                                <form method="post" action="<?php echo base_url().'admin/input_berita' ?>" enctype="multipart/form_data">                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Judul</label>
                                        <input type="text" name="judul" class="form-control">
                                        <br>
                                        <label class="col-md-12">Masukkan Gambar Deskripsi</label>
                                        <input type="file" accept="image/*" name="gambar" class="form-control-file">
                                        <br>
                                        <textarea name="isi" class="textarea_editor form-control" rows="15" placeholder="Tulis sesuatu ..." style="height:450px"></textarea>
                                        <br>
                                        <button type="submit" class="btn btn-info">Simpan</button>
                                    </div>
                                </form>
                        <?php } ?>
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
    <script src="<?php echo base_url().'assets/js/lib/jquery/jquery.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/lib/bootstrap/js/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/bootstrap/js/bootstrap.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'assets/js/jquery.slimscroll.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'assets/js/sidebarmenu.js'?>"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url().'assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/html5-editor/wysihtml5-0.3.0.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/html5-editor/bootstrap-wysihtml5.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/lib/html5-editor/wysihtml5-init.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'assets/js/custom.min.js'?>"></script>

</body>

</html>