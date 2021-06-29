            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Tugas </h3>
                                <?php echo $this->session->flashdata('alert'); ?>
                                <?php foreach ($materi as $i) { ?>
                                    <form action="<?= base_url('pengajar/prosesTambahPengumuman') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Isi Tugas</strong>
                                            </div>
                                            <div class="card-body card-block">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="text-input" class=" form-control-label"><strong><?= $i->judul ?></strong></label>
                                                    </div>

                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label"><u><?= $i->pengajar_id ?></u></label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label for="textarea-input" class=" form-control-label"><b>Start</b> <?= $i->tgl_buat ?></label>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="textarea-input" class=" form-control-label"><u></u></label>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label for="textarea-input" class=" form-control-label"><b>deadline</b> <?= $i->durasi ?></label>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-7">
                                                        <p><?php echo $i->info ?></p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-7">
                                                        <p>Download File tugas <a href="<?= base_url() . "Pengajar/downloadTugas/" . $i->file ?>"><?php echo $i->file ?></a></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                            </div>
                            </form>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
                <!-- END PAGE CONTAINER-->
            </div>