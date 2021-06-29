<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <h3>Profile Siswa</h3>
            <div class="offset-md-2 col-md-8">
                <div class="card p-4">
                    <div class="mx-auto d-block">
                        <div class="table-responsive table">
                            <table class="table">
                                <?php foreach ($siswa as $key) { ?>
                                    <thead>
                                        <img class="rounded-circle mb-2 ml-4" src="<?= base_url('assets/images/user/') . $key->foto ?>" style=" height: 150px; width:150px;">
                                        <tr>
                                            <th>NIS</th>
                                            <td><?= $key->nis ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td><?= $key->nama ?></td>
                                        </tr>
                                        <tr>
                                            <th>Level</th>
                                            <td><?= $key->level ?></td>
                                        </tr>
                                        <tr>
                                            <th>Skor</th>
                                            <td><?= $key->score ?></td>
                                        </tr>
                                        <tr>
                                            <th>Exp Siswa</th>
                                            <td><?= $key->exp ?></td>
                                            </th>
                                        <tr>
                                            <th>Badge <button type="button" class="btn btn-sm btn-info  " data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fas fa-cogs"></i> Masukan Nama Badges
                                                </button></th>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge1 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges1" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge2 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges2" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge3 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges3" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge4 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges4" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge5 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges5" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge6 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges5" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge7 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges6" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge8 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges7" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge9 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges8" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge10 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges9" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge11 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges10" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge12 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges11" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge13 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges12" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge14 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges13" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge15 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges14" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge16 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges15" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img class="img-profile rounded-circle" src="<?= base_url('assets/images/badge/') . $key->badge17 ?>" style="height: 50px; width:50px;">
                                                        <a href="#modalBadges16" class="btn btn-primary ml-2" type="button" data-toggle="modal">+</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="#modalSiswa" class="btn btn-primary btn-sm" type="button" data-toggle="modal">Edit Profile</a>
                                            <td>
                                        </tr>
                                    </thead>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profile Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateSiswa/<?= $key->id ?>?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>NIS <span class="text-error">*</span></label>
                            <input type="text" id="nis" name="nis" class="form-control" value="<?= $key->nis ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama <span class="text-error">*</span></label>
                        <input type="text" name="nama" class="form-control" value="<?= $key->nama ?>" required readonly>
                    </div>
                    <div class="form-group">
                        <label>Level <span class="text-error">*</span></label>
                        <input type="text" name="level" class="form-control" maxlength="4" value="<?= $key->level ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Score</label><br>
                        <label style="font-size: 10px; color:red" class="pt--3">Jumlahkan Skor Sesuai Dengan Nilai Tugas </label>
                        <input type="text" name="score" class="form-control" value="<?= $key->score ?>">
                    </div>
                    <div class="form-group">
                        <label>Exp Siswa</label><br>
                        <label style="font-size: 10px; color:red" class="pt--3">Berikan Xp Sebesar 10 Point Setiap Tugas </label>
                        <input type="text" name="exp" class="form-control" value="<?= $key->exp ?>">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Update Badges -->
<div class="modal fade" id="modalBadges" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambahkan Badge 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge" class="form-control">
                            <label>Badge <span class="small-text">Masukan Nama Badge : Contoh 1.png</span></label>
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge1/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge1" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBadges2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge2/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge2" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBadges3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge 4</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge3/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge3" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBadges4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge 5</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge4/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge4" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalBadges5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge 5</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge5/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge5" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge6/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge6" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- MOdal Badge 7 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge7/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge7" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- M<odal Badge 8 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge8/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge8" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Badge 9 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge9/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge9" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Badge 9 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge9/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge9" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Badge 10 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge10/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge10" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update Badge 11 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge11/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge11" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Update Badge 12 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge12/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge12" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Badge 13 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge13/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge13" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Badge 14 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge14/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge14" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Badge 15 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge15/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge15" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Badges 16-->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge16/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge16" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Badge 17 -->
<div class="modal fade" id="modalBadges1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Badge</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Pengajar/updateBadge17/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>Badge <span class="text-error">*</span></label>
                            <input type="text" name="badge17" class="form-control">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Informasi Pemberian Badges</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/king.png" style="height: 50px; width:50px;">king.png</p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/queen.png" style="height: 50px; width:50px;">queen.png</p>
                        </p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/jack.png" style="height: 50px; width:50px;">jack.png</p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/kinggame.png" style="height: 50px; width:50px;">kinggame.png</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/star.png" style="height: 50px; width:50px;">star.png</p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/time.png" style="height: 50px; width:50px;">time.png</p>
                        </p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/good.png" style="height: 50px; width:50px;">good.png</p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/punish.png" style="height: 50px; width:50px;">punish.png</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/diamond.png" style="height: 50px; width:50px;">diamond.png</p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/certificate.png" style="height: 50px; width:50px;">certificate.png</p>
                        </p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/idea.png" style="height: 50px; width:50px;">idea.png</p>
                    </div>

                    <div class="col-md-3 text-info text-center">
                        <p class="small text-info"><img class="img-profile rounded-circle" src="<?= base_url('assets') ?>/images/badge/timing.png" style="height: 50px; width:50px;">timing.png </p>
                    </div>
                </div>
            </div>
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