       <?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['useruid']==0)) {
  header('location:logout.php');
  } else{


  ?>
 <div class="content-inner-all">
            <div class="header-top-area">
                <div class="fixed-header-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div><?php }  ?>
