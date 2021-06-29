<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
           
           <!-- Atur Mata Pelajaran -->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Atur Mata Pelajaran Kelas</h3>
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                      <div class="card card-body">
                        <form action="<?=base_url()?>admin/simpanAturMapel/<?=$idkelas?>" enctype="multipart/form-data" method="post">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kelas</label>
                            <div class="col-sm-10">
                              <?php $no=1; foreach ($mapel as $key) {?>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="inlineCheckbox<?=$no?>" value="<?=$key->id?>" name="mapel[]">
                                  <label class="form-check-label" for="inlineCheckbox<?=$no?>"><?=$key->nama?></label>
                                </div><br>
                                <?php $no++;} ?>
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
            </div>
            <!-- Atur Mata Pelajaran -->
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