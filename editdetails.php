<?php
error_reporting(0);
include "connection.php";
$id=$_GET['id'];
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $cat = $_POST['cat'];
    $myfile1 = $_FILES['myfile1'];
    $qty = $_POST['qty'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    

    
    $insert = mysqli_query($conn,"UPDATE `muditaa` SET `name`='$name',`cat`='$cat',`image`='$myfile1',`qty`='$qty',`amount`='$amount',`description`='$description' WHERE id='$id'");
   if($insert)
    {
        
	echo '<script type = "text/javascript">';
    echo 'alert("Product UPDATED Successfully!");';
    echo 'window.location.href = "viewdetails.php"';
    echo '</script>';
	
    }
    else
    {
        echo "please enter required fields";
    }
}
?>
<?php
if( isset($_POST['submit']))
{
    $my1=$_FILES['myfile1']['name'];
   
    $temp_name1 = $_FILES['myfile1']['tmp_name'];
   
    $path_filename_ext="upload/";
   
    move_uploaded_file($temp_name1, 'upload/'.$my1);

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Muditaa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
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
  text-align:left;
  padding-top:24px;
  opacity:0.3;
  font-size:13px;
  margin-bottom:0;
}
</style>
<style>
    @media (max-width:991px) {
    .rounded-circle {
    margin-top: -130px;
    margin-left: 38%;
    width: 100px;
  }
}
</style>
<body>
    
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
  <a href="add-details.php" class="nav-item nav-link"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Products</a>
  <a href="viewdetails.php" class="nav-item nav-link"><i class="fa fa-eye"></i>&nbsp;&nbsp;View Products</a>
  <a href="login.php" class="nav-item nav-link"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a>
                </div>
        </nav>
    </div>
    <!-- Navbar End -->

    
 <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width:100%;height:80vh" class="" src="img/mudi.jpg" alt="Image">
                </div>
             
            </div>
         
        </div>
    </div>


    <div class="container" style="margin-top: 35px;margin-bottom: 35px;">

    <center><h3 style="font-family: cursive;
        color: #8B0000;
        font-size: 40px;
        margin-bottom: 20px;
        margin-top: 20px;">Edit Product</h3></center>
   <form name="form" method="post"  class="wrapper" enctype="multipart/form-data" >
<?php

$sql="Select * from muditaa where  id='$id'";
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_array($result);

?>
  <div class="form-group">
    <label for="name">Name:</label>
  <!--<input type="text" class="form-control" name="name">-->
    <input type="text" name="name"  class="form-control"   value="<?php echo $row['name']?>"  >
  </div>

  <div class="form-group">
	<label>Select Category:</label>
            <select class="form-control" name="cat" required>
            <option value="<?php echo $row['cat']?>" selected hidden><?php echo $row['cat']?></option> 
            <option value="Adrsya">Adrsya</option>        
            <option value="VCelebrate">VCelebrate</option>  
            <option value="Succulants">Succulants</option>  
            <option value="Sarvagunn">Sarvagunn</option>  
           </select>

          <!-- //Duration:<select name="duration" type="dropdown" required>
//<option value="</option>
//<option value="30 Min">30 Min</option>
//<option value="60 Min">60 Min</option>
 </div>-->

  <div class="form-group">
  <label> Upload Image:</label>
 
  <input type="text" name="myfile1"  class="form-control"  value="<?php echo $row['upload']?>"  >
  <input type="file" id="myfile" class="form-control "  placeholder="" name="myfile1" >
  </div>

  <div class="form-group">
    <label for="qty">Quantity:</label>
    <input type="text" name="qty"  class="form-control"  value="<?php echo $row['qty']?>" >
  </div>

  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" name="amount"  class="form-control"  value="<?php echo $row['amount']?>"  >
  </div>

  <div class="form-group">
    <label for="desc">Description:</label>
    <input type="text" name="description" class="form-control" value="<?php echo $row['description']?>" >
  </div>
  
  <button type="submit" name="submit" class="btn btn-info">Submit</button>
</form>
</div>

    
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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