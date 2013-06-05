<? $currentPage = "about"; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>MHN</title>
<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="css/common.css" />
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-50362fb3300d3682"></script>
<script type="text/javascript" data-main="js/main.js" src="components/requirejs/require.js"></script>
</head>

<body>
    <div class="wrapper">
        
        <?php require_once("header.php"); ?>
        
        <div id="mainContent" class="leftrightContent">
            <div class="container">
                <div class="banner"><img src="img/about/about-banner.jpg" alt=""></div>
                <div class="pull-left leftContent">
                    <div class="buttonContainer">
                        <a href="about.php"><div class="button active">Overview</div></a>
                        <a href="about-profile.php"><div class="button">Corporate Profile</div></a>
                        <a href="about-history.php"><div class="button end">History & Milestones</div></a>
                    </div>
                </div>
                <div class="pull-right rightContent">
                    <div class="title">Overview</div>
                    <div class="subTitle">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    <div class="featContainer">
                        <a href="about-profile.php">
                            <div class="feat shrink">
                                <div class="title">Company’s Profile</div>
                                <div class="image"><img src="img/about/feat-00.jpg" alt=""></div>
                                <div class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                                <div class="more">MORE<span class="blueArrow"></span></div>
                            </div>
                        </a>
                        <a href="about-history.php">
                            <div class="feat shrink end">
                                <div class="title">Company’s Profile</div>
                                <div class="image"><img src="img/about/feat-01.jpg" alt=""></div>
                                <div class="desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
                                <div class="more">MORE<span class="blueArrow"></span></div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>
        
    </div>
</body>
</html>
