            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading"></h4>
                                    <p class="text-center">Pilihlah Salah Satu Mata Pelajaran Yang Akan Anda Ampu</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <!-- DATA TABLE -->

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Terambil</th>
                                                <th>Aksi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($mapel as $i) { ?>
                                                <tr class="tr-shadow">
                                                    <td><?= $i->id ?></td>
                                                    <td>
                                                        <?= $i->nama ?>
                                                    </td>
                                                    <td class="desc"><?php
                                                                        if ($i->id == $pengajar[0]->id_mapel) { ?>
                                                            <i class="fa fa-check"></i>
                                                        <?php } else { ?>
                                                            <i class="fa fa-minus"></i>

                                                        <?php } ?>
                                                    </td>

                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?= base_url('Pengajar/pickMapel/') . $i->id ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="fas fa-book-medical"></i>
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