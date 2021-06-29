            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"> 
                        <div class="row">
                            <div class="col-lg">
                                <h2 class="title-1 m-b-25">Data Pengajar</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>TTL</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($pengajar as $key) { ?>
                                            <tr>
                                                <td><?=$key->nip?></td>
                                                <td><?=$key->nama?></td>
                                                <td><?=$key->jenis_kelamin?></td>
                                                <td><?=$key->tempat_lahir;?>, <?=date('d-m-Y',strtotime($key->tgl_lahir));?></td>
                                                <td><?=$key->alamat;?></td>
                                                <td>
                                                    <?php
                                                    if ($key->status_id==0) {
                                                        echo "Pending";
                                                    }elseif ($key->status_id==1) {
                                                        echo "Aktif";
                                                    }elseif ($key->status_id==2) {
                                                        echo "Blok";
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
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