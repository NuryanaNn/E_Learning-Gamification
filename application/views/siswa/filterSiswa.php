<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Filter Siswa</h3>
                <div class="mx-auto d-block">
                    <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter Pencarian
                    </button>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">
                        <form action="<?=base_url()?>siswa/filterSiswa" enctype="multipart/form-data" method="post">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="NIS" name="nis">
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Masuk</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputEmail3" placeholder="Tahun Masuk" name="tahunMasuk">
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
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="agama1" value="Islam" name="agama[]">
                                  <label class="form-check-label" for="agama1">Islam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="agama2" value="Kristen" name="agama[]">
                                  <label class="form-check-label" for="agama2">Kristen</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="agama3" value="Katolik" name="agama[]">
                                  <label class="form-check-label" for="agama3">Katolik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="agama4" value="Hindu" name="agama[]">
                                  <label class="form-check-label" for="agama4">Hindu</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="agama5" value="Budha" name="agama[]">
                                  <label class="form-check-label" for="agama5">Budha</label>
                                </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Kelas X - A" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox1">Kelas X - A</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Kelas X - B" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox2">Kelas X - B</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Kelas X - C" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox3">Kelas X - C</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Kelas X - D" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox4">Kelas X - D</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Kelas XI - IPA 1" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox5">Kelas XI - IPA 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Kelas XI - IPA 2" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox6">Kelas XI - IPA 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Kelas XI - IPS 1" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox7">Kelas XI - IPS 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Kelas XI - IPS 2" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox8">Kelas XI - IPS 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Kelas XII - IPA 1" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox9">Kelas XII - IPA 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Kelas XII - IPA 2" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox10">Kelas XII - IPA 2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Kelas XII - IPS 1" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox11">Kelas XII - IPS 1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Kelas XII - IPS 2" name="kelas[]">
                                  <label class="form-check-label" for="inlineCheckbox12">Kelas XII - IPS 2</label>
                                </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-sm-2">Status</div>
                            <div class="col-sm-10">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1" name="statusSiswa" value="3">
                                <label class="form-check-label" for="gridCheck1">
                                  Alumni
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
                                    <th>NIS</th>
                                    <th>Informasi Siswa</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $key) { ?>
                            <tr>
                                <td><?=$key->nis?></td>
                                <td><b><?=$key->nama_siswa?></b><br><?=$key->nama_kelas?>, <?=$key->jenis_kelamin?>, <?=$key->agama?></td>
                                <td><a href="<?=base_url()?>siswa/detailFilterSiswa/<?=$key->siswa_id?>" class="btn btn-primary">Detail</a></td>
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