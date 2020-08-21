<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tiket</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/logo-yayasan.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
        <div class="container-fluid nav-menu7">
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
                                <?php foreach ($this->m_page->list() as $value) : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('home/page/'.$value['id']);?>"><?php echo $value['judul'] ?></a>
                                </li>
                                <?php endforeach; ?>
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
</section>
<!--//END HEADER -->
<!--//TIKET -->

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Booking Tiket Masuk</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Pesan Tiket</h3>

                                <form action="<?php echo site_url('tiket/simpan_tiket');?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Nama" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Phone" name="xkontak" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                    Rp.10.000/dewasa , Rp.5.000/pelajar<br><br> Dewasa<input type="number" max="500" step="1" min="0" class="form-control form-control-sm" placeholder="Jumlah Tiket" name="xdewasa" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                    Anak-Anak / Pelajar<input type="number" max="500" step="1" min="0" class="form-control form-control-sm" placeholder="Jumlah Tiket" name="xpelajar">
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                    Tanggal Kedatangan<input type="DATE" class="form-control form-control-sm" placeholder="Tanggal Kedatangan" name="xtanggal"  required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                       Bukti Pembayaran <input type="file"  class="form-control-file border" name="filefoto" required/>
                                    </div>
                                    <!-- // end .form-group -->
                                    
                                    <button type="submit" class="btn btn-default btn-submit">CONFIRM</button>
                                    <div><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <h3>Metode Pembayaran</h3>
                                <div class="contact-details">
                                    <i  aria-hidden="true"></i>
                                    <h5>Transfer OVO/ DANA ke nomor 082134489030</h5>
                                    <h5>Transfer ke rekening BCA 082134489030</h5><br>
                                    <h5>Terima Kasih</h5>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>
    <!--//END  TIKET -->
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
                            <?php foreach ($this->m_page->list() as $value) : ?>
                            <li class="nav-item">
                                <li><a href="<?php echo site_url('home/page/'.$value['id']);?>"><?php echo $value['judul'] ?></a></li>
                            </li>
                            <?php endforeach; ?>
                            <li><a href="<?php echo site_url('contact');?>">Kontak</a></li>
                        </ul>
                        </div>
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
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>
