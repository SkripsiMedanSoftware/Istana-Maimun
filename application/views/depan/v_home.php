<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Istana Maimun - Maimoon Palace</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/logo-yayasan.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
   
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-10">
                    <div class="header-top_address">
                        <div class="header-top_list">
                        <?php foreach ($status->result() as $row) :?>
                            <h3 style="text-align:center;"><?php  echo $row->status;?></h3>
                            </a>
                        </div>
                </div>
            </div>
          <?php endforeach;?>
                        <div class="col-xs-6 col-sm-4 col-md-1">
                    <div class="header-top_login mr-sm-1">
                        <a href="<?php echo site_url('administrator');?>">LOGIN</a>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container-fluid nav-menu2">
            <div class="row">
                <div class="col-md-9">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="90px;" src="<?php echo base_url().'theme/images/logo-yayasan.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav bg-light">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Beranda</a>
                                </li>
                                <?php 
                                if (!empty($this->m_page->list())) :
                                foreach ($this->m_page->list() as $value) :
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('home/page/'.$value['id']);?>"><?php echo $value['judul'] ?></a>
                                </li>
                                <?php 
                                endforeach;
                                endif;
                                ?>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Kontak</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('tiket');?>">Tiket</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/4.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/2-2.jpg'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/3-3.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <div class="slider-btn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<!-- <section class="clearfix about about-style2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
               <h2>Selamat Datang</h2>
               <p>Website Resmi Istana Maimun </p>

            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/sultan.png'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section> -->
<section class="our-teachers">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-5">Istana Maimun - <?php echo (!empty($page))?$page[0]['judul']:'';?></h2>
            </div>
        </div>
        <div class="container">
            <?php echo (!empty($page))?$page[0]['content']:'';?>
        </div>
    </div>
</section>
<!--//END ABOUT -->

<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-yayasan.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by <a href="http://mhaviz.com" target="_blank">M.Haviz Hasibuan</a>. <br>All rights reserved.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Beranda</a></li>
                            <?php if (!empty($this->m_page->list())) : ?>
                            <?php foreach ($this->m_page->list() as $value) : ?>
                            <li class="nav-item">
                                <li><a href="<?php echo site_url('home/page/'.$value['id']);?>"><?php echo $value['judul'] ?></a></li>
                            </li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                            <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span> Medan, Sumatera Utara, Indonesia</p>
                        <p>Email : istanamaimun.com
                            <br> Phone : 082134489030</p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
