<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Detail Siswa</h3>
                <span class="span7">Profil Siswa</span>
                <div class="mx-auto d-block">
                <div class="table-responsive table--no-card m-b-40">
                    <table class="table">
                    <?php foreach ($siswa as $key) {?>
                        <thead>
                            <tr>
                                <th width="20%">NIS</th>
                                <td><?=$key->nis?></td>
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
                             	<th>Agama</th>
                                <td><?=$key->agama?></td>
                            </tr>
                            <tr>
                                <th>TTL</th>
                                <td colspan="2"><?=$key->tempat_lahir?>, <?=date('d-m-Y',strtotime($key->nis))?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                            	<td colspan="2"><?=$key->alamat?></td>
							</tr>
                            <tr>
                                <th>Tahun Masuk</th>
                                <td colspan="2"><?=$key->tahun_masuk?></td>
                            </tr>
                            <tr>
                                <th>Status Siswa</th>
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
            	<span class="span7">Riwayat Kelas</span>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Kelas</th>
                                    <td>Status</td>
                            	</tr>
                            	<?php foreach ($kelas as $key) {?>
                                <tr>
                                   	<td><?=$key->nama?></td>
                                    <td>
                                		<?php if ($key->aktif == 1) {?>
                                        <i class="icon icon-ok">Aktif</i>
                                        <?php }?>
                                    </td>
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