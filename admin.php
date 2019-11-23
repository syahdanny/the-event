
<?php
include 'process/conSQL.php';

  session_start();
  $username = $_SESSION['username'];
  if(isset($_SESSION['username']) and isset($_SESSION['level'])) {
      if($_SESSION['level'] == 2) {
          header("Location: dasbor.php");
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
          <li><a href="">Welcome, <?php echo $username; ?> </a></li>
          <li class="buy-tickets"><a href="process/logout.php">Logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <main id="main" class="main-page">
  
      <!--==========================
        Buy Ticket Section
      ============================-->
      <section id="buy-tickets" class="section-with-bg wow fadeInUp">
      
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h6 class="card-price text-center">Data Transaksi</h6>
                  <hr>
                  <table id="transaksi" class="table table-stripped text-center mt-3" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID Transaksi</th>
                            <th>ID User</th>
                            <th>Kelas</th>
                            <th>Jumlah Kursi</th>
                            <th>Bayar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $query = "SELECT * FROM transaksi where terhapus = 0";
                    $result = mysqli_query($con, $query);

                    if (mysqli_num_rows($result) > 0){
                        $index = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $id_transaksi = $row["id_transaksi"];
                            echo "
                            <tr>
                                <td>" . $index++ . "</td>
                                <td>" .$row["id_transaksi"]. "</td>
                                <td>" .$row["id"]. "</td>
                                <td>" .$row["kelas"]. "</td>
                                <td>" .$row["jml_kursi"]. "</td>
                                <td>" .$row["bayar"]. "</td>
                                <td>
                                <a href='process/hapusTransaksi.php?id=$id_transaksi' class='btn btn-danger'>Delete</a>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    mysqli_close($con); 
                    ?>
                    </tbody>
                </table>
                  <hr>
                </div>
              </div>
            </div>
  
        </div>
  
        <!-- Modal Order Form -->
        <div id="buy-ticket-modal" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Buy Tickets</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="#">
                  <div class="form-group">
                    <input type="text" class="form-control" name="your-name" placeholder="Your Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="your-email" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <select id="ticket-type" name="ticket-type" class="form-control" >
                      <option value="">-- Select Your Ticket Type --</option>
                      <option value="standard-access">Standard Access</option>
                      <option value="pro-access">Pro Access</option>
                      <option value="premium-access">Premium Access</option>
                    </select>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn">Buy Now</button>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Modal Order Form Konfirmasi-->
        <div id="buy-ticket-modal-konfirmasi" class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Thanks</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="#">
                  <div class="form-group">
                    <p>Your order has been accepted</p><a href="dasbor.php">Go to Dasbor</a>
                  </div>
                </form>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
  
      </section>


  </main>


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
