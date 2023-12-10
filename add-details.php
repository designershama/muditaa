<?php
include "connection.php";


if(isset($_POST['submit']))
{  
	$name = $_POST['name'];
    $cat = $_POST['cat'];
    //$myfile1 = $_FILES['myfile1'];
    $qty = $_POST['qty'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
	

	// here is the current date time timestamp
	$time = date("d-m-Y")."-".time();

	// here we set it to the image name
	$fileName = $_FILES['myfile1']['name'];
	$fileName = $time."-".$fileName ;

	// upload that image into the directory name: images
	move_uploaded_file($_FILES['myfile1']['tmp_name'], "upload/".$fileName);
	 $img="upload/".$_FILES['myfile1']['name'];
    
    $query = "insert into muditaa (`name`, `cat`,`upload`, `qty`, `amount`, `description`) values ('$name', '$cat', '$fileName','$qty','$amount','$description')";

	$query1=mysqli_query($conn, $query);
	if($query1)
	{
        echo '<script type = "text/javascript">';
        echo 'alert("Product Added Successfully!");';
        echo 'window.location.href = "add-details.php"';
        echo '</script>';

	}else{
		echo"Enter required Fields ";
	}
  
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Muditaa Group Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/Muditaa.webp" type="image/icon type">
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
        margin-top: 20px;">Add Product</h3></center>
   <form name="form" method="post" action="add-details.php" class="wrapper" enctype="multipart/form-data" >

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name">
  </div>

  <div class="form-group">
	<label>Select Category:</label>
            <select class="form-control" name="cat" required>
            <option value="Adrsya">Adrsya</option>       
            <option value="VCelebrate">VCelebrate</option>  
            <option value="Succulants">Succulants</option>  
            <option value="Sarvagunn">Sarvagunn</option>  
           </select>
 </div>

  <div class="form-group">
  <label> Upload Image:</label>
   <input type="file" id="myfile" class="form-control "  placeholder="" name="myfile1" required>
  </div>

  <div class="form-group">
    <label for="qty">Quantity:</label>
    <input type="text" class="form-control" name="qty" required pattern="[0-9]+">
  </div>

  <div class="form-group">
    <label for="amount">Amount:</label>
    <input type="text" class="form-control" name="amount" required pattern="[0-9]+">
  </div>

  <div class="form-group">
    <label for="desc">Description:</label>
    <input type="text" class="form-control" name="description">
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