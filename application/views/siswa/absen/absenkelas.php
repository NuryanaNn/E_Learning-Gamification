<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Materi Kelas</h3>
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                    <?php foreach ($data as $key) { 
                        if ($key->id == $kelas[0]->id) { ?>                      
                        <div class="card card-body">
                        <h5><?=$key->nama?></h5>
                        <hr>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <?php foreach ($mapel as $k) {
                                        if ($key->id == $k->kelas_id) {?>
                                        <tr>
                                            <td width="80%"><?=$k->nama?></td>
                                            <td><a href="<?=base_url()?>siswa/listAbsen/<?=$k->kelas_id?>/<?= $k->mapel_id?>" class="btn btn-success">Cek Absen</a></td>
                                        </tr>
                                    <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                      </div>
                    <?php } } ?>
                    </div>
                </div>
                <br>
                
            </div>
            <!-- END MAP DATA-->
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