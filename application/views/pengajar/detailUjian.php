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
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                      <div class="card card-body">
                            <a href="#modalUjian"  type="button" data-toggle="modal" class="btn btn-primary pull-right">Edit Ujian</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <?php foreach ($ujian as $k) {
                                     ?>
                                    <tr>
                                        <td>Nama Ujian</td>
                                        <td><?=$k->judul?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ujian</td>
                                        <td><?=$k->kelas?> || <?=$k->mapel?></td>
                                        </tr>
                                    <tr>
                                        <td>Nama Ujian</td>
                                        <td><?=$k->waktu?></td>
                                        </tr>
                                    <tr>
                                        <td>Nama Ujian</td>
                                        <td><?=$k->tgl_expired?></td>
                                        </tr>
                                    <tr>
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
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Soal</h3>
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                        <a href="#modalPG"  type="button" data-toggle="modal" class="btn btn-primary ">Buat Soal PG</a>
                        <a href="#modalEssay"  type="button" data-toggle="modal" class="btn btn-primary ">Buat Soal Essay</a>
                </div><!--<button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Atur Soal
                    </button><br>
                <div class="collapse" id="collapseExample">
                <form action="<?=base_url()?>pengajar/tambahSoalUjian/<?=$id_soalnya?>" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-10">
                              <?php $no=1; foreach ($soal as $key) {?>
                                <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" id="inlineCheckbox<?=$no?>" value="<?=$key->id_soal?>" name="pertanyaan[]">
                                          <label class="form-check-label" for="inlineCheckbox<?=$no?>"><?=$key->pertanyaan?></label>
                                </div><hr>
                                <?php $no++;} ?>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>-->
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <h5>Daftar Soal Ujian</h5>
                            <table class="table">
                                <?php foreach ($soal_ujian as $key): ?>
                                    <tr>
                                        <td><?=$key->pertanyaan?></td>
                                        <td><?php if ($key->tipe == 1) {
                                            echo "Pilihan Ganda";
                                        }elseif ($key->tipe == 2) {
                                            echo "Essay";
                                        } ?></td>
                                        <td><?=$key->pg_a?><br><?=$key->pg_b?><br><?=$key->pg_c?></td>
                                        <td><?=$key->jawaban_pg?></td>
                                        <td><a class="btn btn-danger btn-sm" href="<?=base_url('pengajar/hapusSoalUjian/')?><?=$key->id_ujian_soal?>/<?=$key->id_ujian?>">Hapus</a></td>
                                    </tr>
                                <?php endforeach ?>
                            </table>  
                        </div>
                    </div>
                </div>
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

        <div class="modal fade" id="modalUjian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Ujian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                    <?php foreach ($ujian as $k) {?>
                <form action="<?=base_url()?>pengajar/updateUjian/<?=$k->id?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Judul <span class="text-error">*</span></label>
                        <input type="text" name="nama" class="form-control" value="<?=$k->judul?>" required>
                    </div>
                    <div class="form-group">
                        <label >Waktu <span class="text-error">*menit</span></label>
                        <input type="number" name="waktu" class="form-control" value="<?=$k->waktu?>" required>
                    </div>
                    <div class="form-group">
                        <label >Mata Pelajaran <span class="text-error"></span></label>
                        <select class="form-control" required name="mapelKelas">
                        <?php foreach ($mapel as $key) {?>
                            <option value="<?=$key->mapel_kelas_id;?>" <?php if ($key->mapel_kelas_id==$k->mapel_kelas_id): ?>
                                selected
                            <?php endif ?>><?=$key->kelas?> - <?=$key->mapel?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="form-group">
                        <label >Tanggal Berakhir <span class="text-error">*</span></label>
                        <input type="date" name="tgl" class="form-control" value="<?=$k->tgl_expired?>" required>
                    </div>
                    <div class="form-group">
                        <label >Jam Berakhir <span class="text-error">*</span></label>
                        <input type="time" name="jam" class="form-control" required>
                    </div>
                <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            <?php }?>
            </div>
            </div>
          </div>
        </div>


        <div class="modal fade" id="modalPG" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Ujian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                <form action="<?=base_url()?>pengajar/simpanSoal/1/<?=$id_ujian?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Pertanyaan <span class="text-error">*</span></label>
                        <textarea class="form-control" name="pertanyaan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label >Piilihan A <span class="text-error">*</span></label>
                        <input type="text" name="pg_a" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Piilihan B <span class="text-error">*</span></label>
                        <input type="text" name="pg_b" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Piilihan C <span class="text-error">*</span></label>
                        <input type="text" name="pg_c" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Jawaban Pilihan <span class="text-error"></span></label>
                        <select class="form-control" required name="jawaban_pg">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                    </select>
                    </div>
                <button type="submit" class="btn btn-primary">Buat</button>
                </form>
            </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modalEssay" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Soal Essay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                <form action="<?=base_url()?>pengajar/simpanSoal/2/<?=$id_ujian?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Pertanyaan <span class="text-error">*</span></label>
                        <textarea class="form-control" name="pertanyaan" required></textarea>
                    </div>
                <button type="submit" class="btn btn-primary">Buat</button>
                </form>
            </div>
            </div>
          </div>
        </div>