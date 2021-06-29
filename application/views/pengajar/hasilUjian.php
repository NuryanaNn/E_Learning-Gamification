<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Ujian</h3>
<!--                <p><?php //echo "<pre>"; print_r($ujian); echo "</pre>";?></p>-->
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                      <div class="card card-body">
                        <p class="text-small">Aturan Penilaian Essay
                            <ul>
                                <li>1 Soal Essay memiliki point 0-3</li>
                                <li>Yang dimasukkan di nilai essay merupakan total point dari semua soal essay</li>
                            </ul>
                        </p>
                            <a href="#modalUjian"  type="button" data-toggle="modal" class="btn btn-primary pull-right">Buat Ujian</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Nama Ujian</th>
                                        <th>Tanggal</th>
                                        <th>Nama Siswa</th>
                                        <th>Jawaban</th>
                                        <th>Nilai PG</th>
                                        <th>Nilai Essay</th>
                                        <th>Nilai Total</th>
                                        <th>Jumlah Soal</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($jawaban as $k) {
                                     ?>
                                    <tr>
                                        <td><?php foreach ($ujian as $key) {
                                                if ($key->id == $k->id_ujian) {
                                                    echo $key->judul;
                                                }
                                            }?>
                                        </td>
                                        <td><?=$k->tgl?></td>
                                        <td><?php foreach ($siswa as $key) {
                                                if ($key->id == $k->id_siswa) {
                                                    echo $key->nama;
                                                }
                                            }?></td>
                                        <td><?=$k->jawaban?></td>
                                        <td><?=$k->nilai_pg?></td>
                                        <td><?php
                                        if ($k->nilai_essay=='') {
                                            ?>
                                            <form action="<?=base_url()?>pengajar/nilaiEssay/<?=$k->id_jawaban?>/<?=$id_ujian?>" method="post">
                                                <input type="number" name="nilai_essay" placeholder="total point" style="border: 1px solid black;width: 100px">
                                                <input type="hidden" name="nilai_pg" value="<?=$k->nilai_pg?>">
                                                <input type="hidden" name="jumlah_soal" value="<?=$k->jumlah_soal?>">
                                                <button type="Submit" class="btn btn-primary btn-sm">Submit</button>
                                            </form>
                                            <?php
                                        }else{
                                            echo $k->nilai_essay;
                                        }
                                        ?></td>
                                        <td><?=round($k->nilai_total,2)?></td>
                                        <td><?=$k->jumlah_soal?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                      </div>
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
