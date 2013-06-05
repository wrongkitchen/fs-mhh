<? $currentPage = "office"; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Man Hing Hong - Office</title>
<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="components/fancybox/source/jquery.fancybox.css">
<link rel="stylesheet" href="css/common.css" />
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50362fb3300d3682"></script>
<script type="text/javascript" data-main="js/main.js" src="components/requirejs/require.js"></script>
</head>

<body>
    <div class="wrapper">
        
        <?php require_once("header.php"); ?>
        
        <div id="mainContent" class="leftrightContent">
            <div class="container">
                <div class="banner"><img src="img/office/office-banner.jpg" alt=""></div>
                <div class="pull-left leftContent">
                    <div class="buttonContainer">
                        <a href="office-manyee-overview.php"><div class="button">Man Yee Building</div></a>
                        <div class="button sub active">
                            Pacific House
                            <a href="office-pacific-overview.php"><div class="subButton">-  Overview</div></a>
                            <a href="office-pacific-facts.php"><div class="subButton">-  Facts & Figures</div></a>
                            <a href="office-pacific-layout.php"><div class="subButton active">-  Layout & Floor Plans</div></a>
                            <a href="office-pacific-gallery.php"><div class="subButton">-  Gallery</div></a>
                            <a href="office-pacific-map.php"><div class="subButton">- Location Map</div></a>
                        </div>
                        <div class="button">Parker House</div>
                        <div class="button">Prosperous Building</div>
                        <div class="button end">Parker House</div>
                    </div>
                </div>
                <div class="pull-right rightContent">
                    <div class="title">Pacific House - Layout & Floor Plans</div>
                    
                    <div id="officeLayout">
                        <div class="pull-left">
                            <div class="leftNav">
                                <div class="nav">Basement Floor Plan</div>
                                <div class="nav">Ground Floor Plan</div>
                                <div class="nav">1/F Plan</div>
                                <div class="nav active">Typical Floor Plan<br />(single tenancy version)</div>
                                <div class="nav">Typical Sub-Divided Floor Plan<br />(multi-tenancy version)</div>
                                <div class="images"><img src="img/office/pacific-house/office-pacific-layout01.png" alt=""></div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="subTitle">Typical floor plan</div>
                            <div class="desc">Pacific House, 20-20B Queen’s Road Central, Hong Kong</div>
                            <img src="img/office/pacific-house/office-pacific-layout00.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                    

                    <div class="clearfix"></div>
                    <div class="lineBlock"></div>
                    <div class="bottomIcon">
                        <a href="office-pacific-overview.php">
                            <div class="icon">
                                <div class="iconDesc">Overview</div>
                                <div class="overlay"></div>
                                <img src="img/office/pacific-house/office-pacific-overview04.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-pacific-facts.php">
                            <div class="icon">
                                <div class="iconDesc">Facts & Figures</div>
                                <div class="overlay"></div>
                                <img src="img/office/pacific-house/office-pacific-overview05.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-pacific-layout.php">
                            <div class="icon active">
                                <div class="iconDesc">Layout & Floor Plans</div>
                                <div class="overlay"></div>
                                <img src="img/office/office-overview-bottom03.jpg" alt="">
                            </div>
                        </a>
                       <a href="office-pacific-gallery.php">
                            <div class="icon">
                                <div class="iconDesc">Gallery</div>
                                <div class="overlay"></div>
                                <img src="img/office/pacific-house/office-pacific-overview07.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-pacific-map.php">
                            <div class="icon end">
                                <div class="iconDesc">Location Map</div>
                                <div class="overlay"></div>
                                <img src="img/office/pacific-house/office-pacific-overview08.jpg" alt="">
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
