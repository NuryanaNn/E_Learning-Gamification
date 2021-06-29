            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                        <div class="map-data m-b-40">
                        <div class="row">
                            <div class="col-lg">
                                <h2 class="title-1 m-b-25">Absen Siswa</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Id Siswa</th>
                                                <th>NIS</th>
                                                <th>Nama Siswa</th>
                                                <th>Kehadiran</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($absen as $key) { ?>
                                            <tr>
                                                <td>
                                                    <?= $key->siswa_id?>
                                                </td>
                                                <td>
                                                    <?= $key->nis?>
                                                </td>
                                                <td>
                                                    <?= $key->nama?>
                                                </td>
                                                <td>
                                                    <?php if ($key->status == 0) {
                                                        echo "alpha";
                                                    } else if ($key->status == 1) {
                                                        echo "Hadir";
                                                    } else if ($key->status == 2){
                                                        echo "Izin";
                                                    } else if ($key->status == 3){
                                                        echo "Sakit";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <a type="button" class="btn btn-danger btn-sm" href="<?=base_url()?>pengajar/updateAbsenSiswa/<?=$key->id;?>/<?=$key->absen_id?>/0">Alpha</a>
                                                    <a type="button" class="btn btn-success btn-sm" href="<?=base_url()?>pengajar/updateAbsenSiswa/<?=$key->id;?>/<?=$key->absen_id?>/1">Hadir</a>
                                                    <a type="button" class="btn btn-secondary btn-sm" href="<?=base_url()?>pengajar/updateAbsenSiswa/<?=$key->id;?>/<?=$key->absen_id?>/2">Izin</a>
                                                    <a type="button" class="btn btn-warning btn-sm" href="<?=base_url()?>pengajar/updateAbsenSiswa/<?=$key->id;?>/<?=$key->absen_id?>/3">Sakit</a>
                                                </td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>