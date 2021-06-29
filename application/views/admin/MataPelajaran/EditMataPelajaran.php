            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                         <h3 class="title-5 m-b-35">Edit Mata Pelajaran</h3>
                         <?php echo $this->session->flashdata('alert');?>

                        <form action="<?= base_url('admin/prosesEditMapel')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Edit Mata Pelajaran</strong>
                                </div>
                                <div class="card-body card-block">
                                        <input type="hidden" id="text-input" name="id" placeholder="Mata Pelajaran" class="form-control" value="<?= $mapel[0]->id?>">
                                        
                                        <div class="row form-group">
                                            
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Mata Pelajaran</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="text-input" name="mapel" placeholder="Mata Pelajaran" class="form-control" value="<?= $mapel[0]->nama?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="textarea-input" class=" form-control-label">Deskripsi</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <textarea name="deskripsi" id="desk" rows="9" placeholder="Deskripsi Mata Pelajaran..." class="form-control"><?= $mapel[0]->info?></textarea>
                                            </div>
                                        </div>
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">aktif</label>
                                        </div>
                                        <div class="col col-md-3">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-checkbox1" class="form-check-label ">
                                                    <input <?php if($mapel[0]->aktif == 1){ ?> checked <?php }?>type="checkbox" unche id="aktif" name="aktif" value="1" class="form-check-input">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </div>        
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                var aktif = document.getElementById('aktif')
                $("#aktif").click(function(){
                    if(aktif.checked){
                        $("#aktif").attr("checked", false);
                    }else{
                        $("#aktif").attr("checked", true);
                    }
                });
            });
            </script>
        </div>