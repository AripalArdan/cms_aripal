<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>web aripall</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/front/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <h1><?= $konfig->judul_website; ?></h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="<?= base_url() ?>" class="active">Home</a></li>
                      <?php foreach ($kategori as $kate) { ?>
                        <li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" ><?= $kate['nama_kategori'] ?></a></li>
                    <?php } ?>
                      <li><a href="<?= base_url('auth') ?>"><i class="fa fa-home"></i> LOGIN</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
         
          <h3>Makanan dan Minuman Khas Solo</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="main-image">
            <img src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" alt="">
          </div>
          <div class="main-content">
            <span class="category"><?= $konten->nama_kategori; ?></span>
            <h4><?= $konten->judul; ?></h4>
            
          </div>
          <div class="col-lg-4">
            <div class="info-table" style="width: 1000px; margin-bottom:40px;">
              <h6><?= $konten->keterangan ?></h6>
              <p><?= $konten->nama; ?></p>
            </div>
      </div>
      </div>
    </div>
  </div>

  

  <footer class="footer-no-gap">
    <div class="container">
      <div class="col-lg-12">
        
        
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/front/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/js/isotope.min.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/js/owl-carousel.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/js/counter.js"></script>
  <script src="<?= base_url('assets/front/'); ?>assets/js/custom.js"></script>

  </body>
</html>