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
                                <div class="subButton active">- Dining</div>
                            </a>
                            <a href="retail-happening.php">
                                <div class="subButton">- Happenings</div>
                            </a>
                            <a href="retail-parking.php">
                                <div class="subButton">- Parking</div>
                            </a>
                            <a href="retail-floorplan.php">
                                <div class="subButton">- Floor Plan</div></a>
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
                <div class="pull-right rightContent" id="retailShopping">
                    <div class="pull-left subTitle">Dining Directory</div>
                    <div class="pull-right">
                        <select name="" id="">
                            <option value="ALL">ALL</option>
                            <option value="abc">ABC</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    
                    <a href="javascript:void(0)" onclick="window.swapView('products', 'thumbnailMode')">
                        <div class="listBtn active">Graphic View</div>
                    </a>
                    <a href="javascript:void(0)" onclick="window.swapView('products', 'listMode')">
                        <div class="listBtn">List View</div>
                    </a>
                    <div class="clearfix"></div>
                    <div class="lineBlock"></div>
                    <div class="products" id="listMode">
                        <div class="listing">
                            <div class="news">
                                <a href="#">
                                    <div class="date">Initial</div>
                                    <div class="content1">Fashion</div>
                                    <div class="content2">Shop G01</div>
                                    <div class="download">MORE</div>  
                                    <div class="clearfix"></div>  
                                </a>
                            </div>
                            <div class="news even">
                                <a href="#">
                                    <div class="date">Samsonite</div>
                                    <div class="content1">Accessories</div>
                                    <div class="content2">Shop G02</div>
                                    <div class="download">MORE</div> 
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            <div class="news">
                                <a href="#">
                                    <div class="date">6IXTY 8IGHT</div>
                                    <div class="content1">Fashion & Accessories</div>
                                    <div class="content2">Shop 111</div>
                                    <div class="download">MORE</div>  
                                    <div class="clearfix"></div>  
                                </a>
                            </div>
                            <div class="news even">
                                <a href="#">
                                    <div class="date">7 For All Mankind</div>
                                    <div class="content1">Lifestyle, Golf, Electronics & Music</div>
                                    <div class="content2">Shop 201</div>
                                    <div class="download">MORE</div> 
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="news">
                                <a href="#">
                                    <div class="date">ABC Golf</div>
                                    <div class="content1">Fashion & Accessories</div>
                                    <div class="content2">Shop 210</div>
                                    <div class="download">MORE</div>  
                                    <div class="clearfix"></div>  
                                </a>
                            </div>
                            <div class="news even">
                                <a href="#">
                                    <div class="date">Abebi</div>
                                    <div class="content1">Kids’ World</div>
                                    <div class="content2">Shop 222-225</div>
                                    <div class="download">MORE</div> 
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            
                            <div class="news">
                                <a href="#">
                                    <div class="date">Columbia</div>
                                    <div class="content1">Fashion & Accessories</div>
                                    <div class="content2">Shop 301</div>
                                    <div class="download">MORE</div>  
                                    <div class="clearfix"></div>  
                                </a>
                            </div>
                            <div class="news even">
                                <a href="#">
                                    <div class="date">AGATHA</div>
                                    <div class="content1">Jewelry & Watches</div>
                                    <div class="content2">Shop 312</div>
                                    <div class="download">MORE</div> 
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                            <div class="news">
                                <a href="#">
                                    <div class="date">agnès b.</div>
                                    <div class="content1">Fashion & Accessories</div>
                                    <div class="content2">Shop 317</div>
                                    <div class="download">MORE</div>  
                                    <div class="clearfix"></div>  
                                </a>
                            </div>
                            <div class="news even">
                                <a href="#">
                                    <div class="date">AIGLE</div>
                                    <div class="content1">Fashion & Accessories</div>
                                    <div class="content2">Shop 334</div>
                                    <div class="download">MORE</div> 
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="products" id="thumbnailMode">
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping00.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping01.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping02.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage end"><img src="img/retail/retail-shopping03.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping04.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping05.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping06.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage end"><img src="img/retail/retail-shopping07.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping08.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping09.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage"><img src="img/retail/retail-shopping10.jpg" alt=""></div></a>
                        <a href="javascript:void(0)" onclick="showShoppingProduct('shoppingProduct00')"><div class="listImage end"><img src="img/retail/retail-shopping11.jpg" alt=""></div></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>
        
    </div>
    <div class="modal fade popupContent" id="shoppingProduct00">
        <div class="close"></div>
        <div class="leftContent">
            <div class="galleryContainer">
                <div class="image"><img src="img/retail/retail-shopping-popup04.jpg" alt=""></div>
                <div class="thumbContainer">
                    <div class="thumb"><img src="img/retail/retail-shopping-popup03.jpg" alt=""></div>
                    <div class="thumb"><img src="img/retail/retail-shopping-popup02.jpg" alt=""></div>
                    <div class="thumb"><img src="img/retail/retail-shopping-popup01.jpg" alt=""></div>
                    <div class="thumb end"><img src="img/retail/retail-shopping-popup00.jpg" alt=""></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="rightContent">
            <img src="img/retail/retail-shopping-logo.jpg" alt=""><br />
            <div class="type">Accessories</div>
            <div class="shopNum pull-left">Shop G02</div>
            <a href="javascript:void(0)"><div class="floorplan pull-right">Floor Plan</div></a>
            <div class="clearfix"></div>
            <div class="lineBlock"></div>
            <div class="opening"><strong>Opening Hours:</strong> 11:00 am – 8:00 pm </div>
            <div class="tel"><strong>T:</strong> (852) 2259 9348</div>
            <div class="lineBlock"></div>
            <p>Samsonite’s journey begun at the turn of the century with founder Jesse Shwayder at the helm. His value and vision for innovation and high quality, coupled with his integrity and honesty is the philosophy by which Samsonite operates today. Samsonite’s ability to perceive and adapt to the changing needs to travelers has made the brand a leading authority for people on the move throughout the years. For almost 100 years, Samsonite has proven itself to be the worldwide leader in innovation travel solutions. Today, the journey continues as Samsonite creates timeless collections infused with quality craftsmanship and great style.</p>
        </div>
        <div class="clearfix"></div>
    </div>
</body>
</html>
