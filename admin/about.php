<?php
require_once './config.php';

if(empty($_SESSION['user_id']))
{
      header('location:logout.php'); 
}


if (isset($_REQUEST['submit'])) {
    $main_title = $_REQUEST['main_title'];
    $sub_title = $_REQUEST['sub_title'];
    $about_title = $_REQUEST['about_title'];
    $title = $_REQUEST['title'];
    
    
    $switch = !empty($_POST['switch'])?$_POST['switch']:'';
    if(!empty($_POST['id']))
    {
          $gettbl_about = mysqli_query($con, " UPDATE tbl_about SET switch = '".$switch."', main_title='" . $_POST['main_title'] . "', sub_title='" . $_POST['sub_title'] . "',about_title='" . $_POST['about_title'] . "',title='" . $_POST['title'] . "' WHERE id='" . $_POST['id'] . "' ");    
    }
    else
    {
        $gettbl_about = mysqli_query($con, "INSERT INTO `tbl_about`(`switch`, `main_title`, `sub_title`,`about_title`,`title`) "
            . "VALUES ('".$switch."','" . $_POST['main_title'] . "','" . $_POST['sub_title'] . "','" . $_POST['about_title'] . "','" . $_POST['title'] . "')");
    
    }
    
}



if (isset($_REQUEST['imageSubmit'])) {
    
    
    
    if (!empty($_FILES["user_image"]["name"])) {

           $image = $_FILES["user_image"]["name"];
           $upload_image = $_FILES["user_image"]["name"];
           $folder = "images/";
           move_uploaded_file($_FILES["user_image"]["tmp_name"], $folder . $_FILES["user_image"]["name"]);
   } else {
           $image = $_POST['old_image_name'];
   }
   
   if(!empty($_POST['id']))
   {
       mysqli_query($con, "UPDATE tbl_about_image SET image = '".$image."' where id = '".$_POST['id']."' ");
        
   }
   else
   {
       $gettbl_about_image= mysqli_query($con, "INSERT INTO tbl_about_image(`image`) "
                . "VALUES ('" . $image . "')");
        
   }
       
}

$result = mysqli_query($con, "select * from tbl_about where id = 1 ");
$row = mysqli_fetch_assoc($result);


    



?>

<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>About</title>
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
                            <h1>About</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">About</li>
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
                                                <h1 style="text-align: center;">About</h1>

                                                <div class="col-md-12">
                                                    <div class="container">

                                                        <form name="" action="" method="post" enctype="multipart/form-data">
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label>	Switch</label>
                                                                <input <?= !empty($row['switch']) ? 'checked' : '' ?> type="checkbox"  name="switch" >
                                                            </div>
                                                            <div class="form-group">
                                                                <label>About</label>
                                                                <input name="about_title"  placeholder="About Title" value="<?= !empty($row['about_title']) ? $row['about_title'] : '' ?>" required="" class="form-control">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label>Main Title</label>
                                                                <textarea class="form-control" placeholder="Main Title" required name="main_title" ><?= !empty($row['main_title']) ? $row['main_title'] : '' ?></textarea>
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Main Sub Title</label>
                                                                <textarea class="form-control" placeholder="Sub Title" required name="sub_title" ><?= !empty($row['sub_title']) ? $row['sub_title'] : '' ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Sub Title</label>
                                                                <textarea class="form-control" placeholder="Title" required name="title" ><?= !empty($row['title']) ? $row['title'] : '' ?></textarea>
                                                            </div>

                                                            <input type="hidden" name="id" value="<?= !empty($row['id']) ? $row['id'] : '' ?>" >
                                                            <input type="hidden" name="old_image_name" value="<?= !empty($row['image']) ? $row['image'] : '' ?>" >
                                                            
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
            <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="pay-invoice">
                                        <div class="card-body">
<?php

$result = mysqli_query($con, "select * from tbl_about_image where id = 1 ");
$row = mysqli_fetch_assoc($result);

?>
             
                    <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                    <label class=" form-control-label">Image</label>
                    <div class="input-group">
                    <input type="file" name="user_image">
                    <?php
                    if($row['image'])
                    {
                    ?>
                    <img width="200" height="200" src="images/<?=$row['image']?>">
                    <?php
                    }
                    ?>
                    <input type="hidden" value="<?=!empty($row['image'])?$row['image']:''?>" name="old_image_name">
                    <input type="hidden" value="<?=!empty($row['id'])?$row['id']:''?>" name="id">
                    </div>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="imageSubmit" value="imageSubmit" id="submit_form" style="margin-top: 10px;">Submit</button>
                    <span id="user_uploaded_image"></span>
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

