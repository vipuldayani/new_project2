<?php
require_once './config.php';
$sql=  "SELECT * FROM `tbl_contacts`";
$records = mysqli_query($con,$sql);

if(empty($_SESSION['user_id']))
{
      header('location:logout.php'); 
}

?>
<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Contact</title>
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
                            <h1>contact</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li class="active">contact</li>
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
                        <div class="card-header">
                            <strong class="card-title">contact</strong>
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                        
                                    <table class="table">
                                       
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    <tbody>
                                                    <?php
                                                    $result= mysqli_query($con, "select * from tbl_contacts");
                                                    while ($row_contect= mysqli_fetch_assoc($result))
                                                    {
                                                        
                                                    ?>
                                                    <tr>
                                                        <td><?= $row_contect['name'] ?></td>
                                                        <td><?= $row_contect['email'] ?></td>
                                                        <td><?= $row_contect['subject'] ?></td>
                                                        <td><?= $row_contect['message'] ?></td>
                                                        <td>
                                                            <a href="contactdelete.php?id=<?= $row_contect['id'] ?>" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                        
                                                    ?>
                                                </tbody> 
             
                                        
                                        
                                        
                                    </table>
                                    
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
<script>
    (function ($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>
</html>

<script type="text/javascript" language="javascript">

    $(document).ready(function () {
        $('#add_button').click(function () {
            $('#user-form')[0].reset();
            $('.model-title').text("Add Usur");
            $('#action').val("Add");
            $('#operation').val("Add");
            $('#user_uploaded_image').html('');
        });
        var dataTable = $('#user_data').dataTable(
                );

    });



</script>