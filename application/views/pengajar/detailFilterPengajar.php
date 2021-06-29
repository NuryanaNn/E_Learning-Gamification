<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Detail Pengajar</h3>
                <span class="span7">Profil Pengajar</span>
                <div class="mx-auto d-block">
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table">
                    <?php foreach ($pengajar as $key) {?>
                        <thead>
                            <tr>
                                <th width="20%">NIP</th>
                                <td><?=$key->nip?></td>
                                <td rowspan="4" style="border: 1px solid black"></td>
                            </tr>
                            <tr>
                            	<th>Nama</th>
                                <td><?=$key->nama?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?=$key->jenis_kelamin?></td>
                            </tr>
                            <tr>
                                <th>TTL</th>
                                <td colspan="2"><?=$key->tempat_lahir?>, <?=date('d-m-Y',strtotime($key->tempat_lahir))?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                            	<td colspan="2"><?=$key->alamat?></td>
							</tr>
                            <tr>
                                <th>Status Pengajar</th>
                                <td colspan="2">
                                    <?php
                                   	if ($key->status_id==0) {
                                        echo "Pending";
                                    }elseif ($key->status_id==1) {
                                        echo "Aktif";
                                    }elseif ($key->status_id==2) {
                                        echo "Blok";
                                    }elseif ($key->status_id==3) {
                                        echo "Alumni";
                                    }elseif ($key->status_id==4) {
                                        echo "Deleted";
                                    } ?>
                                </td>
                            </tr>
                        </thead>
                        <?php }?>
                    </table>
                </div>	
                </div>
            </div>
            <div class="map-data m-b-40">
            	<span class="span7">Jadwal Mengajar</span>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Hari</th>
                                    <td>Mata Pelajaran</td>
                                    <td>Jam</td>
                            	</tr>
                            	<?php foreach ($jadwal as $key) { ?>
                                <tr>
                                   	<td><?php 
                                        if ($key->hari_id == 1) {
                                            echo "Senin";
                                        }elseif ($key->hari_id == 2) {
                                            echo "Selasa";
                                        }elseif ($key->hari_id == 3) {
                                            echo "Rabu";
                                        }elseif ($key->hari_id == 4) {
                                            echo "Kamis";
                                        }elseif ($key->hari_id == 5) {
                                            echo "Jumat";
                                        }?>
                                    </td>
                                    <td><?=$key->pelajaran?></td>
                                    <td><?=$key->jam_mulai?> - <?=$key->jam_selesai?></td>
                                </tr>
                                <?php }?>
                            </thead>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#laki").click(function(){
        $("#perempuan").attr("checked", false);
        $("#laki").attr("checked", true);

    });
    $("#perempuan").click(function(){         
        $("#laki").attr("checked", false);
        $("#perempuan").attr("checked", true);
    });
});
</script>