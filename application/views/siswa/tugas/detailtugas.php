            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10">
                                <h3 class="title-5 m-b-35">Tugas </h3>
                                <?php echo $this->session->flashdata('alert'); ?>
                                <?php foreach ($materi as $i) { ?>
                                    <form action="<?= base_url('admin/prosesTambahPengumuman') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                                                        <label for="textarea-input" class=" form-control-label"><b>Deadline</b> <?= $i->durasi ?></label>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col col-md-7">
                                                        <p><?php echo $i->info ?></p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col col-md-7">
                                                        <p>Download File tugas <a href="<?= base_url() . "Pengajar/download/" . $i->file ?>"><?php echo $i->file ?></a></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                            </div>
                            </form>
                        <?php } ?>
                        <div class="col-md-2 mt-5">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="mx-auto d-block">Nilai</strong>
                                </div>
                                <div class="card-body mx-auto d-block">
                                    <h1><?php if (!empty($nilai)) {
                                            echo $nilai[0]->nilai;
                                        } else {
                                            echo 0;
                                        } ?></h1>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <?php echo $this->session->flashdata('alert'); ?>

                                <form action="<?= base_url('siswa/uploadTugas') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Upload tugas</strong>
                                        </div>
                                        <div class="card-body card-block">
                                            <?php if (isset($error)) { ?>
                                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-danger">Error</span>
                                                    <?= $error ?>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <?php } ?>
                                            <?php if ($this->session->flashdata('success') != null) { ?>
                                                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                    <span class="badge badge-pill badge-success">Success</span>
                                                    <?= $this->session->flashdata('success') ?>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            <?php } ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Upload Tugas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="hidden" id="text-input" value="<?= $kelasid ?>" name="idkelas" class="form-control">
                                                    <input type="hidden" id="text-input" value="<?= $tugasid ?>" name="idtugas" class="form-control">
                                                    <input type="hidden" id="text-input" value="<?= $mapelid ?>" name="idmapel" class="form-control">
                                                    <input type="file" id="text-input" name="materi" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            </div>
            </div>