<?php
$datas = $datas = [
    ['width' => '90px;','h3' => 'Jaga Jarak','p' => 'Jaga jarak minimal 2m dengan orang lain','height' => '90px;','img' =>  '/images/protocol/distance.png ', 'color' => '#F8AF9E', 'padding' => ' 10px;'],
    ['width' => '90px;','h3' => 'Gunakan Handsanitizer','p' => 'Gunakan handsanitizer secara berkala','height' => '90px;','img' =>  '/images/protocol/gel.png ', 'color' => '#F9F498', 'padding' => '15px;'],
    ['width' => '90px;','h3' => 'Cuci Tangan','p' => 'Cuci tangan yang bersih','height' => '90px;','img' =>  '/images/protocol/washing-hands.png ', 'color' => '#D9F7A1', 'padding'=> ' 10px;'],
    ['width' => '90px;','h3' => 'Hindari Kerumunan','p' => 'Hindari kerumunan untuk mencegah penyebaran covid','height' => '90px;','img' =>  '/images/protocol/quarantine.png ', 'color' => '#F8AF9E', 'padding' => ' 10px;'],
    ['width' => '90px;','h3' => 'Gunakan Masker','p' => 'Pakai masker sebelum memasuki gedung acara','height' => '90px;','img' =>  '/images/protocol/mask.png ', 'color' => '#F9F498', 'padding' => '15px;'],
    ['width' => '90px;','h3' => 'Tidak Bersalaman','p' => 'Diusahakan untuk tidak bersalaman','height' => '90px;','img' =>  '/images/protocol/shaking-hands.png ', 'color' => '#D9F7A1', 'padding'=> ' 10px;']
];
$files = $files = [
    ['width' => '90px;','h3' => 'Makan Minum','p' => 'Mohon memperhatikan adab makan dan minum (duduk, membaca bismillah, tidak mencela makanan dan tidak mubazir)','height' => '90px;','img' =>  '/images/protocol/eating.png ', 'color' => '#F8AF9E', 'padding' => ' 10px;'],
    ['width' => '90px;','h3' => 'Tidak Bercampur Baur','p' => 'Mohon untuk tidak bercampur baur dan tidak bersalaman antara tamu laki-laki dan perempuan termasuk saat berfoto (kecuali dengan mahram)','height' => '90px;','img' =>  '/images/protocol/no-shaking-hands.png ', 'color' => '#F9F498', 'padding' => '15px;'],
    ['width' => '90px;','h3' => 'Sholat','p' => 'Memperhatikan waktu shalat wajib dan tidak meninggalkannya','height' => '90px;','img' =>  '/images/protocol/rug.png ', 'color' => '#D9F7A1', 'padding'=> ' 10px;']
];
?>

@section('title', $post->title)

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Estonia" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet'>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script src="jquery.countdown.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">

    <title>Document</title>
</head>

<body>
    {{-- @foreach ($multiuploads as $multiupload)
        <img src="{{'/images/data-images/'. $multiupload->filename }}" alt="" class="img-responsive" >
    @endforeach --}}
    <div id="float-calender" class="section-one">
        <img src="/images/image(1).png" alt="" class="img-one">
        <img src="/images/image(2).png" alt="" class="img-two">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center ">
                    <h2>The Wedding Of</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2 mt-4 float-heading">
                    <img src="/images/couple.jpg" class="rounded-circle mx-auto d-block couple" alt="100x100" style="width: 30%;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 offset-md-2 d-flex text-center"></div>
                <h1 class="text-center mb-3 mt-3">{{$post->name_groom}} & {{$post->name_bride}}</h1>
                <p class="text-center">Kami berharap Anda menjadi bagian dari hari istimewa kami!</p>
            </div>
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2 ">
                    <div class="main mx-auto d-block mt-5 mb-5">
                        <section>
                            <ul id="countdown" class="justify-content-between d-flex">
                                <li class="hari"><span class="days timenumbers pt-4">00</span>
                                    <p class="timeRefDays timedescription pt-2 pb-2">days</p>
                                </li>
                                <li><span class="hours timenumbers  pt-4">00</span>
                                    <p class="timeRefHours timedescription pt-2 pb-2">hours</p>
                                </li>
                                <li><span class="minutes timenumbers pt-4">00</span>
                                    <p class="timeRefMinutes timedescription pt-2 pb-2">minutes</p>
                                </li>
                                <li><span class="seconds timenumbers yellow-text pt-4">00</span>
                                    <p class="timeRefSeconds timedescription pt-2 pb-2">seconds</p>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="float-couple" class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center float-couple my-5">
                    <img src="/images/bismillah.svg" alt="">
                    <h2 class="mt-3">Assalamu'alaikum Wr. Wb.</h2>
                    <p style="color: darkgoldenrod;">Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta Kerabat sekalian untuk menghadiri acara pernikahan kami:</p>
                </div>
            </div>
            <div class="couple-wrap">
                <div class="couple-half">
                    <div class="groom">
                        <img src="/images/molid-square.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="desc-groom">
                        <h3>Rayhan Yulanda</h3>
                        <p><span style="color: #bf9b73">Putra Keempat dari</span><br>
                            <span class="parents-font">Bapak Samidan Angkasa Wijaya</span>
                            <br>
                            <span class="parents-font">Ibu Sufrida</span>
                        </p>
                    </div>
                </div>
                <div class="couple-half ">
                    <div class="bride">
                        <img src="/images/rehan-square.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="desc-bride">
                        <h3>Ayu Lestari</h3>
                        <p><span style="color: #bf9b73">Putri Keempat dari</span><br>
                            <span class="parents-font">Bapak Samidan Angkasa Wijaya</span>
                            <br>
                            <span class="parents-font">Ibu Sufrida</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="float-event" class="section-three">
        <div class="container">
            <div class="row my-5 d-block ">
                <div class="col-md-8 offset-md-2 mt-5 text-center">
                    <h1 class="mx-auto d-block">Save The Date</h1>
                </div>
            </div>
            <div class="row d-block mb-5">
                <div class="col-md-10 offset-md-1 d-flex justify-content-end">
                    <div class="col-md-6 col-sm-6 col-6 text-center ">
                        <div class="event-wrap animate-box">
                            <h3 style="font-family: 'Oswald', Arial, serif;">Akad Nikah</h3>
                            <div class="event-col">
                                <i class="icon-clock"></i>
                                <span>09:00</span>
                                <span>Selesai</span>
                            </div>
                            <div class="event-col">
                                <i class="icon-calendar"></i>
                                <span>Jumat</span>
                                <span class="tanggal">20 Mei 2022</span>
                            </div>
                            <p style="font-family: 'Courgette', Arial, serif">Alamat : Masjid Keuchik Leumik, Gampong Lamseupeung, Kec. Lueng Bata, Banda Aceh</p>

                            <a href="https://goo.gl/maps/kSZez6MQC8SDNevM7" target="_blank" class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 text-center">
                        <div class="event-wrap animate-box">
                            <h3 style="font-family: 'Oswald', Arial, serif;">Walimatul 'Ursy</h3>
                            <div class="event-col">
                                <i class="icon-clock"></i>
                                <span>11:00</span>
                                <span>Selesai</span>
                            </div>
                            <div class="event-col">
                                <i class="icon-calendar"></i>
                                <span>Sabtu</span>
                                <span class="tanggal">21 Mei 2022</span>
                            </div>
                            <p style="font-family: 'Courgette', Arial, serif">Alamat : Amel Convention Hall, Jl. Prof. Ali Hasyimi, Lamteh, Kec. Ulee Kareng, Banda Aceh</p>

                            <a href="https://goo.gl/maps/c8UZnR3s92rDSDEp8" target="_blank" class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="float-galery" class="section-four">
        <img src="/images/top-2.svg" alt="" class="image-top ">
        <img src="/images/bottom-2.svg" alt="" class="image-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2 text-center mt-5">
                    <h2 class="mt-5">Galeri Foto</h2>
                    <h3 style="color: #bf9b73">Khitbah Day - 07 November 2021</h3>
                </div>
            </div>
            <div class="row row-bottom-padded-md animate-box">
                <div class="col-md-12">
                    <div id="carouselExampleInterval" class="carousel carousel-dark slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                           @php $i = 1; @endphp
                            @foreach ($multiuploads as $multiupload)
                            <div class="carousel-item {{ $i == '1' ? 'active':''}}" data-bs-interval="10000">
                                @php $i++; @endphp
                                <img src="{{'/images/data-images/'. $multiupload->filename }}" class="d-block mx-auto" alt="..." style="width: 50%">
                                    <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="float-ayat" class="section-five">
        <img height="400" width="100%" style="position: absolute; bottom: -175px" src="/images/wave-down.svg">
        <div class="container mt-3 text-center">
            <div class="ayat-content animate-box">
                Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar
                terdapat tanda-tanda bagi kaum yang berfikir.
                <br>
                <b>- Q.S Ar Rum : 21 -</b>
            </div>
        </div>
    </div>
    <div id="float-protocol" class="section-six">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center mt-5">
                    <h2 class="mt-5 protocl-h2">Protokol Kesehatan & Anjuran</h2>
                    <p style="color: #bf9b73">Guna mencegah penyebaran Covid-19, diharapkan bagi tamu undangan untuk mematuhi Protokol Kesehatan di bawah ini :</p>
                </div>
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <?php foreach ($datas as $data){ ?>
                        <div class="col-md-4">
                            <div class="item-protocol mb-4">
                                <div class="icon">
                                    <img src="<?= $data['img'];?>" style="padding:<?= $data['padding'];?>;height:<?= $data['height'];?>;width:<?= $data['width'];?>;" >
                                </div>
                                <div class="description">
                                    <h3 class="text-center mt-3 fw-bold" style="color:black"><?= $data['h3']?></h3>
                                    <p class="text-center" style="font-size: 18px;"><?= $data['p']?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <p style="color: #bf9b73; font-size:18px;" class="text-center">dan mengikuti anjuran di bawah ini :</p>
                    <div class="row mb-5">
                        <?php foreach ($files as $file): ?>
                            <div class="col-md-4">
                                <div class="item-protocol mb-4">
                                    <div class="icon">
                                        <img src="<?= $file['img'];?>" alt="" style="padding:<?= $file['padding'];?>;height:<?= $file['height'];?>;width:<?= $file['width'];?>;">
                                    </div>
                                    <div class="description">
                                    <h3 class="text-center mt-3 fw-bold" style="color:black"><?= $file['h3']?></h3>
                                    <p class="text-center" style="font-size: 18px;"><?= $file['p']?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="float-guest" class="section-seven">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 mt-5">
                    <h2 class="text-center mt-5">Buku Tamu Undangan</h2>
                    <button type="button" class="btn btn-primary mx-auto d-block mb-4" data-bs-toggle="modal" data-bs-target="#modalForm">
                        Kartu Ucapan Online
                    </button>
                <!-- Modal -->
                <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bootstrap 5 Modal Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('greets.store') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" class="form-control"  name="name_url" value="{{$post->name_url}}" hidden/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Dari:</label>
                                        <input type="text" class="form-control" name="from" value="{{ old('from') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kata Untuk Pengantin:</label>
                                        <input type="text" class="form-control" name="type" value="{{ old('type') }}">
                                    </div>
                                    <div class="modal-footer d-block">
                                        <button type="submit" class="btn btn-primary float-end">{{ __('Upload') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    <p class="text-center" style="color:#bf9b73">DOA RESTU ANDA MERUPAKAN KARUNIA YANG SANGAT BERARTI BAGI KAMI.</p>
                </div>
                <div class="col-md-8 offset-md-3 d-flex">
                <div id="carousel">
            <div class="p-wrapper">
                <section class="panel_a">
                    @foreach ($greetings as $greeting)
                    <div class="item-list">
                        <div class="title">
                            <h3>{{$greeting->from}}</h3>
                        </div>
                        <div class="description">
                            <p>{{$greeting->type}}</p>
                        </div>
                    </div>
                    @endforeach
                </section>
            </div> <!-- // .p-wrapper -->
        </div> <!-- // #carousel -->
                </div>
            </div>
        </div>
    </div>
    <div id="float-footer" class="section-eight">
        <img src="/images/image(1).png" alt="" class="img-one">
        <img src="/images/image(2).png" alt="" class="img-two">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 mt-2 mx-auto d-block">
                    <p class="text-center my-5">Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
                    <h3 style="color: #bf9b73" class="text-center">Wassalamu'alaikum Wr. Wb.</h3>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function($) {
            $.fn.countdown = function(options, callback) {
                //custom 'this' selector
                thisEl = $(this);

                // array of custom settings
                var settings = {
                    'date': null,
                    'format': null
                };

                // append the settings array to options
                if (options) {
                    $.extend(settings, options);
                }

                //create the countdown processing function
                function countdown_proc() {
                    var eventDate = Date.parse(settings.date) / 1000;
                    var currentDate = Math.floor($.now() / 1000);

                    if (eventDate <= currentDate) {
                        callback.call(this);
                        clearInterval(interval);
                    }

                    var seconds = eventDate - currentDate;

                    var days = Math.floor(seconds / (60 * 60 * 24));
                    //calculate the number of days

                    seconds -= days * 60 * 60 * 24;
                    //update the seconds variable with number of days removed

                    var hours = Math.floor(seconds / (60 * 60));
                    seconds -= hours * 60 * 60;
                    //update the seconds variable with number of hours removed

                    var minutes = Math.floor(seconds / 60);
                    seconds -= minutes * 60;
                    //update the seconds variable with number of minutes removed

                    //conditional statements
                    if (days == 1) {
                        thisEl.find(".timeRefDays ").text("day ");
                    } else {
                        thisEl.find(".timeRefDays ").text("Hari ");
                    }
                    if (hours == 1) {
                        thisEl.find(".timeRefHours ").text("hour ");
                    } else {
                        thisEl.find(".timeRefHours ").text("Jam ");
                    }
                    if (minutes == 1) {
                        thisEl.find(".timeRefMinutes ").text("minute ");
                    } else {
                        thisEl.find(".timeRefMinutes ").text("Menit ");
                    }
                    if (seconds == 1) {
                        thisEl.find(".timeRefSeconds ").text("second ");
                    } else {
                        thisEl.find(".timeRefSeconds ").text("Detik ");
                    }

                    //logic for the two_digits ON setting
                    if (settings.format == "on ") {
                        days = (String(days).length >= 2) ? days : "0 " + days;
                        hours = (String(hours).length >= 2) ? hours : "0 " + hours;
                        minutes = (String(minutes).length >= 2) ? minutes : "0 " + minutes;
                        seconds = (String(seconds).length >= 2) ? seconds : "0 " + seconds;
                    }

                    //update the countdown's html values.
                    thisEl.find(".days ").text(days);
                    thisEl.find(".hours ").text(hours);
                    thisEl.find(".minutes ").text(minutes);
                    thisEl.find(".seconds ").text(seconds);
                }

                //run the function
                countdown_proc();

                //loop the function
                interval = setInterval(countdown_proc, 1000);
            };

        })(jQuery);



        //Provide the plugin settings
        $("#countdown ").countdown({
                //The countdown end date
                date: "31 Sept 2022 12:00:00 ",

                // on (03:07:52) | off (3:7:52) - two_digits set to ON maintains layout consistency
                format: "on "
            },

            function() {
                // This will run when the countdown ends
                alert("We 're Out Now");
            });


        function setHeights() {
            var windowHeight = $(window).height();
            $('.slide ').height(windowHeight);
        }

        setHeights();

        $(window).resize(function() {
            setHeights();
        });

        function addSticky() {
            $('.slide ').each(function() {
                var scrollerAnchor = $(this).offset().top;
                if (window.scrollY >= scrollerAnchor) {
                    $(this).addClass('fix-it ');
                } else {
                    $(this).removeClass('fix-it ');
                }
            });
        }

        $(window).scroll(function() {
            addSticky();
        });
    </script>
</body>

</html>

