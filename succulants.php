<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Muditaa Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    .footer-dark {
  padding:50px 0;
  color:#f0f9ff;
  background-color:#282d32;
}

.footer-dark h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-dark ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-dark ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.6;
}

.footer-dark ul a:hover {
  opacity:0.8;
}

@media (max-width:767px) {
  .footer-dark .item:not(.social) {
    text-align:left;
    padding-bottom:20px;
  }
}

.footer-dark .item.text {
  margin-bottom:36px;
}

@media (max-width:767px) {
  .footer-dark .item.text {
    margin-bottom:0;
  }
}

.footer-dark .item.text p {
  opacity:0.6;
  margin-bottom:0;
}

.footer-dark .item.social {
  text-align:center;
}

@media (max-width:991px) {
  .footer-dark .item.social {
    text-align:center;
    margin-top:20px;
  }
}

.footer-dark .item.social > a {
  font-size:20px;
  width:36px;
  height:36px;
  line-height:36px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  box-shadow:0 0 0 1px rgba(255,255,255,0.4);
  margin:0 8px;
  color:#fff;
  opacity:0.75;
}

.footer-dark .item.social > a:hover {
  opacity:0.9;
}

.footer-dark .copyright {
  text-align:center;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
</style>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-lg-5" style="margin-bottom: -20px;">
            <div class="input-group">
                <div class="form-outline">
                  <input type="search" id="form1" placeholder="Search" class="form-control" />
                  <label class="form-label" for="form1"></label>
                </div>
                <button style="height: 38px;background-color: #34c5ba;border: #34c5ba;" type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
               
             </div>
            
        </div>
        <a href="#">
        <h5 style="text-align: right;
        margin-bottom: 10px;
        margin-top: -63px;"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Log In</h5></a>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 style="color:#8B0000">Muditaa Group</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    
                    <div class="nav-item dropdown">
                        <a href="products-services.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Products & Services</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="adrsya.php" class="dropdown-item">Adrsya</a>
                            <a href="vcelebrate.php" class="dropdown-item">VCelebrate</a>
                            <a href="succulants.php" class="dropdown-item">Succulants</a>
                            <a href="sarvagunn.php" class="dropdown-item">Sarvagunn</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>

                    <a href="index.html" class="nav-item nav-link">
                        <img style="margin-top: -28px;
                        background-color: #34c5ba;
                        border-style: inset;
                        padding: 5px;
                        margin-bottom: -28px;
                        height: 82px;" src="img/Muditaa.webp"></a>

                </div>
                <a style="font-size: 20px;" class="text-white px-3" href="">
                    <i style="color: white;" class="fab fa-facebook-f"></i>
                </a>
                <a style="font-size: 20px;" class="text-white px-3" href="">
                    <i style="color: white;" class="fab fa-instagram"></i>
                </a>
                <a style="font-size: 20px;" class="text-white px-3" href="">
                    <i style="color: white;" class="fab fa-twitter"></i>
                </a>
               
                </a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/home6.png" alt="Image">
                    
                </div>
             
            </div>
         
        </div>
    </div>
    <div class="container">
      <center><h3 style="font-family: cursive;
        color: #8B0000;
        font-size: 40px;
        margin-bottom: 20px;
        margin-top: 20px;">Shop Now</h3></center>
    
      
        <?php
    error_reporting(0);
    $id=$_GET['id'];
    $selectquery = "select * from muditaa where cat='Succulants' order by id asc" ;
    $query = mysqli_query($conn,$selectquery);
    $total = mysqli_num_rows($query);
    ?>
   
    
    <div class="row">
      <?php
    if($total!=0)
    {
    
    while(($result = mysqli_fetch_array($query)))
    {
    ?>
      <div class="col-md-3">
      <center> <h5 style="background-color: #34c5ba;
    padding: 10px;
    border-radius: 5px;
    color: white;"><?php echo $result['name'] ?></h5></center> 

      <center> <img style="width:200px;height:200px" src="<?php echo "upload/".$result['upload']; ?>"/></center>
    </br>
      <center> <h6 style="font-size: 16px;
    text-align: justify;"><?php echo $result['description'];?></h6></center> 
      </br>
      <center> <h5><?php echo "Rs.".$result['amount'];?></h5><center> 

       <center> <button style="background-color: #8b0000;
    border: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Order Now</button>
      </div> </center>      
     
<!-------------POP UP Modal Code------------>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $result['name'] ?></h5>
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="modal-title" id="exampleModalLabel"><center><img src="<?php echo "upload/".$result['upload']; ?>",width="200px", height="200px"/></center></h5></br>
    <h5 class="modal-title" id="exampleModalLabel"><?php echo $result['description'] ?></h5></br>
      <h5 class="modal-title" id="exampleModalLabel"><?php echo $result['amount'] ?></h5>
      </div>
      <div class="modal-footer">
     
        <button type="submit" class="btn btn-secondary" name="send" data-dismiss="modal">Send</button>
        
      </div>
    </div>
  </div>
</div>
<!-----------POP UP modal Code end---------->
<?php
    }
    }
    ?>
  </div> 
      </div> 
   
</br>
  </br>
    <!-- Footer Start -->
    <div class="footer-dark">
    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="color:white">Address</h3>
                       <p><i class="fas fa-map-marker-alt" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet,</br>&nbsp;&nbsp;&nbsp;&nbsp;consectetur adipiscing elit.</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dolor sit amet</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;washington - 000111</p>
                    </br>
                    </br>
                <h3 style="color:white">Contact Us</h3>
                <ul>
                <p><i class='fas fa-phone-square-alt'></i>&nbsp;&nbsp;&nbsp;+91 8765678954</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;abc.xyz@gmail.com</p>
                </ul>
                      </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3 style="color:white">Quick Links</h3>
                        <ul>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Home</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>About</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Products & Services</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Adrsya</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>VCelebrate</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Succulants</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Sarvagunns</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Contact Us</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>FAQs</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Returns & Exchange</a></li>
<li><a href="#"><i class="fa fa-angle-double-right">&nbsp;&nbsp;</i>Return Policies</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3 style="color:white">Subscribe to Our Newsletter</h3>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Enter your email">
                            <span class="input-group-btn">
                            <button style="background-color: #17a2b8;color:white" class="btn" type="submit">&nbsp;&nbsp;Subscribe</button>
                            </span>
                             </div>
                         
                    </div>
                   
                    <div class="col item social">
                        <p style="background-color: #17a2b8;
                        height: 1px;
                        margin-top: 40px;
                        font-size: 14px;
                        padding-top: 10px;
                        margin-bottom: 40px;" class="text-center">Copyright @2022 | Designed  by <a href="#">samlogomaker</a></p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
             
            </div>
        </footer>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top" style="background-color: #17a2b8;
    border: none;"><i class="fa fa-angle-double-up">

    </i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>
