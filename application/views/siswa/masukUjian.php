<script type="text/javascript">
    var d = new Date(<?= json_encode($waktu) ?>);
    var w = new Date();
    var dd = d - w;
    console.log(dd);
    setTimeout(function() {
        SubmitFunction()
    }, dd);

    function SubmitFunction() {
        alert("Waktu Anda Habis");
        //submitted.innerHTML="Time is up!";
        document.getElementById('ujianOnline').submit();
    }

    function Countdown() {
        setInterval(function() {

            var jam = document.getElementById("hours");
            var menit = document.getElementById("minutes");
            var detik = document.getElementById("seconds");

            var deadline = d; //new Date(d);
            var waktu = new Date();
            var distance = deadline - waktu;
            //console.log(distance);
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // var minutes = parseInt(distance / 60, 10);
            // var seconds = parseInt(distance % 60, 10);

            // minutes = minutes < 10 ? "0" + minutes : minutes;
            // seconds = seconds < 10 ? "0" + seconds : seconds;
            jam.innerHTML = hours;
            menit.innerHTML = minutes;
            detik.innerHTML = seconds;

        }, 1000);
    }
    Countdown();
    //var div = document.getElementById('');
</script>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <!-- MAP DATA-->
            <div class="map-data m-b-40">
                <h3 class="title-3 m-b-30">Challenge</h3>
                <!--                <p><?php //echo "<pre>"; print_r($ujian); echo "</pre>";
                                        ?></p>-->
                <div class="mx-auto d-block">
                    <div class="container-fluid">
                        <div class="card card-body">
                            <div style="border: 1px solid black;background-color: skyblue;color: black;font-weight: bold;"><span>Waktu Anda mengerjakan Challenge </span><span id="hours"></span>:<span id="minutes"></span>:<span id="seconds"></span></div>
                            <form id="ujianOnline" nama="ujianOnline" method="post" action="<?= base_url('siswa/koreksiUjian') ?>/<?= $this->session->userdata('id') ?>/<?= $id_ujian ?>">
                                <?php $no = 1;
                                foreach ($soal_ujian as $key) {
                                    if ($key->tipe == 1) { ?>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label"><?= $no . '. ' . $key->pertanyaan ?></label>
                                            <div class="col-sm-10">
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="A" name="<?= $key->id_soal ?>" value="A">
                                                    <label class="form-check-label" for="A"><?= $key->pg_a ?></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="B" name="<?= $key->id_soal ?>" value="B">
                                                    <label class="form-check-label" for="B"><?= $key->pg_b ?></label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="C" name="<?= $key->id_soal ?>" value="C">
                                                    <label class="form-check-label" for="C"><?= $key->pg_c ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    <? } elseif ($key->tipe == 2) { ?>
                                        <input type="hidden" name="no<?= $no; ?>">
                                        <div class="form-group row">
                                            <label for="iiii" class="col-sm-2 col-form-label"><?= $no . '. ' . $key->pertanyaan ?></label>
                                            <div class="col-sm-10">
                                                <textarea id="iiii" name="<?= $key->id_soal ?>" class="form-control"></textarea>
                                            </div>
                                        </div>
                                <?php }
                                    $no++;
                                } ?>
                                <button class="btn btn-primary btn-block">Kirim</button>
                            </form>
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
    $(document).ready(function() {
        $("#A").click(function() {
            $("#B").attr("checked", false);
            $("#C").attr("checked", false);
            $("#A").attr("checked", true);
        });
        $("#B").click(function() {
            $("#A").attr("checked", false);
            $("#C").attr("checked", false);
            $("#B").attr("checked", true);
        });
        $("#C").click(function() {
            $("#A").attr("checked", false);
            $("#C").attr("checked", true);
            $("#B").attr("checked", false);
        });
    });
</script>