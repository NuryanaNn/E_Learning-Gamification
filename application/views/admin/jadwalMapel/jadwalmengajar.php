            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                        <h3 class="title-5 m-b-35">Jadwal Kelas <?= $kelas[0]->nama?> </h3>
                        <h3 class="title-5 m-b-35">Hari <?= $hari[$day-1]?> </h3>
                        <div class="row">
                            <div class="col-lg">
                                <div class="btn-group btn-group-sm pull-right" role="group" aria-label="Basic example" style="margin-bottom: 10px">
                                    <a href="<?=base_url("Admin/LihatJadwalMapel/1/".$idkelas)?>" class="btn btn-primary">Senin</a>
                                    <a href="<?=base_url("Admin/LihatJadwalMapel/2/".$idkelas)?>" class="btn btn-primary">Selasa</a>
                                    <a href="<?=base_url("Admin/LihatJadwalMapel/3/".$idkelas)?>" class="btn btn-primary">Rabu</a>
                                    <a href="<?=base_url("Admin/LihatJadwalMapel/4/".$idkelas)?>" class="btn btn-primary">Kamis</a>
                                    <a href="<?=base_url("Admin/LihatJadwalMapel/5/".$idkelas)?>" class="btn btn-primary">Jumat</a>
                                    <a href="<?=base_url("Admin/LihatJadwalMapel/5/".$idkelas)?>" class="btn btn-primary">Sabtu</a>
                                </div>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Mata Pelajaran</th>
                                                <th>Pengajar</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($jadwal as $key) { ?>
                                            <tr>
                                                <td><?=$key->mapel?></td>
                                                <td><?=$key->pengajar?></td>
                                                <td><?=$key->jam_mulai?></td>
                                                <td><?=$key->jam_selesai?></td>
                                                <td><a class="btn btn-success" href="<?= base_url('admin/editJamMengajar/'.$idkelas.'/'.$key->mapel_kelas_id.'/'.$key->mapel_id)?>"><i class="fas fa-pencil-alt"></i></a>
                                                <a class="btn btn-danger" href="<?= base_url('admin/hapusJadwalMapel/'.$key->mapel_kelas_id."/".$idkelas)?>"><i class="fas fa-trash"></i></a></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>