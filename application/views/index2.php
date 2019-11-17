<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- font awesome -->
        <link rel="stylesheet" href="<?= base_url('asset/css/all.css') ?>">

        <!-- swiper -->
        <link rel="stylesheet" href="<?= base_url('asset/css/swiper.min.css') ?>">

        <!-- style css -->
        <link rel="stylesheet" href="<?= base_url('asset/css/main.css') ?>">
        <link rel="icon" href="<?= base_url('asset/img/logo-white.png') ?>">

        <title><?= APP_NAME ?></title>
    </head>
    <body>
        
        <!-- navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light mt-4 custom-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('asset/img/logo-white.png') ?>" alt="logo-imazin" width="60">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">HOME</a>
                        <a class="nav-item nav-link" href="#">JASA</a>
                        <a class="nav-item nav-link" href="#">PORFOLIO</a>
                        <a class="nav-item nav-link" href="#">ARTIKEL</a>
                        <a class="nav-item nav-link" href="#">TEAM</a>
                        <a class="nav-item nav-link" href="#">KONTAK</a>
                    </div>
                    <div class="navbar-nav ml-auto btn-link">
                        <a class="nav-item" href="#">
                            <button class="btn btn-blue">BUAT PROJECTMU</button>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar -->

        <!-- jumbotron -->
        <div class="jumbotron">
            <div class="container">
                <div class="col-lg-6">
                    <p class="lead" style="margin-bottom:0">Temukan Solusi IT Anda di</p>
                    <div class="typewriter">
                        <div class="typewriter-text">
                            <h1 class="display-2 display-bold">IMAZIN.<font color="#3498db">ID</font></h1>
                        </div>
                    </div>
                    <p class="lead">
                        <i class="fas fa-globe text-primary"></i> Web Development | <i class="fas fa-camera-retro text-primary"></i> Photography | <i class="fas fa-cog text-primary"></i> Maintenance
                    </p>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit rem dignissimos natus odio quam fugiat in alias. Labore at, asperiores incidunt magni quibusdam possimus, tenetur, natus molestiae fugit amet nesciunt!
                    </p>
                    <a class="btn btn-left" href="#" role="button">Tentang Kami</a>
                    <a class="btn btn-right" href="#" role="button">Lihat Porfolio</a>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
        <!-- jumbotron -->

        <!-- jasa -->
        <section id="jasa">
            <h1 class="display-4">JASA KAMI</h1>
            <hr class="hr-blue mb-5">

            <div class="container">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem voluptate dicta odit eligendi magnam excepturi consequatur impedit distinctio alias, similique necessitatibus amet? Doloribus provident blanditiis enim perspiciatis nisi officia cum.</p>
                <div class="row justify-content-md-center" style="margin-top: 4%">
                    <div class="col-md-3 mt-2">
                        <div class="jasa-kotak">
                            <img src="<?= base_url('asset/img/icon/camera-icon.png') ?>" alt="icon" width="30%">
                            <h5 class="mt-2 font-weight-bold">Web Development</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sit nisi consequuntur reiciendis accusantium.</p>
                        </div>

                        <!-- garis -->
                        <span class="hr1"></span>
                        <span class="hr2"></span>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="jasa-kotak">
                            <img src="<?= base_url('asset/img/icon/camera-icon.png') ?>" alt="icon" width="30%">
                            <h5 class="mt-2 font-weight-bold">Web Development</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sit nisi consequuntur reiciendis accusantium.</p>
                        </div>

                        <!-- garis -->
                        <span class="hr1"></span>
                        <span class="hr2"></span>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="jasa-kotak">
                            <img src="<?= base_url('asset/img/icon/camera-icon.png') ?>" alt="icon" width="30%">
                            <h5 class="mt-2 font-weight-bold">Web Development</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sit nisi consequuntur reiciendis accusantium.</p>
                        </div>

                        <!-- garis -->
                        <span class="hr1"></span>
                        <span class="hr2"></span>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="jasa-kotak">
                            <img src="<?= base_url('asset/img/icon/camera-icon.png') ?>" alt="icon" width="30%">
                            <h5 class="mt-2 font-weight-bold">Web Development</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sit nisi consequuntur reiciendis accusantium.</p>
                        </div>

                        <!-- garis -->
                        <span class="hr1"></span>
                        <span class="hr2"></span>
                    </div>
                </div>
            </div>
        </section>
        <!-- jasa -->

        <!-- porfolio -->
        <section id="porfolio" class="mt-5">
            <h1 class="display-4">PORFOLIO KAMI</h1>
            <p class="lead">Kami juga sudah memiliki berbagai project yang sudah ditangani.</p>
            <hr class="hr-blue mb-5">

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- pkkin for nanti pas dah buat db -->
                                <div class="swiper-slide">
                                    <div class="imgbox">
                                        <img src="<?= base_url('asset/img/porfolio/1.png') ?>" alt="porfolio" width="100%">
                                    </div>
                                    <div class="detail">
                                        <a href="#">
                                            <h4>Toko Cat Citra Warna</h4>
                                            www.cwabali.com
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="imgbox">
                                        <img src="<?= base_url('asset/img/porfolio/1.png') ?>" alt="porfolio" width="100%">
                                    </div>
                                    <div class="detail">
                                        <a href="#">
                                            <h4>Toko Cat Citra Warna</h4>
                                            www.cwabali.com
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="imgbox">
                                        <img src="<?= base_url('asset/img/porfolio/1.png') ?>" alt="porfolio" width="100%">
                                    </div>
                                    <div class="detail">
                                        <a href="#">
                                            <h4>Toko Cat Citra Warna</h4>
                                            www.cwabali.com
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="imgbox">
                                        <img src="<?= base_url('asset/img/porfolio/1.png') ?>" alt="porfolio" width="100%">
                                    </div>
                                    <div class="detail">
                                        <a href="#">
                                            <h4>Toko Cat Citra Warna</h4>
                                            www.cwabali.com
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="imgbox">
                                        <img src="<?= base_url('asset/img/porfolio/1.png') ?>" alt="porfolio" width="100%">
                                    </div>
                                    <div class="detail">
                                        <a href="#">
                                            <h4>Toko Cat Citra Warna</h4>
                                            www.cwabali.com
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- porfolio -->

        <!-- artikel -->
        <section id="artikel">
            <h1 class="display-4">ARTIKEL</h1>
            <hr class="hr-blue mb-5">

            <div class="container">
                <div class="row" style="margin-top:3%">
                    <!-- isi artikel 4 konten terbaru -->
                    <?php for($i=1; $i<4; $i++){ ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="<?= base_url('asset/img/porfolio/1.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul Artikel</h5>
                                    
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row" style="margin-top:3%">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-outline-info btn-sm">Lihat Artikel Lain</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- artikel -->

        <!-- team -->
        <section id="team">
            <h1 class="display-4">Team Kami</h1>
            <p class="lead">Kami memiliki keahlian masing - masing pada bidangnya.</p>
            <hr class="hr-blue mb-5">

            <div class="container">
                <div class="row" style="margin-top:3%">
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <div class="img-team" style="background-image: url(<?= base_url('asset/img/team/noval.png') ?>)"></div>
                            <h5>Naufal Rivaldi</h5>
                            <p>Web Development | Designer</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <div class="img-team" style="background-image: url(<?= base_url('asset/img/team/radit.png') ?>)"></div>
                            <h5>Debby Raditya</h5>
                            <p>Photography | Designer | Video Editor</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <div class="img-team" style="background-image: url(<?= base_url('asset/img/team/bayu.png') ?>)"></div>
                            <h5>Bayu Arimbawa</h5>
                            <p>Maintenance | Photography</p>
                        </div>
                    </div>        
                </div>
            </div>
        </section>
        <!-- team -->

        <!-- footer -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="display-4">Tertarik dengan jasa kami?</h3>
                        <h3 class="display-4">Buat Projectmu Sekarang</h3>
                        <a href="#" class="btn btn-outline-light btn-lg mt-2">Buat Projectmu!</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3">
                        <h5>Kontak Imazin</h5>
                        <p>
                            0896-2339-6091<br>
                            info@imazin.id
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h5>Link</h5>
                        <p>
                            <ul>
                                <li class="bullet-gone"><a href="#">Jasa</a></li>
                                <li class="bullet-gone"><a href="#">Porfolio</a></li>
                                <li class="bullet-gone"><a href="#">Artikel</a></li>
                                <li class="bullet-gone"><a href="#">Team</a></li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h5>Ikuti Kami</h5>
                        <p class="text-sosmed">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h5>Berlangganan News Imazin</h5>
                        <p>
                            <form action="" method="POST">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <input type="submit" class="btn btn-info" type="button" id="button-addon2" value="Go!">
                                    </div>
                                </div>
                            </form>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr style="background: rgb(165, 165, 165)">
                        <p class="text-center">Copyright &copy;2019 Imazin.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- swiper -->
        <script src="<?= base_url('asset/js/swiper.min.js') ?>"></script>

        <!-- custom js -->
        <script src="<?= base_url('asset/js/custom-script.js') ?>"></script>
    </body>
</html>