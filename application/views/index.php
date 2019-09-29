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
        <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
        <link rel="icon" href="<?= base_url('asset/img/logo-color.png') ?>">

        <title><?= APP_NAME ?></title>
    </head>
    <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('asset/img/logo.png') ?>" alt="logo-imazin" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="#">HOME</a>
                        <a class="nav-item nav-link" href="#">JASA</a>
                        <a class="nav-item nav-link" href="#">PORFOLIO</a>
                        <a class="nav-item nav-link" href="#">ARTIKEL</a>
                        <a class="nav-item nav-link" href="#">TEAM</a>
                        <a class="nav-item nav-link" href="#">KONTAK</a>
                        <a class="nav-item btn btn-outline-success btn-custom" href="#">MULAI PROJECT</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- jumbotron -->
        <div class="jumbotron">
            <div class="container">
                <div class="box">
                    <p class="lead" style="margin-bottom:0">Temukan Solusi IT Anda di</p>
                    <div class="typewriter">
                        <div class="typewriter-text">
                            <h1 class="display-2">IMAZIN.<font color="#009432">ID</font></h1>
                        </div>
                    </div>
                    <p class="lead">
                        Web Development | Photoshoot | Design | Photobook
                    </p>
                    <p class="lead text-hidden">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rerum praesentium velit molestiae, quis distinctio ducimus vero  voluptates nobis minima explicabo assumenda non quae in recusandae fugit molestias nisi quas.
                    </p>
                </div>
            </div>
            <center class="center">
                <a href="#" class="btn btn-outline-success btn-lg btn-mobile">Kenali Kami Lebih Jauh</a>
            </center>
        </div>
        <!-- jumbotron -->

        <!-- jasa -->
        <div class="k-dark">
            <div class="container">
                <div class="row align-content-center justify-content-center">
                    <div class="col-8 text-center">
                        <h3 class="display-4">
                            <font color="#009432">#Jasa</font> yang kami sediakan untuk kebutuhan IT anda
                        </h3>
                        <hr class="hr-custom-green">
                    </div>
                </div>
                <div class="row align-content-center justify-content-center" style="margin-top: 5%">
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <img src="<?= base_url('asset/img/icon/web-icon.png') ?>" alt="" width="30%" class="img-jasa">
                            <h5 class="text-muted">Web Development</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni rem cupiditate ea laborum illum nulla perferendis, laudantium quos, error aperiam qui, provident minus corporis aut molestiae vitae sed atque autem.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <img src="<?= base_url('asset/img/icon/camera-icon.png') ?>" alt="" width="30%" class="img-jasa">
                            <h5 class="text-muted">Photoshoot</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni rem cupiditate ea laborum illum nulla perferendis, laudantium quos, error aperiam qui, provident minus corporis aut molestiae vitae sed atque autem.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <img src="<?= base_url('asset/img/icon/photo-icon.png') ?>" alt="" width="30%" class="img-jasa">
                            <h5 class="text-muted">Photobook</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni rem cupiditate ea laborum illum nulla perferendis, laudantium quos, error aperiam qui, provident minus corporis aut molestiae vitae sed atque autem.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-content-center justify-content-center" style="margin-top: 5%">
                    <div class="col-md-6">
                        <h3 class="display-4 display-side-border">
                            Mengapa memilih kami?
                        </h3>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia nam laboriosam pariatur eum tempore, fugiat temporibus saepe sed esse cumque nesciunt aliquid mollitia a sit quidem culpa ratione repellat distinctio.<br>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae explicabo necessitatibus consequatur quasi similique esse vel velit, numquam vero, eius eveniet, minus a! Reiciendis sint magni aut? Ducimus, molestiae dignissimos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- jasa -->

        <!-- porfolio -->
        <div class="porfolio-content">
            <div class="container">
                <div class="row align-content-center justify-content-center">
                    <div class="col-8 text-center">
                        <h3 class="display-4">
                            <font color="#009432">#Porfolio</font> kami
                        </h3>
                        <p class="lead">Kami juga sudah memiliki berbagai project yang sudah ditangani, antara lainnya.</p>
                        <hr class="hr-custom-green">
                    </div>  
                </div>
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
        </div>
        <!-- porfolio -->

        <!-- Artikel -->
        <div class="artikel-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="display-4">
                            <font color="#009432">#Artikel</font>
                        </h3>
                    </div>
                </div>
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
                        <a href="#" class="btn btn-outline-success btn-lg">Lihat Artikel Lain</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Artikel -->

        <!-- team -->
        <div class="team-content">
            <div class="container">
                <div class="row align-content-center justify-content-center">
                    <div class="col-8 text-center">
                        <h3 class="display-4">
                            <font color="#009432">#Team</font> kami
                        </h3>
                        <hr class="hr-custom-green">
                    </div>  
                </div>
                <div class="row" style="margin-top:3%">
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <div class="img-team" style="background-image: url(<?= base_url('asset/img/team/noval.png') ?>)"></div>
                            <h5>Naufal Rivaldi</h5>
                            <p>Web Development | Desainer</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-jasa">
                            <div class="img-team" style="background-image: url(<?= base_url('asset/img/team/radit.png') ?>)"></div>
                            <h5>Debby Raditya</h5>
                            <p>Photography | Desainer | Video Editor</p>
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
        </div>
        <!-- team -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4>KONTAK</h4>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
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