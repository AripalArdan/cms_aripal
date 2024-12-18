<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Aripall</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/front/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--



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
                      <li><a href="<?= base_url() ?>" class="<?= $this->uri->segment(1) == '' ? 'active' : '' ?>">Home</a></li>
                      <?php foreach ($kategori as $kate) { ?>
                        <li><a class="<?= $this->uri->segment(2) == 'kategori' && $this->uri->segment(3) == $kate['id_kategori'] ? 'active' : '' ?>" href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>" ><?= $kate['nama_kategori'] ?></a></li>
                    <?php } ?>
                      <li><a href="<?= base_url('auth') ?>" class=""><i class="fa fa-home"></i> LOGIN</a></li>
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

      
     

  <div class="properties section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h2>Makanan dan minuman di kota Solo</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($konten as $uu) { ?>
            <div class="col-lg-4 col-md-6">
            <div class="item">
                <a href=""><img src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" alt=""></a>
                <span class="category"><?= $uu['nama_kategori'] ?></span>
                <h6>Rp. <?= number_format($uu['harga'], 0, ',', '.'); ?></h6>
                <h4><a href="property-details.html"><?= $uu['judul'] ?></a></h4>
                <ul>
                <li>Tempat Makan: <span><?= $uu['nama'] ?></span></li>
                </ul>
                <div class="main-button">
                <a href="<?= base_url('home/artikel/' . $uu['slug']) ?>">Baca Selengkapnya</a>
                </div>
            </div>
            </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="contact section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
        </div>
      </div>
    </div>
  </div>

  <div class="contact-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <div id="map">    
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="item phone">
                <img src="<?= base_url('assets/front/'); ?>assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                <h6>085885585775<br><span>Phone Number</span></h6>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="item email">
                <img src="<?= base_url('assets/front/'); ?>assets/images/email-icon.png" alt="" style="max-width: 52px;">
                <h6>infomakanandikotasolo<br><span>Business Email</span></h6>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="info">
              <li><i class="fa fa-envelope"></i><?= $konfig->email ?></li>
              <li><i class="fa fa-map"></i><?= $konfig->alamat ?></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4">
            <ul class="social-links">
              <li><a href="<?= $konfig->facebook ?>" target="_blank"><i class="fab fa-facebook"></i></a></li>
              <li><a href="<?= $konfig->no_wa ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="<?= $konfig->instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
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