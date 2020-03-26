<?php

require_once './admin/config.php';
// logo
$result_logo = mysqli_query($con, "select * from tbl_logo where id = 1 ");
$row_logo = mysqli_fetch_assoc($result_logo);
    


//end logo




// home
$result_home = mysqli_query($con, "select * from tbl_home where id = 1 ");
$row_home = mysqli_fetch_assoc($result_home);
// end home
// title
$result_title = mysqli_query($con, "select * from tbl_title where id = 1 ");
$row_title = mysqli_fetch_assoc($result_title);
    

// end title
// 
// About
$result_about = mysqli_query($con, "select * from tbl_about where id = 1 ");
$row_about = mysqli_fetch_assoc($result_about);
// about image

$result_about_image = mysqli_query($con, "select * from tbl_about_image");

// end About
//
// Product Featuress

$result_featuress = mysqli_query($con, "select * from tbl_featuress where id = 1 ");
$row_featuress = mysqli_fetch_assoc($result_featuress);
//
$result_icons = mysqli_query($con, "select * from tbl_featuress_icon");
$row_icons = mysqli_fetch_assoc($result_icons);



//Product Featuress
$result_featuress_image = mysqli_query($con, "select * from tbl_featuress_image");

// end Product Featuress
//
// our team

$result_team = mysqli_query($con, "select * from tbl_team where id = 1 ");
$row_team = mysqli_fetch_assoc($result_team);

// our team image
$result_team_image = mysqli_query($con, "select * from tbl_team_image");

// end team
//
// Gallery

$result_portfolio = mysqli_query($con, "select * from tbl_portfolio where id = 1 ");
$row_portfolio = mysqli_fetch_assoc($result_portfolio);

//  Gallery image
$result_portfolio_image = mysqli_query($con, "select * from tbl_portfolio_image");

// end Gallery

// share icon
$result_shareicon = mysqli_query($con, "select * from tbl_shareicon");
// end shareicon

// contect footer

$result_footer = mysqli_query($con, "select * from tbl_footer where id = 1 ");
$row_footer = mysqli_fetch_assoc($result_footer);

// end contect footer

// contect
if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $gettbl_contact = mysqli_query($con," INSERT INTO tbl_contacts(name,email,subject,message)"
            
            . "VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['subject']."','".$_POST['message']."')");
}
$select_query = mysqli_query($con, "SELECT * FROM `tbl_contacts` ");
// end contect

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?=$row_title['title_main_title']?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="<?=$row_title['title_sub_title']?>" name="keywords">
        <meta content="<?=$row_title['title_text1']?>" name="description">
        <link href="admin/images/<?= $row_logo['image']?>" rel="icon">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/animate.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/ionicons.min.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
       
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <header id="header">
            <div class="container">
                <div id="logo" class="pull-left">
                    <h1><a href="#intro" class="scrollto"><img src="admin/images/<?= $row_logo['image']?>"></a></h1>
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <?php
                        if(!empty($row_home['switch']))
                        {
                        ?>
                        
                       <li class="menu-active"><a href="#intro">Home</a></li>
                       <?php } ?>
                       <?php
                        if(!empty($row_about['switch']))
                        {
                        ?>
                       <li><a href="#about">About Us</a></li>
                       <?php } ?>
                       <?php
                        if(!empty($row_featuress['switch']))
                        {
                        ?>
                       
                        <li><a href="#features">Features</a></li>
                       <?php } ?>
                       <?php
                        if(!empty($row_team['switch']))
                        {
                        ?> 
                        <li><a href="#team">Team</a></li>
                       <?php } ?>
                        <?php
                        if(!empty($row_portfolio['switch']))
                        {
                        ?> 
                        <li><a href="#gallery">Gallery</a></li>
                        <?php } ?>
                        <?php
                        if(!empty($row_footer['switch']))
                        {
                        ?> 
                    
                        <li><a href="#contact">Contact Us</a></li>
                    <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
       <?php
       if(!empty($row_home['switch']))
       {
       ?> 
        <section id="intro">

            <div class="intro-text">
                <h2><?=$row_home['main_title']?></h2>
                <p><?=$row_home['sub_title']?></p>
                <a href="#about" class="btn-get-started scrollto"><?=$row_home['click_title']?></a>
            </div>
        </section>
       <?php } ?>
        
        <main id="main">
            <?php
       if(!empty($row_about['switch']))
       {
       ?> 
            <section id="about" class="section-bg">
                <div class="container-fluid">
                    <div class="section-header">
                        <h3 class="section-title"><?=$row_about['about_title']?></h3>
                        <span class="section-divider"></span>
                        <p class="section-description"><?=$row_about['main_title']?>
                          
                        </p>
                    </div>

                    <div class="row">
                        
                        <?php
                    while ($row_about_image =  mysqli_fetch_assoc($result_about_image))
                    {
                    ?>
                        <div class="col-lg-6 about-img wow fadeInLeft">

                            <img src="img/<?=$row_about_image['image']?>" alt="">

                        </div>
                    <?php 

                    } ?>
                        <div class="col-lg-6 content wow fadeInRight">
                            <h2><?=$row_about['sub_title']?></h2>
                            
                            <p>
                          
                            </p>

                            <ul>
                                <li><i class="fa fa-space-shuttle size"></i><?=$row_about['title']?> </li>
                                <li><i class="fa fa-space-shuttle size"></i><?=$row_about['title']?> </li>
                              <li><i class="fa fa-space-shuttle size"></i><?=$row_about['title']?> </li>   
                            </ul>

                            <p>
                       
                            </p>
                        </div>
                    </div>

                </div>
            </section> 
       <?php } ?>
              <?php
       if(!empty($row_featuress['switch']))
       {
       ?> 
            <section id="features">
                <div class="container">

                    <div class="row">

                        <div class="col-lg-8 offset-lg-4">
                            <div class="section-header wow fadeIn" data-wow-duration="1s">
                                <h3 class="section-title"><?=$row_featuress['main_title']?></h3>
                                <span class="section-divider"></span>
                            </div>
                        </div>
                    <?php
                    while ($row_featuress_image =  mysqli_fetch_assoc($result_featuress_image))
                    {
                    ?>
                        <div class="col-lg-4 col-md-5 features-img">
                            <img src="img/<?=$row_featuress_image['image']?>" alt="" class="wow fadeInLeft">
                        </div>
                        <?php
                        }
                        ?>

                        <div class="col-lg-8 col-md-7 ">

                            <div class="row">
 
                        <?php
                    while ($row_icons =  mysqli_fetch_assoc($result_icons))
                    {
                    ?>
                                <div class="col-lg-6 col-md-6 box wow fadeInRight">
                                    <div class="icon"><i class="<?=$row_icons['icon1']?>"></i></div>
                                    <h4 class="title"><a href=""><?=$row_icons['sub_title1']?></a></h4>
                                    <p class="description"><?=$row_icons['last_title1']?></p>
                                </div>
                    <?php } ?>
                                
                            </div>

                        </div>

                    </div>

                </div>

       </section><?php } ?>
            
       <?php
       if(!empty($row_team['switch']))
       {
       ?> 
            <section id="team" class="section-bg">
                <div class="container">
                    <div class="section-header">
                        <h3 class="section-title"><?=$row_team['main_title']?></h3>
                        <span class="section-divider"></span>
                        <p class="section-description"> <?=$row_team['latest_title']?></p>
                    </div>
                    <div class="row wow fadeInUp">
                        
                        <?php
                    while ($row_team_image =  mysqli_fetch_assoc($result_team_image))
                    {
                    ?>
                        
                        <div class="col-lg-3 col-md-6">

                            <div class="member">
                                <div class="pic"><img src="img/<?=$row_team_image['image']?>" alt=""></div> 
                                <h4><?=$row_team_image['name']?></h4>
                                
                                
                            </div>

                        </div>

                    <?php }
                    ?>

                     
                    </div>

                </div>
            </section>
       <?php } ?>
             <?php
       if(!empty($row_portfolio['switch']))
       {
       ?> 
            <section id="gallery">
                <div class="container-fluid">
                    <div class="section-header">
                        <h3 class="section-title"><?=$row_portfolio['one_title']?></h3>
                        <span class="section-divider"></span>
                        <p class="section-description"><?=$row_portfolio['two_title']?></p>
                    </div>

                    <div class="row no-gutters">

                         <?php
                    while ($row_portfolio_image =  mysqli_fetch_assoc($result_portfolio_image))
                    {
                    ?>
                        
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-item wow fadeInUp">
                                <a href="img/<?=$row_portfolio_image['image']?>" class="gallery-popup">
                                    <img src="img/<?=$row_portfolio_image['image']?>" alt="">
                                </a>
                            </div>
                        </div>

                        

                    <?php 
                    
                    }
                    ?>

                        

                      


                    </div>

                </div>
            </section>
       <?php } ?>
                  <?php
       if(!empty($row_footer['switch']))
       {
       ?> 
            <section id="contact">

                <div class="container-fluid">

                    <div class="section-header">
                        <h3 class="section-title"><?=$row_footer['main_title']?></h3>
                        <span class="section-divider"></span>
                        <p class="section-description">
                        <?=$row_footer['sub_title']?></p>
                    </div>
                    <div class="container">
                        <div class="row wow fadeInUp">

                            <div class="col-lg-4 col-md-4">
                                <div class="contact-about">
                                    <h3><?=$row_footer['address_title']?></h3>
                                    <p><?=$row_footer['sub_address']?></p>
                                                
                                                                           <div class="social-links">
                                        <?php
                                      
                    while ($row_shareicon =  mysqli_fetch_assoc($result_shareicon))
                    {
                    ?>
                          
 
                                        <a href="<?=$row_shareicon['link']?>" class="twitter"><i class="<?=$row_shareicon['icon']?>"></i></a>
                                        
                                    
                    <?php }
                    ?>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="form">
                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                    <div id="errormessage"></div>
                                    <form action="" method="post" role="form" class="contactForm">
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                <div class="validation"></div>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validation"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                            <div class="validation"></div>
                                        </div>
                                        <div class="text-center"><button type="submit" title="Send Message" name="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
                <?php } ?>
        </main>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-lg-left text-center">
                        <div class="copyright">
                             <strong><?=$row_footer['designed']?></strong>
                        </div>
                        <div class="credits">

                             <a href="https://www.bladephp.co/">bladephp</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                            <a href="#intro" class="scrollto">Home</a>
                            <a href="#about" class="scrollto">About</a>
                            <a href="#features" class="scrollto">Features</a>
                            
                            <a href="#team" class="scrollto">Team</a>
                            <a href="#gallery" class="scrollto">Gallery</a>
                            <a href="#contact" class="scrollto">Contact Us</a>
                            
                        </nav>
                    </div>
                </div>
            </div>
        </footer><!-- #footer -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <script src="js/jquery.min.js"></script>
        <script src="js/easing.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/superfish.min.js"></script>
        <script src="js/magnific-popup.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
