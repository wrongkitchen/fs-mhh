<? $currentPage = "retail"; ?>
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
        
        <div id="mainContent">
            <div class="slideshowContainer" id="retailOverviewSlideshow">
                <div class="container" style="position:relative;">
                    <a href="retail-overview.php">
                        <div class="slideshowDesc">
                            <div class="title">MAN YEE ARCADE</div>
                            <div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised.</div>
                            <div class="more">Read more</div>
                        </div>
                    </a>
                    <div class="slideshow">
                        <div class="slideshow-container">
                            <div class="slide">
                                <img src="img/retail/retail-banner.jpg" width="1332" height="655" alt="">
                            </div>
                            <div class="slide">
                                <img src="img/retail/retail-banner.jpg" width="1332" height="655" alt="">
                            </div>
                            <div class="slide">
                                <img src="img/retail/retail-banner.jpg" width="1332" height="655" alt="">
                            </div>
                            <div class="slide">
                                <img src="img/retail/retail-banner.jpg" width="1332" height="655" alt="">
                            </div>
                        </div>
                        <div class="slideNav"></div>
                    </div>
                </div>
                <div class="thumbGroup">
                    <div class="container">
                        <div class="thumb head">
                            <table width="100%" height="100%">
                                <tr>
                                    <td align="left">OTHER<br />BUILDING</td>
                                </tr>
                            </table>
                        </div>
                        <a href="#"><div class="thumb"><div class="thumbTitle">Dawning House</div><img src="img/retail/retail-thumb00.jpg" alt=""></div></a>
                        <a href="#"><div class="thumb"><div class="thumbTitle">Pacific House</div><img src="img/retail/retail-thumb01.jpg" alt=""></div></a>
                        <a href="#"><div class="thumb"><div class="thumbTitle">Parker House</div><img src="img/retail/retail-thumb02.jpg" alt=""></div></a>
                        <a href="#"><div class="thumb"><div class="thumbTitle">Prosperous House</div><img src="img/retail/retail-thumb03.jpg" alt=""></div></a>
                        <a href="#"><div class="thumb"><div class="thumbTitle">Luard on the Park</div><img src="img/retail/retail-thumb04.jpg" alt=""></div></a>
                        <a href="#"><div class="thumb"><div class="thumbTitle">Harmony Mansion</div><img src="img/retail/retail-thumb05.jpg" alt=""></div></a>
                        <div class="clearfloat"></div> 
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>
        
    </div>
</body>
</html>
