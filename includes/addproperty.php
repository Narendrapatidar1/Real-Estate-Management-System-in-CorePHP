
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(strlen($_SESSION['useruid'])==0) 
{
  header('location:logout.php');
  } 
  else{
       if(isset($_POST['submit']))
  {
    $propertyname = $_POST['propertyname'];
    $propertytype = $_POST['propertytype'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $details = $_POST['details'];
    $file = $_FILES['img']['tmp_name'];

    $img= addslashes(file_get_contents($_FILES['img']['tmp_name']));
    move_uploaded_file($_FILES["img"]["tmp_name"],"img/".$_FILES["img"]["name"]);

$sql = "INSERT INTO addproperty(propertyname,propertytype,price,location,description,image)VALUES(:propertyname,:propertytype,:price,:location,:details,:img)";
$query=$dbh->prepare($sql);
$query->bindParam(':propertyname',$propertyname,PDO::PARAM_STR);
$query->bindParam(':propertytype',$propertytype,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->bindParam(':details',$details,PDO::PARAM_STR);
$query->bindParam(':img',$img,PDO::PARAM_STR);
$query->execute();

   $LastInsertId = $dbh->lastInsertId();
   if ($LastInsertId) {
    echo '<script>alert("Property Added to the list.")</script>';
    echo "<script>window.location.href ='addproperty.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
         echo "<script>window.location.href ='addproperty.php'</script>";
    }
}  

}
  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>Add Property Details</title>
   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
  
    <div class="wrapper-pro">
   <?php include_once('includes/sidebar.php');?>
        <?php include_once('includes/header.php');?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                   
                                    <div class="col-lg-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="dashboard.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Property</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Add Property</h1>
                                        <div class="sparkline12-outline-icon">
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                                    
                                                    <form method="post" enctype="multipart/form-data>
                                                        
                                                       <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Property Name</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                       <p style="text-align: left;"><input type="radio"  name="propertyname" id="propertyname" value="House" checked="true"> House 
                                                                       <input type="radio"  name="propertyname" id="propertyname" value="Flat"> Flat
                                                                       <input type="radio"  name="propertyname" id="propertyname" value="Office"> Office
                                                                       <input type="radio"  name="propertyname" id="propertyname" value="Plot"> Plot</p>
             
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9">
                                                                    <label class="login2 pull-right pull-right-pro"><span class="basic-ds-n">Property Type</span></label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-3 col-sm-3 col-xs-3">
                                                                    <div class="bt-df-checkbox">
                                                                       <p style="text-align: left;"> <input type="radio"  name="propertytype" id="propertytype" value="Rent" checked="true"> Rent</p>
                                                                       <p style="text-align: left;"> <input type="radio" name="propertytype" id="propertytype" value="Sell"> Sell</p>
                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group-inner">
                                                         <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="login-input-head">
                                                                       <label class="login2 pull-right pull-right-pro">Property Image</label>
                                                                </div>
                                                             </div>
                                                             <div class="col-lg-9">
                                                                 <input type="file" name="img" required="true" /> 
                
                                                               </div>
                                                              </div>
                                                            </div>
                                                         
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Price</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" name="price" value="" required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Location</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" value="" name="location" required="true"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Description</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <textarea type="text" class="form-control" name="details" value="" required="true" /></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-3"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                            
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Add Property</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form End-->

        </div>
    </div>
  
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- modal JS
		============================================ -->
    <script src="js/modal-active.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>
