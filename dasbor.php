
<?php
include 'process/conSQL.php';

    session_start();
    $username = $_SESSION['username'];

    $query = "SELECT * FROM pengunjung WHERE username = '$username'";
    $result = mysqli_fetch_array(mysqli_query($con, $query));
    $id = $result['id'];
        if(isset($_SESSION['username']) and isset($_SESSION['level'])) {
        if($_SESSION['level'] == 1) {
            header("Location: admin.php");
        } 
    }
    else {
      header("Location: index.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Asking Alexandria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="index.php#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="konfirmasi.php">Welcome, <?php echo $username; ?> </a></li>
          <li class="buy-tickets"><a href="process/logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">

        <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>Asking Alexandria Members</h2>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
                <div class="details">
                  <h3><a href="">Danny Worsnop</a></h3>
                  <p>Keyboard</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
                <div class="details">
                  <h3><a href="">Ben Bruce</a></h3>
                  <p>Lead Guitar</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
                <div class="details">
                  <h3><a href="">James Cassells</a></h3>
                  <p>Drum Kits</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
                <div class="details">
                  <h3><a href="">Cameron Liddell</a></h3>
                  <p>Rhythm Guitar</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
                <div class="details">
                  <h3><a href="">Sam Bettley</a></h3>
                  <p>Bass Guitar</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="speaker">
                <img src="img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
                <div class="details">
                  <h3><a href="">Denis Stoff</a></h3>
                  <p>Ex Vocalist</p>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </section>
  
      <!--==========================
        Gallery Section
      ============================-->
      <section id="gallery" class="wow fadeInUp">
  
        <div class="container">
          <div class="section-header">
            <h2>Gallery</h2>
            <p>Check our gallery from the recent events</p>
          </div>
        </div>
  
        <div class="owl-carousel gallery-carousel">
          <a href="img/gallery/1.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/1.jpg" alt=""></a>
          <a href="img/gallery/2.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/2.jpg" alt=""></a>
          <a href="img/gallery/3.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/3.jpg" alt=""></a>
          <a href="img/gallery/4.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/4.jpg" alt=""></a>
          <a href="img/gallery/5.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/5.jpg" alt=""></a>
          <a href="img/gallery/6.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/6.jpg" alt=""></a>
          <a href="img/gallery/7.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/7.jpg" alt=""></a>
          <a href="img/gallery/8.jpg" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/8.jpg" alt=""></a>
        </div>
  
      </section>
  
      <!--==========================
        Buy Ticket Section
      ============================-->
      <section id="buy-tickets" class="section-with-bg wow fadeInUp">
        <div class="container">
  
          <div class="section-header">
            <h2>Buy Tickets</h2>
            <p>Velit consequatur consequatur inventore iste fugit unde omnis eum aut.</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Standard Access</h5>
                  <h6 class="card-price text-center">Rp.500.000</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal-standard" data-ticket-type="standard-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Pro Access</h5>
                  <h6 class="card-price text-center">Rp.1.000.000</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Workshop Access</li>
                    <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal-pro" data-ticket-type="pro-access">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">Premium Access</h5>
                  <h6 class="card-price text-center">Rp.2.000.000</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Regular Seating</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Badge</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Workshop Access</li>
                    <li><span class="fa-li"><i class="fa fa-check"></i></span>After Party</li>
                  </ul>
                  <hr>
                  <div class="text-center">
                    <button type="button" class="btn" data-toggle="modal" data-target="#buy-ticket-modal-premium" data-ticket-type="premium-access">Buy Now</button>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
        <!-- Modal Order Form Standard -->
        <div id="buy-ticket-modal-standard" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets Standard</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="process/addTransaksi.php">
                <div>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="id_kelas" value="1">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="kelas" value="standard">
                </div>
                <div class="form-group text-center">
                    <label for="jml_kursi" class="col-md-4">Jumlah Tiket :</label>
                    <input type="number" name="jml_kursi" id="jml_kursi" class="form-control col-md-12">
                  </div>
                  <div>
                  <input type="hidden" class="form-control" name="biaya" value="500000">
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn" name="transaksi">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

                <!-- Modal Order Form Pro -->
                <div id="buy-ticket-modal-pro" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets Pro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="process/addTransaksi.php">
                <div>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="id_kelas" value="2">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="kelas" value="pro">
                </div>
                <div class="form-group text-center">
                    <label for="jml_kursi" class="col-md-4">Jumlah Tiket :</label>
                    <input type="number" name="jml_kursi" id="jml_kursi" class="form-control col-md-12">
                  </div>
                  <div>
                  <input type="hidden" class="form-control" name="biaya" value="1000000">
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn" name="transaksi">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

                <!-- Modal Order Form Premium -->
                <div id="buy-ticket-modal-premium" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets Premium</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="process/addTransaksi.php">
                <div>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="id_kelas" value="3">
                </div>
                <div>
                  <input type="hidden" class="form-control" name="kelas" value="premium">
                </div>
                <div class="form-group text-center">
                    <label for="jml_kursi" class="col-md-4">Jumlah Tiket :</label>
                    <input type="number" name="jml_kursi" id="jml_kursi" class="form-control col-md-12">
                  </div>
                  <div>
                  <input type="hidden" class="form-control" name="biaya" value="2000000">
                </div>
                  <div class="text-center">
                    <button type="submit" class="btn" name="transaksi">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
  
      </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  
  

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
