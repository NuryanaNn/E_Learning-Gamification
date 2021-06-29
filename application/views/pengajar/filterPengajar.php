<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Filter Pengajar</h3>
                <div class="mx-auto d-block">
                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter Pencarian
                    </button>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        <form action="<?=base_url()?>pengajar/filterPengajar" enctype="multipart/form-data" method="post">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="NIP" name="nip">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                              <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="laki" value="Laki-Laki" name="jeniskelamin[]">
                              <label class="form-check-label" for="laki">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="perempuan" value="Perempuan" name="jeniskelamin[]">
                              <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" placeholder="Tempat Lahir" name="tempatLahir">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                              <div class="form-row">
                                <div class="form-group col-sm-2">
                                  <label for="selecttgl">Tanggal</label>
                                  <select id="selecttgl" class="form-control" name="tanggal">
                                    <?php for ($i=1; $i <=31 ; $i++) { ?>
                                      <option value="<?=$i?>"><?=$i?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="form-group col-sm-2">
                                  <label for="selectbulan">Bulan</label>
                                  <select id="selebu'" class="form-control" name="bulan">
                                    <?php for ($i=1; $i <=12 ; $i++) { ?>
                                      <option value="<?=$i?>"><?=$i?></option>
                                    <?php }?>
                                  </select>
                                </div>
                                <div class="form-group col-md-2">
                                  <label for="inputtahun">Tahun</label>
                                  <input type="text" class="form-control" id="inputtahun" placeholder="Tahun" name="tahun">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat" name="alamat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-2">Opsi</div>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="opsi" value="1">
                                <label class="form-check-label" for="gridCheck1">
                                  Administrator
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" name="submit" class="btn btn-primary">Filter</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
                <br>
                <div class="filters">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Informasi Pengajar</th>
                                    <th>Administrator</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key) { ?>
                            <tr>
                                <td><?=$key->id?></td>
                                <td><b><?=$key->nama?></b><font style="font-size: 11pt;color: gray">(<?=$key->nip?>)</font><br>
                                  Alamat : <?=$key->alamat?></td>
                                <td><?php if ($key->is_admin == 1) {
                                      echo "Admin";
                                    } ?> 
                                </td>
                                <td><a href="<?=base_url()?>pengajar/detailFilterPengajar/<?=$key->id?>" class="btn btn-primary">Detail</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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