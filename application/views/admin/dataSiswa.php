            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="map-data m-b-40">
                            <div class="row">
                                <div class="col-lg">
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
                                    <h2 class="title-1 m-b-25">Data Siswa</h2>
                                    <a href="<?= base_url() ?>Admin/tambahSiswa" class="btn btn-primary">Tambah Siswa</a>
                                    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="Basic example" style="margin-bottom: 10px">
                                        <a href="<?= base_url() ?>Admin/dataSiswa/1" class="btn btn-primary">Aktif</a>
                                        <a href="<?= base_url() ?>Admin/dataSiswa/0" class="btn btn-success">Pending</a>
                                    </div>
                                    <div class="table-responsive table--no-card m-b-40">
                                        <table class="table table-borderless table-striped table-earning">
                                            <thead>
                                                <tr>
                                                    <th>Info Siswa</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($siswa as $key) { ?>
                                                    <tr>
                                                        <td>
                                                            <b><?= $key->nama ?></b> (<?= $key->nis ?>)<br>
                                                            <?= $key->kelas ?>, <?= $key->agama ?>, <?= $key->jenis_kelamin ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if ($key->status_id == 0) {
                                                                echo "Pending";
                                                            } elseif ($key->status_id == 1) {
                                                                echo "Aktif";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <a type="button" class="btn btn-primary btn-sm" href="<?= base_url() ?>Admin/detailSiswa/<?= $key->id; ?>"><i class="fas fa-info-circle"></i></a>
                                                            <?php if ($key->status_id == 0) { ?>
                                                                <a type="button" class="btn btn-success btn-sm" href="<?= base_url() ?>Admin/updateStatusSiswa/<?= $key->id; ?>/1">Aktif</a>
                                                                <a type="button" class="btn btn-danger btn-sm" href="<?= base_url() ?>Admin/updateStatusSiswa/<?= $key->id; ?>/2">Blok</a>
                                                            <?php } ?>

                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            </div>