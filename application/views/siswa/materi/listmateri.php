            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Materi <?= $mapel[0]->nama ?></h3>
                                <div class="table-data__tool">
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Tanggal</th>
                                                <th>Pengajar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($materi as $i) { ?>
                                                <tr class="tr-shadow">
                                                    <td><?= $no++ ?></td>
                                                    <td>
                                                        <?= $i->judul ?>
                                                    </td>
                                                    <td class="desc"><?= $i->tgl_posting ?></td>
                                                    <td class="desc"><?= $i->nama ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?= base_url('siswa/detailMateri/') . $i->id ?>" class="item" data-toggle="tooltip" data-placement="top" title="Open">
                                                                <i class="zmdi zmdi-open-in-new"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="spacer"></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            </div>