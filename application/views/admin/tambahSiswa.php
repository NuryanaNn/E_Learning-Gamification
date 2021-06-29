            <!-- MAIN CONTENT-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="map-data m-b-40">
                            <h2 class="title-1 m-b-25"><a href="<?= base_url() ?>admin/dataSiswa/1">Data Siswa</a> / Tambah Siswa</h2>
                            <hr>
                            <div class="row">
                                <div class="col-lg-9">
                                    <form action="<?= base_url() ?>admin/simpanSiswa" method="post" accept-charset="utf-8" class="form-horizontal row-fluid" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>NIS <span class="text-error">*</span></label>
                                            <input type="text" id="nis" name="nis" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama <span class="text-error">*</span></label>
                                            <input type="text" name="nama" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin *</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="exampleRadios1">
                                                <label class="form-check-label" for="exampleRadios1">Laki-laki</label><br>
                                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="exampleRadios2">
                                                <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Masuk <span class="text-error">*</span></label>
                                            <input type="text" name="tahun_masuk" class="form-control" maxlength="4" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas <span class="text-error">*</span></label>
                                            <select class="form-control" name="kelas_id" required>
                                                <?php foreach ($kelas as $key) { ?>
                                                    <option value="<?= $key->id ?>"><?= $key->nama ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama" class="form-control">
                                                <option required>--pilih--</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="KATOLIK">KATOLIK</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Username <span class="text-error">*</span></label>
                                            <input type="text" id="username" name="username" class="form-control" required placeholder="example@example.sch.id">
                                        </div>
                                        <div class="form-group">
                                            <label>Password <span class="text-error">*</span></label>
                                            <input type="password" id="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi Password <span class="text-error">*</span></label>
                                            <input type="password" id="confirm_password" name="password2" class="form-control" required><span id='message'></span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            </div>
            <script type="text/javascript">
                $('#password, #confirm_password').on('keyup', function() {
                    if ($('#password').val() == $('#confirm_password').val()) {
                        $('#message').html('Matching').css('color', 'green');
                    } else
                        $('#message').html('Not Matching').css('color', 'red');
                });
            </script>