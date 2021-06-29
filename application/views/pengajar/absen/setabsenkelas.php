            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                         <h3 class="title-5 m-b-35">Tambah Jadwal Kelas</h3>
                         <?php echo $this->session->flashdata('alert');?>

                        <form action="<?= base_url('pengajar/setabsens')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card">
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Kelas</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="kelas" placeholder="Tanggal Pengumuman" readonly value="<?= $kelas[0]->nama?>" class="form-control">
                                            <input type="hidden" id="text-input" name="idkelas" placeholder="Tanggal Pengumuman" readonly value="<?= $idkelas?>" class="form-control">
                                            <input type="hidden" id="text-input" name="idmapelkelas" placeholder="Tanggal Pengumuman" readonly value="<?= $idmapelkelas?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Mapel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="tanggal" placeholder="Tanggal Pengumuman" readonly value="<?= $mapel[0]->nama?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Tanggal</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Jam Mulai</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="time" id="text-input" name="jammulai" placeholder="Judul" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Jam Selesai</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="time" id="text-input" name="jamselesai" placeholder="Judul" class="form-control">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Mulai Absen
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>