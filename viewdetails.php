<?php
include "connection.php";
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
   
    <div id="wrapper">

<!-- Sidebar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
     
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                <center><h1 class="h3 mb-2 text-gray-800" style="font-weight: bold;">Product Details</h1></center>
                    <!--h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6-->
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                <th>Slno</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Product Image</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>  
                                </tr>
                                
                                </thead>
                                <?php
error_reporting(0);
$id=$_GET['id'];
$selectquery = "select * from muditaa order by id desc" ;
$query = mysqli_query($conn,$selectquery);
$total = mysqli_num_rows($query);


						

if($total!=0)
{

while(($result = mysqli_fetch_array($query)))
{
  //$id=$result['id'];
  $img = $result['image'];
?>

<tr>
           <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['cat'] ?></td>
            <td><img src="<?php echo "upload/".$result['upload']; ?>",width="50px", height="50px"/></td>
            <td><?php echo $result['qty'] ?></td>
            <td><?php echo $result['amount'] ?></td>
            <td><?php echo $result['description'] ?></td>
       
<td><button class="btn-success" type="submit" name="submit" onclick="location.href='editdetails.php?&id=<?php echo $result['id']?>'"><i class="fas fa-edit"></i></button></td>
<td>
<form action ='viewdetails.php' method ='POST'>
    <input type = 'hidden' name  ='id' value = "<?php echo $result['id']?>">
   
     <button class="btn-danger" type = 'submit' name  ='reject'><i class="fas fa-trash-alt"></i> </button>
</form>


</td> 

<?php
}

}
else{
echo "table has no records";
}


?>

<?php
if(isset($_POST['reject'])){
$id = $_POST['id'];

$select = "DELETE FROM muditaa WHERE id = '$id'";
$result = mysqli_query($conn, $select);

echo '<script type = "text/javascript">';
echo 'alert("Are you Sure to delete the record?");';
echo 'window.location.href = "viewdetails.php"';
echo '</script>';
}
    ?>
   

    </table>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

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