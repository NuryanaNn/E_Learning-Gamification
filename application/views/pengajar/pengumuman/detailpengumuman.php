            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                        <h3 class="title-5 m-b-35">Pengumuman</h3>
                        <?php echo $this->session->flashdata('alert');?>
                        <?php foreach ($pengumuman as $i) {?> 
                        <form action="<?= base_url('admin/prosesTambahPengumuman')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Isi pengumuman</strong>
                                </div>
                                <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label"><strong>u<?= $i->judul ?></strong></label>
                                            </div>

                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label"><u><?= $author[0]->nama?></u></label>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="textarea-input" class=" form-control-label"><?= $i->tgl_tampil?></label>
                                            </div>
                                        </div>
                                        
                                        <div class="row form-group">
                                            <div class="col col-md-7">
                                               <p><?php echo $i->konten?></p> 
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>        
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>