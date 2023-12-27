<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>D-7/2,MIDC,Akkalkot Road,Solapur-413 006,Maharashtra,India</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+91 217 2656377</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@vishakatex.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><img src="img/vishakatextlogo.jpg" width=6%>Vishaka Industries</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu m-0">
                            <?php
                            $con=mysqli_connect("localhost","root","","admin");
                            $sql = "select * from products";
                            $a = mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_row($a))
                            {
                            ?>
                            <a href="product.php?id=<?php echo $rw[0];?>" class="dropdown-item"><?php echo $rw[1];?></a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                <!--<a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>-->
            </div>
        </nav>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px; background-image: url(img/background1.jpg);">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <?php
                    $id=$_GET['id'];
                    $con=mysqli_connect("localhost","root","","admin");
                    $sql = "select * from products where id=$id";
                    $a = mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_row($a))
                    {
                ?>
                    <h1 class="display-4 text-white animated zoomIn"><?php echo $rw[1];?></h1>                                  
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white"><?php echo $rw[1];?></a>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <?php
                    $id=$_GET['id'];
                    $con=mysqli_connect("localhost","root","","admin");
                    $sql = "select * from products where id=$id";
                    $a = mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_row($a))
                    {
                    ?>
                    <img src="img/<?php echo $rw[2];?>" width="600" height="400">
                    <?php
                    }
                    ?>
                </div>
                <div class="col-lg-5">
                    <div class=" rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s" style="background-color:white; width:105%;">
                        <form>
                        <?php
                            $id=$_GET['id'];
                            $con=mysqli_connect("localhost","root","","admin");
                            $sql = "select * from products where id=$id";
                            $a = mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_row($a))
                            {
                        ?>
                        <h2 style="margin-top:-40px;"><?php echo $rw[1];?></h2>
                        <?php
                            }
                        ?>
                        <hr>
                            <div class="row g-3">
                                <table border=1  class="table table-bordered success proinfo">
                                    <?php
                                    $id=$_GET['id'];
                                    $con=mysqli_connect("localhost","root","","admin");
                                     $sql = "select * from products where id=$id";
                                     $a = mysqli_query($con,$sql);
                                    while($rw=mysqli_fetch_row($a))
                                    {
                                    ?>
                                    <tr>
                                        <th style="background-color:skyblue;">Title</th>
                                        <td><?php echo $rw[3];?></td>
                                     </tr>
                                     <tr>
                                        <th style="background-color:skyblue;">Materials</th>
                                        <td><?php echo $rw[4];?></td>
                                     </tr>
                                     <tr>
                                        <th style="background-color:skyblue;">Quality</th>
                                        <td><?php echo $rw[5];?></td>
                                     </tr>
                                     <tr>
                                        <th style="background-color:skyblue;">Uses</th>
                                        <td><?php echo $rw[6];?></td>
                                     </tr>
                                     <tr>
                                        <th style="background-color:skyblue;">Size</th>
                                        <td><?php echo $rw[7];?></td>
                                     </tr>
                                     <tr>
                                        <th style="background-color:skyblue;">Gms</th>
                                        <td><?php echo $rw[8];?></td>
                                     </tr>
                                     <tr>
                                        <th style="background-color:skyblue;">Colors</th>
                                        <td><?php echo $rw[9];?></td>
                                     </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Vendor Start 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
     Vendor End -->

    <!-- Footer Start -->
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Vishaka Tex.</a> All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="https://vertextechnosys.com">vertex Technosys</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>