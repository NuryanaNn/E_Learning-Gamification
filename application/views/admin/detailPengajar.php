<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="col-md-12">
                <h3>Profil Pengajar</h3>
                <a href="#modalPengajar" class="btn btn-primary btn-sm mb-3 mt-3" type="button" data-toggle="modal">Edit Profile</a>

                <div class="mx-auto d-block">
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table">
                            <?php foreach ($pengajar as $key) { ?>
                                <thead>
                                    <td><img src="<?= base_url('assets/images/user/') . $key->foto ?>" style=" height: 200px; width:150px;"></td>
                                    <tr>
                                        <th width="20%">NIP</th>
                                        <td><?= $key->nip ?></td>
                                    </tr>

                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $key->nama ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td><?= $key->jenis_kelamin ?></td>
                                    </tr>
                                    <tr>
                                        <th>TTL</th>
                                        <td><?= $key->tempat_lahir ?>, <?= date('d-m-Y', strtotime($key->tempat_lahir)) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?= $key->alamat ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status Pengajar</th>
                                        <td>
                                            <?php
                                            if ($key->status_id == 0) {
                                                echo "Pending";
                                            } elseif ($key->status_id == 1) {
                                                echo "Aktif";
                                            } elseif ($key->status_id == 2) {
                                                echo "Blok";
                                            } elseif ($key->status_id == 3) {
                                                echo "Alumni";
                                            } elseif ($key->status_id == 4) {
                                                echo "Deleted";
                                            } ?>
                                        </td>
                                    </tr>
                                </thead>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Foto Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php foreach ($pengajar as $key) { ?>
                        <form action="<?= base_url() ?>Admin/updateGambar/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Foto</label>
                                <img src="<?= $key->foto ?>">
                                <input type="file" name="userfile">
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-primary">Cancel</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modalPengajar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile Pengajar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php foreach ($pengajar as $key) { ?>
                        <form action="<?= base_url() ?>Admin/updatePengajar/<?= $key->id ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>NIP <span class="text-error">*</span></label>
                                <input type="text" id="nip" name="nip" class="form-control" value="<?= $key->nip ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Nama <span class="text-error">*</span></label>
                                <input type="text" name="nama" class="form-control" value="<?= $key->nama ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if ($key->jenis_kelamin == 'Laki-laki') {
                                                                                                            echo "checked";
                                                                                                        } ?> value="Laki-laki" id="exampleRadios1">
                                    <label class="form-check-label" for="exampleRadios1">Laki-laki</label><br>
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" <?php if ($key->jenis_kelamin == 'perempuan') {
                                                                                                            echo "checked";
                                                                                                        } ?> value="Perempuan" id="exampleRadios2">
                                    <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" value="<?= $key->tempat_lahir ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $key->tgl_lahir ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $key->alamat ?>" required>
                            </div>
                        <?php } ?>
                        <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                        </form>
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