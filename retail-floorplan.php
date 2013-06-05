<? $currentPage = "retail"; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Man Hing Hong - Retail</title>
<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="components/fancybox/source/jquery.fancybox.css">
<link rel="stylesheet" href="css/common.css" />
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50362fb3300d3682"></script>
<script type="text/javascript" data-main="js/main.js" src="components/requirejs/require.js"></script>
</head>

<body>
    <div class="wrapper">
        
        <?php require_once("header.php"); ?>
        
        <div id="mainContent" class="leftrightContent retail">
            <div class="banner">
                <table>
                    <tr>
                        <td>Man Yee arcade</td>
                    </tr>
                </table>
            </div>
            <div class="container">
                <div class="pull-left leftContent">
                    <div class="buttonContainer">
                        <div class="button sub active end">
                            Man Yee Building
                            <a href="retail-overview.php">
                                <div class="subButton">- Overview</div>
                            </a>
                            <a href="retail-shopping.php">
                                <div class="subButton">- Shopping</div>
                            </a>
                            <a href="retail-dining.php">
                                <div class="subButton">- Dining</div>
                            </a>
                            <a href="retail-happening.php">
                                <div class="subButton">- Happenings</div>
                            </a>
                            <a href="retail-parking.php">
                                <div class="subButton">- Parking</div>
                            </a>
                            <a href="retail-floorplan.php">
                                <div class="subButton active">- Floor Plan</div>
                            </a>
                            <a href="retail-map.php">
                                <div class="subButton">- Location Map</div>
                            </a>
                        </div>
                    </div>
                    <div id="retailOverDescImage">
                        <div class="descImageContainer">
                            <div class="descImage">
                                <img src="img/retail/retail-left00.jpg" alt="">
                                <div class="descImageTxt">Dawning House</div>
                            </div>
                        </div>
                        <div class="descImageContainer">
                            <div class="descImage">
                                <img src="img/retail/retail-left01.jpg" alt="">
                                <div class="descImageTxt">Prosperous House</div>
                            </div>
                        </div>
                        <div class="descImageContainer">
                            <div class="descImage">
                                <img src="img/retail/retail-left02.jpg" alt="">
                                <div class="descImageTxt">Pacific House</div>
                            </div>
                        </div>
                        <div class="descImageContainer">
                            <div class="descImage">
                                <img src="img/retail/retail-left03.jpg" alt="">
                                <div class="descImageTxt">Parker House</div>
                            </div>
                        </div>
                        <div class="descImageContainer">
                            <div class="descImage">
                                <img src="img/retail/retail-left04.jpg" alt="">
                                <div class="descImageTxt">Luard on the Park</div>
                            </div>
                        </div>
                        <div class="descImageContainer">
                            <div class="descImage">
                                <img src="img/retail/retail-left05.jpg" alt="">
                                <div class="descImageTxt">Harmony Mansion</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pull-right rightContent">
                    <div class="subTitle">FLOOR PLAN</div><br />
                    <div class="lineBlock"></div><br />
                    <img src="img/retail/retail-floorplan00.jpg" alt="">
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>
        
    </div>
</body>
</html>
