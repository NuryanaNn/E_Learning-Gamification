            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="map-data m-b-40">
                            <h2 class="title-1 m-b-25"><a href="<?= base_url() ?>admin/dataPengajar/1">Data Pengajar</a> / Tambah Pengajar</h2>
                            <hr>
                            <div class="row">
                                <div class="col-lg-9">
                                    <form action="<?= base_url() ?>admin/simpanPengajar" method="post" accept-charset="utf-8" class="form-horizontal row-fluid" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>NIP <span class="text-error">*</span></label>
                                            <input type="text" id="nip" name="nip" class="form-control" required>
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
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username <span class="text-error">*</span></label>
                                            <input type="text" id="username" name="username" class="form-control" required placeholder="example@example.sch.id">
                                        </div>
                                        <div class="form-group">
                                            <label>Password <span class="text-error">*</span></label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi Password <span class="text-error">*</span></label>
                                            <input type="password" name="password2" class="form-control" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">Opsi</div>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="opsi" value="1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Administrator
                                                    </label>
                                                </div>
                                            </div>
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