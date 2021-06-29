            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Tugas</h3>
                                <div class="table-data__tool">
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id Siswa</th>
                                                <th>Nama</th>
                                                <th>File</th>
                                                <th>Nilai</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($upload as $i) { ?>
                                                <tr class="tr-shadow">
                                                    <td class="desc">              
                                                        <?= $i->siswa_id ?>
                                                    </td>
                                                    <td class="desc">
                                                        <?= $i->nama ?>
                                                    </td>
                                                    <td class="desc"><a href="<?= base_url('pengajar/downloadTugas/'.$i->file)?>"><?= $i->file ?></a></td>
                                                    <td class="desc"><?= $i->nilai ?></td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <form method="post" action="<?= base_url('pengajar/updateNilai/'.$i->id.'/'.$idtugas.'/'.$idkelas.'/'.$idmapel)?>">
                                                                <div class="row form-group">
                                                                    <div class="col-4">
                                                                        <input type="number" class="form-control" name="nilai">
                                                                    </div>
                                                                    <div class="col-3">
                                                                        <input type="submit" value="Submit" class="btn btn-secondary btn-sm">
                                                                    </div>
                                                                </div>
                                                            </form>
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