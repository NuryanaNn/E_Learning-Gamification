<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30"><a href="<?=base_url()?>siswa/pesan">Pesan</a> / Tambah Pesan</h3>
                <div class="filters">
                    <div class="row">
                        <form method="post" enctype="multipart/form-data" action="<?=base_url()?>siswa/savePesan">
                            <div class="form-group">
                                <label for="ftujuan">Tujuan</label>
                                <select name="tujuan" class="form-control" id="ftujuan">
                                    <?php foreach ($tujuan as $key) {?>
                                        <option value="<?=$key->id;?>"><?=$key->username?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="fisi">Pesan</label><br>
                                <textarea name="isiPesan" id="fisi" style="border: 1px solid gray;border-radius: 5px" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="map-wrap m-t-45 m-b-20">
                    <div id="vmap" style="height: 284px;"></div>
                </div>
            </div>
            <!-- END MAP DATA-->
        </div>
    </div>
</div>