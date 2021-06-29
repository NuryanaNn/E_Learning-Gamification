<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="map-data m-b-40">
                <?php echo $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col-lg">
                        <h2 class="title-1 m-b-25">Detail Data Siswa</h2>
                        <span class="span7">Profile Siswa</span><span style="margin-bottom: 10px" class="pull-right"><a href="#modalSiswa" class="btn btn-primary btn-sm" type="button" data-toggle="modal">Edit Profile</a></span>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table">
                                <?php $siswa_id = '';
                                foreach ($siswa as $key) { ?>
                                    <thead>
                                        <tr>
                                            <th width="20%">NIS</th>
                                            <td><?= $key->nis ?><?php $siswa_id = $key->id; ?></td>
                                            <td rowspan="4"><img src="<?= base_url('assets/images/user/') . $key->foto ?>" style=" height: 200px; width:150px;"></td>
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
                                            <th>Agama</th>
                                            <td><?= $key->agama ?></td>
                                        </tr>
                                        <tr>
                                            <th>TTL</th>
                                            <td><?= $key->tempat_lahir ?>, <?= date('d-m-Y', strtotime($key->nis)) ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><?= $key->alamat ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tahun Masuk</th>
                                            <td><?= $key->tahun_masuk ?></td>
                                        </tr>
                                        <tr>
                                            <th>Status Siswa</th>
                                            <td>
                                                <?php
                                                if ($key->status_id == 0) {
                                                    echo "Pending";
                                                } elseif ($key->status_id == 1) {
                                                    echo "Aktif";
                                                } elseif ($key->status_id == 2) {
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </thead>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php $kelas_aktif_id = ''; ?>
                        <span class="span7">Kelas Siswa</span><span style="margin-bottom: 10px" class="span5 pull-right"><a href="#modalKelas" class="btn btn-success btn-sm" type="button" data-toggle="modal">Edit Kelas</a></span>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>Status</td>
                                    </tr>
                                    <?php foreach ($kelas as $key) { ?>
                                        <tr>
                                            <td><?= $key->nama ?></td>
                                            <td>
                                                <?php
                                                if ($key->aktif == 1) {
                                                    $kelas_aktif_id = $key->id;
                                                ?>
                                                    <i class="icon icon-ok">Aktif</i>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <span class="span7">Akun Siswa</span><span style="margin-bottom: 10px" class="span5 pull-right"><a href="#modalAkun" class="btn btn-success btn-sm" type="button" data-toggle="modal">Edit Akun</a></span>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table">
                                <?php $akun_id = '';
                                $akun_username = '';
                                $akun_password = '';
                                foreach ($akun as $key) {
                                    $akun_username = $key->username;
                                    $akun_password = $key->password;
                                    $akun_id = $key->id; ?>
                                    <thead>
                                        <tr>
                                            <th width="20%">Username</th>
                                            <td><?= $key->username ?></td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td>********</td>
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
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>
<div class="modal fade" id="modalKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Admin/updateKelasSiswa/<?= $siswa_id ?>/<?= $kelas_aktif_id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Kelas </label>
                        <select class="form-control" name="kelas_id" required>
                            <?php foreach ($daftarkelas as $key) { ?>
                                <option value="<?= $key->id ?>"><?= $key->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAkun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Admin/updateAkunSiswa/<?= $akun_id ?>/<?= $siswa_id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Username <span class="text-error">*</span></label>
                        <input type="text" id="username" name="username" class="form-control" required value="<?= $akun_username ?>">
                    </div>
                    <div class="form-group">
                        <label>Password <span class="text-error">*</span></label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ulangi Password <span class="text-error">*</span></label>
                        <input type="password" id="confirm_password" name="password2" class="form-control" required><span id='message'></span>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#password, #confirm_password').on('keyup', function() {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('Matching').css('color', 'green');
        } else
            $('#message').html('Not Matching').css('color', 'red');
    });
</script>
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
                <form action="<?= base_url() ?>Admin/updateSiswa/<?= $siswa_id ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php foreach ($siswa as $key) { ?>
                            <label>NIS <span class="text-error">*</span></label>
                            <input type="text" id="nis" name="nis" class="form-control" value="<?= $key->nis ?>" required>
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
                        <label>Tahun Masuk <span class="text-error">*</span></label>
                        <input type="text" name="tahun_masuk" class="form-control" maxlength="4" value="<?= $key->tahun_masuk ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="<?= $key->tempat_lahir ?>">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $key->tgl_lahir ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control" required>
                            <option value="ISLAM" <?php if ($key->jenis_kelamin == 'ISLAM') {
                                                        echo "selected";
                                                    } ?>>ISLAM</option>
                            <option value="KRISTEN" <?php if ($key->jenis_kelamin == 'KRISTEN') {
                                                        echo "selected";
                                                    } ?>>KRISTEN</option>
                            <option value="KATOLIK" <?php if ($key->jenis_kelamin == 'KATOLIK') {
                                                        echo "selected";
                                                    } ?>>KATOLIK</option>
                            <option value="HINDU" <?php if ($key->jenis_kelamin == 'HINDU') {
                                                        echo "selected";
                                                    } ?>>HINDU</option>
                            <option value="BUDHA" <?php if ($key->jenis_kelamin == 'BUDHA') {
                                                        echo "selected";
                                                    } ?>>BUDHA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $key->alamat ?>">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button><button type="reset" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>