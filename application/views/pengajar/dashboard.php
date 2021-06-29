<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading"></h4>
                        <p class="text-center">Selamat Datang <strong><?php echo $this->session->userdata('nama'); ?></strong> Ayo Berikan Materi Dan Tugas Untuk Siswa Dan Siswi Agar Mereka Mendapat Skor Terbaik</p>
                    </div>
                    <button type="button" class="btn btn-sm btn-info  " data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-cogs"></i> Informasi Pemberian Badge
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i> Informasi Pemberian Badges</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/king.png" style="height: 50px; width:50px;">Number One <br> Badge yang didapat setelah mampu menjadi nomor 1 dikelas</p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/queen.png" style="height: 50px; width:50px;">Number Two <br> Badge yang didapat setelah mampu menjadi nomor 2 dikelas</p>
                            </p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/jack.png" style="height: 50px; width:50px;">Number Three <br> Badge yang didapat setelah mampu menjadi nomor 3 dikelas</p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/kinggame.png" style="height: 50px; width:50px;">The King <br> Badge yang didapat setelah Menyelesaikan Soal Tersuit</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/star.png" style="height: 50px; width:50px;">Star Rising <br> Badge yang didapat setelah Mencapai Level 4</p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/time.png" style="height: 50px; width:50px;">Fastest <br> Badge yang didapat setelah mengirimkan tugas tercepat</p>
                            </p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/good.png" style="height: 50px; width:50px;">Good Game <br> Badge yang didapat setelah mampu mendapat nilai tebaik</p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/punish.png" style="height: 50px; width:50px;">King One <br> Badge yang didapat jika mendapatkan nilai terendah</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/diamond.png" style="height: 50px; width:50px;">Diamond Grade <br> Badge yang didapat setelah Mendapat Nilai 90 Sebanyak 5 Kali</p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/certificate.png" style="height: 50px; width:50px;">Certificator <br> Badge yang didapat setelah mengerjakan challenge tersulit</p>
                            </p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/idea.png" style="height: 50px; width:50px;">Good Idea <br> Badge yang didapat setelah mampu menyusul peringkat teman</p>
                        </div>

                        <div class="col-md-3 text-info text-center">
                            <p class="small text-info"><img class="img-profile rounded-circle" src="assets/images/badge/timing.png" style="height: 50px; width:50px;">Perfect Time <br> Badge yang didapat jika tidak pernah mengirimkan tugas melebihi jam 10 malam </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END MAIN CONTENT-->
    <!-- END PAGE CONTAINER-->
</div>