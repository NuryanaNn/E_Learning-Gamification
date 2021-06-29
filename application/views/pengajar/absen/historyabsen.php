            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">History Absen</h3>
                                <div class="table-data__tool">
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Jam Mulai </th>
                                                <th>Jam Selesai</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($absen as $i) { ?>
                                                <tr class="tr-shadow">
                                                    <td>
                                                        <?= $i->tanggal ?>
                                                    </td>
                                                    <td class="desc"><?= $i->jam_mulai ?></td>
                                                    <td class="desc"><?= $i->jam_selesai ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a href="<?= base_url('Pengajar/absensi/'). $i->id?>"class="item" data-toggle="tooltip" data-placement="top" title="Open">
                                                                <i class="zmdi zmdi-open-in-new"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="spacer"></tr>
                                            <?php }?>
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