<? $currentPage = "office"; ?>
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
                <div class="banner"><img src="img/office/office-banner.jpg" alt=""></div>
                <div class="pull-left leftContent">
                    <div class="buttonContainer">
                        <div class="button sub active">
                            Man Yee Building
                            <a href="office-manyee-overview.php"><div class="subButton">-  Overview</div></a>
                            <a href="office-manyee-facts.php"><div class="subButton">-  Facts & Figures</div></a>
                            <a href="office-manyee-layout.php"><div class="subButton active">-  Layout & Floor Plans</div></a>
                            <a href="office-manyee-gallery.php"><div class="subButton">-  Gallery</div></a>
                            <a href="office-manyee-map.php"><div class="subButton">- Location Map</div></a>
                        </div>
                        <a href="office-pacific-overview.php"><div class="button">Pacific House</div></a>
                        <div class="button">Parker House</div>
                        <div class="button">Prosperous Building</div>
                        <div class="button end">Parker House</div>
                    </div>
                </div>
                <div class="pull-right rightContent">
                    <div class="title">Man Yee Building - Layout & Floor Plans</div>
                    
                    <div id="officeLayout">
                        <div class="pull-left">
                            <div class="leftNav">
                                <div class="nav active">Carpark Floor Plan</div>
                                <div class="nav">Ground Floor Plan</div>
                                <div class="nav">Arcade Level 1 Floor Plan</div>
                                <div class="nav">Arcade Level 2 Floor Plan</div>
                                <div class="nav">Arcade Level 3 Floor Plan</div>
                                <div class="nav">Typical Floor Plan</div>
                                <div class="images"><img src="img/office/office-layout-img01.png" alt=""></div>
                            </div>
                        </div>
                        <div class="pull-right">
                            <div class="subTitle">Carpark floor plan</div>
                            <div class="desc">No. 68 Des Voeux Road Central, No. 31 Pottinger Street and No. 67 Queen’s Road Central, Central, Hong Kong</div>
                            <img src="img/office/office-layout-img00.jpg" alt="">
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                    

                    <div class="clearfix"></div>
                    <div class="lineBlock"></div>
                    <div class="bottomIcon">
                        <a href="office-manyee-overview.php">
                            <div class="icon">
                                <div class="iconDesc">Overview</div>
                                <div class="overlay"></div>
                                <img src="img/office/office-overview-bottom01.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-manyee-facts.php">
                            <div class="icon">
                                <div class="iconDesc">Facts & Figures</div>
                                <div class="overlay"></div>
                                <img src="img/office/office-overview-bottom02.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-manyee-layout.php">
                            <div class="icon active">
                                <div class="iconDesc">Layout & Floor Plans</div>
                                <div class="overlay"></div>
                                <img src="img/office/office-overview-bottom03.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-manyee-gallery.php">
                            <div class="icon">
                                <div class="iconDesc">Gallery</div>
                                <div class="overlay"></div>
                                <img src="img/office/office-overview-bottom04.jpg" alt="">
                            </div>
                        </a>
                        <a href="office-manyee-map.php">
                            <div class="icon end">
                                <div class="iconDesc">Location Map</div>
                                <div class="overlay"></div>
                                <img src="img/office/office-overview-bottom05.jpg" alt="">
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
