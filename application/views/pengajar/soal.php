<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Soal Ujian</h3>
<!--                <p><?php //echo "<pre>"; print_r($ujian); echo "</pre>";?></p>-->
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                      <div class="card card-body">
                            <div class="btn-group btn-block" role="group" aria-label="Basic example">
                                    <a href="#modalPG"  type="button" data-toggle="modal" class="btn btn-primary ">Buat Soal PG</a>
                                    <a href="#modalEssay"  type="button" data-toggle="modal" class="btn btn-primary ">Buat Soal Essay</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Pertanyaan</th>
                                        <th>Tipe Soal</th>
                                        <th>Pilihan A</th>
                                        <th>Pilihan B</th>
                                        <th>Pilihan C</th>
                                        <th>Jawaban PG</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($soal as $k) {
                                     ?>
                                    <tr>
                                        <td><?=$k->pertanyaan?></td>
                                        <td><?php if ($k->tipe == 1) {
                                            echo "Pilihan Ganda";
                                        }elseif ($k->tipe == 2) {
                                            echo "Essay";
                                        } ?></td>
                                        <td><?=$k->pg_a?></td>
                                        <td><?=$k->pg_b?></td>
                                        <td><?=$k->pg_c?></td>
                                        <td><?=$k->jawaban_pg?></td>
                                        <td>
                                            <a href="<?=base_url()?>pengajar/hapusSoal/<?=$k->id_soal?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
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
                <form action="<?=base_url()?>pengajar/simpanSoal/1" method="post" enctype="multipart/form-data">
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
                <form action="<?=base_url()?>pengajar/simpanSoal/2" method="post" enctype="multipart/form-data">
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