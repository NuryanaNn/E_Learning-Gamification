            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"></h4>
                                    <p>Selamat Datang <strong><?php echo $this->session->userdata('nama'); ?></strong> Di Papan Peringkat, Lihat Skor Anda Dan Teman-Teman Anda, Jadikan Motivasi Untuk Anda!!!</p>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <!-- DataTales Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Peringkat Siswa</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Peringkat</th>
                                                        <th>Nama</th>
                                                        <th>Skor</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Peringkat</th>
                                                        <th>Nama</th>
                                                        <th>Skor</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($leaderboard as $key) : ?>
                                                        <tr>
                                                            <td><?= $no; ?></td>
                                                            <td><?= $key['nama'] ?></td>
                                                            <td><?= $key['score'] ?></td>
                                                        </tr>
                                                </tbody>
                                                <?php $no++; ?>
                                            <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.container-fluid -->
                            </div>
                            <!-- End of Main Content -->


                        </div>
                    </div>
                    <!-- END MAIN CONTENT-->
                    <!-- END PAGE CONTAINER-->
                </div>