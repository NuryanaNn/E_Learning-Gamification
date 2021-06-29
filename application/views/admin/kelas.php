<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      <!-- MAP DATA-->
      <div class="map-data m-b-40">
        <h3 class="title-3 m-b-30">Manajemen Kelas</h3>
        <div class="mx-auto d-block">
          <div class="container-fluid">
            <div class="card card-body">
              <h5>Tambah Kelas</h5>
              <form action="<?= base_url() ?>admin/tambahKelas" enctype="multipart/form-data" method="post">
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Kelas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Kelas" name="namaKelas" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
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
              <tbody>
                <?php foreach ($data as $key) { ?>
                  <tr>
                    <td width="80%"><?= $key->nama ?></td>
                    <td><a href="<?= base_url() ?>admin/editKelas/<?= $key->id ?>" class="btn btn-primary btn-circle"><i class="fas fa-info-circle"></i></a></td>
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
  $(document).ready(function() {
    $("#laki").click(function() {
      $("#perempuan").attr("checked", false);
      $("#laki").attr("checked", true);

    });
    $("#perempuan").click(function() {
      $("#laki").attr("checked", false);
      $("#perempuan").attr("checked", true);
    });
  });
</script>