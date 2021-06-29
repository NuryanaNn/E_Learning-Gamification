<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="offset-md-3 col-md-6">
                <div class="card p-3">
                    <h3 class="title-3 m-b-30">Profile</h3>
                    <div class="mx-auto d-block">
                        <?php if ($profile[0]->foto == null) { ?>
                            <img class="rounded-circle " src="<?= base_url('assets/images/icon/user.png') ?>" alt="Card image cap">

                        <?php } else { ?>
                            <img class="rounded-circle " src="<?= base_url('assets/images/user/' . $profile[0]->foto) ?>" alt="Card image cap" style="height: 200px; width:200px;">

                        <?php } ?>
                    </div>
                    <div class="filters">
                        <form action="<?= base_url('siswa/updategambar') ?>" enctype="multipart/form-data" method="post" class="row form-group">
                            <div class="col col-md-6 mt-4">
                                <?php if ($this->session->flashdata('error') != null) { ?>
                                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                        <span class="badge badge-pill badge-danger">error</span>
                                        <?= $this->session->flashdata('error') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php } ?>
                                <input type="file" id="file-input" name="file-input" class="form-control-file">
                            </div>
                            <div class="col-10 col-md-5 mt-3">
                                <button type="submit" class="btn btn-primary btn-sm">Update Gambar</button>
                            </div>
                        </form>
                        <form action="<?= base_url('siswa/updateprofile/') . $this->session->userdata('id'); ?>" method="post">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Username</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static"><?=
                                                                    $this->session->userdata('username');
                                                                    ?></p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">NIS</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p><?= $profile[0]->nis ?>
                                    <p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <P><?= $profile[0]->nama ?>
                                    <p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Jenis Kelamin</label>
                                </div>
                                <div class="col col-md-9">
                                    <p><?= $profile[0]->jenis_kelamin ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tempat Lahir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p><?= $profile[0]->tempat_lahir ?></p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tgl Lahir</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p><?= $profile[0]->tgl_lahir ?></p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Alamat</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p><?= $profile[0]->alamat ?></p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Agama</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p><?= $profile[0]->agama ?></p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Tahun Masuk</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p><?= $profile[0]->tahun_masuk ?></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END MAP DATA-->
            </div>
        </div>

    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#laki").click(function() {
                $("#perempuan").attr("checked", false);
                $("#laki").attr("checked", true);

            });
            $("#perempuan").click(function() {
                $("#laki").attr("checked", false);
                $("#perempuan").attr("checked", true);
            });
        });
    </script>