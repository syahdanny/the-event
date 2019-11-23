
<?php
include 'process/conSQL.php';

    session_start();
    if(isset($_SESSION['username']) and isset($_SESSION['level'])) {
        if($_SESSION['level'] == '1') {
            header("Location : admin.php");
        }
        else if ($_SESSION['level'] == '2') {
          header("Location : dasbor.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Asking Alexandria Concert</title>
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

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="buy-tickets"><a data-toggle="modal" data-target="#login">Login</a></li>
          <li class="buy-tickets"><a data-toggle="modal" data-target="#register">Register</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">The <br><span>Asking Alexandria</span> Concert</h1>
      <p class="mb-4 pb-0">10-12 December, Gelora Bung Karno, Jakarta</p>
      <a href="https://www.youtube.com/watch?v=lJhLbUpUWgw" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="dasbor.php" class="about-btn scrollto">Buy Tickets</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About Asking Alexandria</h2>
            <p>Asking Alexandria are an English rock band from York, North Yorkshire, consisting of lead vocalist Danny Worsnop, guitarists Ben Bruce and Cameron Liddell, drummer James Cassells and bassist Sam Bettley.</p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Gelora Bung Karno, Jakarta</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>10-12 December</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal Login Form -->
    <div id="login" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="process/userLogin.php">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username"required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password"required="required">
              </div>
              <div class="text-left">
                <a href="" data-toggle="modal" data-target="#register">Already have account?</a>
              </div>
              <div class="text-center">
                <button type="submit" class="btn">Login</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal Register Form -->
    <div id="register" class="modal fade">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Register</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="process/userRegister.php">
              <div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="required">
              </div>
              <div class="form-group">
                <select id="ticket-type" name="jenis-kelamin" class="form-control" required="required">
                  <option value="">-- Jenis Kelamin --</option>
                  <option value="laki-laki">Laki - Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nomor" placeholder="Nomor Telepon" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required="required">
              </div>
              <div class="text-center">
                <button type="submit" name="register" class="btn">Register</button>
              </div>
            </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


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
          Edited by <a href="">Syahdanny Alhamda</a>
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

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
