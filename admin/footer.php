<?php
require_once './config.php';
if(empty($_SESSION['user_id']))
{
      header('location:logout.php'); 
}



if (isset($_REQUEST['submit'])) {
   $switch = !empty($_POST['switch'])?$_POST['switch']:''; 
    $main_title = $_REQUEST['main_title'];
    $sub_title = $_REQUEST['sub_title'];
    $address_title = $_REQUEST['address_title'];
    $sub_address = $_REQUEST['sub_address'];
    $designed = $_REQUEST['designed'];
  
    
    
    
    if(!empty($_POST['id']))
    {
          $gettbl_footer = mysqli_query($con, " UPDATE tbl_footer SET switch = '".$switch."',main_title='" . $_POST['main_title'] . "', sub_title='" . $_POST['sub_title'] . "',address_title='" . $_POST['address_title'] . "',sub_address='" . $_POST['sub_address'] . "',designed='" . $_POST['designed'] . "' WHERE id='" . $_POST['id'] . "' ");    
    }
    else
    {
        $gettbl_footer = mysqli_query($con, "INSERT INTO `tbl_footer`(`switch`,`main_title`, `sub_title`,`address_title`,`sub_address`,`designed`) "
            . "VALUES ('".$switch."','" . $_POST['main_title'] . "','" . $_POST['sub_title'] . "','" . $_POST['address_title'] . "','" . $_POST['sub_address'] . "','" . $_POST['designed'] . "')");
    
    }
    
}



$result = mysqli_query($con, "select * from tbl_footer where id = 1 ");
$row = mysqli_fetch_assoc($result);


    



?>

<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Footer</title>
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-icon.png">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="assets/scss/style.css">
    </head>
    <body>


        <?php
        require_once './sidebar.php';
        ?>

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

        <?php
        require_once './header.php';
        ?>


            <div class="breadcrumbs">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Footer</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">Footer</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>






            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="pay-invoice">
                                        <div class="card-body">


                                            <div class="col-md-12">
                                                <h1 style="text-align: center;">Footer</h1>

                                                <div class="col-md-12">
                                                    <div class="container">

                                                        <form name="" action="" method="post" enctype="multipart/form-data">
                                                            
                                                            <div class="form-group">
                                                            <label>Switch</label>
                                                            <input <?= !empty($row['switch']) ? 'checked' : '' ?> type="checkbox"  name="switch" >
                                                             </div>

                                                            <div class="form-group">
                                                                <label>Main Title</label>
                                                                <input name="main_title"  placeholder="Contect" value="<?= !empty($row['main_title']) ? $row['main_title'] : '' ?>" required="" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>Sub Title</label>
                                                                <textarea class="form-control" placeholder="Sub Title" required name="sub_title" ><?= !empty($row['sub_title']) ? $row['sub_title'] : '' ?></textarea>
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Main Sub Title</label>
                                                                <textarea class="form-control" placeholder="Main Sub Title" required name="address_title" ><?= !empty($row['address_title']) ? $row['address_title'] : '' ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Sub Title</label>
                                                                <textarea class="form-control" placeholder="Title" required name="sub_address" ><?= !empty($row['sub_address']) ? $row['sub_address'] : '' ?></textarea>
                                                            </div>
                                                             <div class="form-group">
                                                                <label>Copy</label>
                                                                <textarea class="form-control" placeholder="Copy designed" required name="designed" ><?= !empty($row['designed']) ? $row['designed'] : '' ?></textarea>
                                                            </div>

                                                            <input type="hidden" name="id" value="<?= !empty($row['id']) ? $row['id'] : '' ?>" >
                                                            
                                                            <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>

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
            </div>
            

        </div> 



        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
        <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
       
    </body>
</html>

