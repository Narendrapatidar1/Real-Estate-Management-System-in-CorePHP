        <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['useruid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                     <?php
$uid=$_SESSION['useruid'];
$sql="SELECT FirstName,LastName,Img from user where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                    <img src="img/<?php echo htmlentities($result->Img);?>" width="100" height="100" style="border:solid 0.5px #000">
                    
                    <h3><?php  echo $row->FirstName;?>  <?php  echo $row->LastName;?></h3>
                    <?php $cnt=$cnt+1;}} ?>
                   
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="dashboard.php" role="button" aria-expanded="false"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Dashboard</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="addproperty.php" role="button" aria-expanded="false"><i class="fa big-icon fa-plus"></i> <span class="mini-dn">Add Property</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="propertylist.php" role="button" aria-expanded="false"><i class="fa big-icon fa-list"></i> <span class="mini-dn">Property List</span> </a>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-search"></i> <span class="mini-dn">Search Property</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="search_by_propertyname.php" class="dropdown-item">By Property Name</a>
                                <a href="search_by_propertytype.php" class="dropdown-item">By Property Type</a>
                                <a href="search_by_price.php" class="dropdown-item">By Price</a>
                                <a href="search_by_location.php" class="dropdown-item">By Location</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="change-password.php" role="button" aria-expanded="false"><i class="fa big-icon fa-lock"></i> <span class="mini-dn">Change Password</span> </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" role="button" aria-expanded="false"><i class="fa big-icon fa-sign-out"></i> <span class="mini-dn">Log Out</span> </a>
                        </li>
                   
                    </ul>
                </div>
            </nav>
        </div><?php }  ?>
