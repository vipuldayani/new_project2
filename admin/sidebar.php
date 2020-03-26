    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
               
               
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "dashboard.php") {echo "active"; } ?>">
                        <a href="dashboard.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "title.php") {echo "active"; } ?>">
                        <a href="title.php"> <i class="menu-icon fa fa-header"></i>Title </a>
                    </li>
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "logo.php") {echo "active"; } ?>">
                        <a href="logo.php"> <i class="menu-icon fa fa-asterisk"></i>Logo </a>
                    </li>
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "home.php") {echo "active"; } ?>">
                        <a href="home.php"> <i class="menu-icon fa fa-home"></i>Home </a>
                    </li>
                <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "about.php") {echo "active"; } ?>">
                        <a href="about.php"> <i class="menu-icon fa fa-info-circle"></i>About </a>
                    </li>
                    
                <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "featuress.php") {echo "active"; } ?>">
                    <a href="featuress.php"> <i class="menu-icon fa fa-cog"></i>Featuress </a>
                    </li>
                 <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "team.php") {echo "active"; } ?>">
                    <a href="team.php"> <i class="menu-icon fa fa-user"></i> Team </a>
                    </li>
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "portfolio.php") {echo "active"; } ?>">
                        <a href="portfolio.php"> <i class="menu-icon fa fa-user"></i> Portfolio </a>
                                       </li>

                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "contact.php") {echo "active"; } ?>">
                        <a href="contact.php"> <i class="menu-icon fa fa-user"></i>   Contact </a>
                                       </li>
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "shareicon.php") {echo "active"; } ?>">
                        <a href="shareicon.php"> <i class="menu-icon fa fa-share-alt"></i> Share Icon </a>
                                                           </li>
                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "footer.php") {echo "active"; } ?>">
                        <a href="footer.php"> <i class="menu-icon fa fa-home"></i> Footer </a>
                                                           </li>

                    <li class="<?php if (basename($_SERVER['REQUEST_URI']) == "adminlogin.php") {echo "active"; } ?>">
                        <a href="adminlogin.php"> <i class="menu-icon fa fa-user"></i> Admin Login </a>
                                       </li>
                                       
                </ul>
            </div>
        </nav>
    </aside>
