<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Challenge</h3>
<!--                <p><?php //echo "<pre>"; print_r($ujian); echo "</pre>";?></p>-->
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                      <div class="card card-body">
                            <a href="#modalUjian"  type="button" data-toggle="modal" class="btn btn-primary pull-right">Buat Challenge</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>Nama Challenge</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Waktu Challenge</th>
                                        <th>Tanggal Berakhir</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($ujian as $k) {
                                     ?>
                                    <tr>
                                        <td><?=$k->judul?></td>
                                        <td><?=$k->kelas?> || <?=$k->mapel?></td>
                                        <td><?=$k->waktu?></td>
                                        <td><?=$k->tgl_expired?></td>
                                        <td>
                                            <a href="<?=base_url()?>pengajar/hasilUjian/<?=$k->id?>" class="btn btn-primary btn-sm">Hasil</a>
                                            <a href="<?=base_url()?>pengajar/detailUjian/<?=$k->id?>" class="btn btn-primary btn-sm">Detail</a>
                                            <a href="<?=base_url()?>pengajar/hapusUjian/<?=$k->id?>" class="btn btn-danger btn-sm">Hapus</a>
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

        <div class="modal fade" id="modalUjian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Challenge</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <div class="modal-body">
                <form action="<?=base_url()?>pengajar/buatUjian/" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >Judul <span class="text-error">*</span></label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Waktu <span class="text-error">*menit</span></label>
                        <input type="number" name="waktu" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Mata Pelajaran <span class="text-error"></span></label>
                        <select class="form-control" required name="mapelKelas">
                        <?php foreach ($mapel as $key) {?>
                            <option value="<?=$key->mapel_kelas_id;?>"><?=$key->kelas?> - <?=$key->mapel?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="form-group">
                        <label >Tanggal Berakhir <span class="text-error">*</span></label>
                        <input type="date" name="tgl" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label >Jam Berakhir <span class="text-error">*</span></label>
                        <input type="time" name="jam" class="form-control" required>
                    </div>
                <button type="submit" class="btn btn-primary">Buat</button>
                </form>
            </div>
            </div>
          </div>
        </div>