            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-lg">
                                <h3><?= $hari[$day-1]?></h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                        <a href= "<?= base_url('Admin/ambilMapel')?>"class="btn btn-primary">
                                            <i class="fas fa-plus-circle"></i> Ambil mata Pelajaran
                                        </a>
                                    </div>
                                </div>
                                <div class="btn-group btn-group-sm pull-right" role="group" aria-label="Basic example" style="margin-bottom: 10px">
                                    <a href="<?=base_url()?>Admin/jadwalMengajar/1" class="btn btn-primary">Senin</a>
                                    <a href="<?=base_url()?>Admin/jadwalMengajar/2" class="btn btn-primary">Selasa</a>
                                    <a href="<?=base_url()?>Admin/jadwalMengajar/3" class="btn btn-primary">Rabu</a>
                                    <a href="<?=base_url()?>Admin/jadwalMengajar/4" class="btn btn-primary">Kamis</a>
                                    <a href="<?=base_url()?>Admin/jadwalMengajar/5" class="btn btn-primary">Jumat</a>
                                    <a href="<?=base_url()?>Admin/jadwalMengajar/5" class="btn btn-primary">Sabtu</a>
                                </div>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Mata Pelajaran</th>
                                                <th>Pengajar</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Berakhir</th>
                                                <th>Kelas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($jadwal as $key) { ?>
                                            <tr>
                                                <td><?=$key->mapel?></td>
                                                <td><?=$key->pengajar?></td>
                                                <td><?=$key->jam_mulai?></td>
                                                <td><?=$key->jam_selesai?></td>
                                                <td><?=$key->nama_kelas?></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
            
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>