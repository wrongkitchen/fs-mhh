<? $currentPage = "contact"; ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Man Hing Hong - Contact</title>
<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="components/fancybox/source/jquery.fancybox.css">
<link rel="stylesheet" href="css/common.css" />
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50362fb3300d3682"></script>
<script type="text/javascript" data-main="js/main.js" src="components/requirejs/require.js"></script>
</head>

<body>
    <div class="wrapper">
        
        <?php require_once("header.php"); ?>
        
        <div id="mainContent" class="fullWidth">
            <div class="container">
                <div class="banner"><img src="img/contact-banner.jpg" alt=""></div>
                <div class="title">Contact</div>
                <div class="desc">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                <div class="lineBlock shadow"></div>
                
            
                <div id="contactContent">
                    <div class="pull-left leftContent">
                        <div class="leftContentTitle blue bold">Enquiry Form</div>
                        <div class="leftContentDesc desc">The form fields with * are compulsory to fill.</div>
                        <div class="lineBlock"></div>
                        <table class="enquiryForm">
                            <tr>
                                <td>Name: *</td>
                                <td width="10"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Company:</td>
                                <td width="10"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Email: *</td>
                                <td width="10"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td width="10"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td>Type of Enquiry: *</td>
                                <td width="10"></td>
                                <td>
                                    <select name="" id="">
                                        <option value=""></option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Message: *</td>
                                <td width="10"></td>
                                <td>
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td colspan="2"><button class="submitBtn">Submit<span class="arrow white"></span></button></td>
                            </tr>
                        </table>
                    </div>
                    <div class="pull-right rightContent">
                        <div class="rightContentTitle blue bold">Address</div>
                        <div class="lineBlock"></div>
                        <img src="img/contact-map.jpg" alt=""><br /><br />
                        <div class="bold">Head Office</div>
                        <div class="desc">
                            Man Hing Hong Group, 
                            31/F, Man Yee Building, 
                            68 Des Voeux Road Central, Hong Kong
                        </div><br /><br />
                        <div class="blue bold">General Enquiries</div>
                        <div class="lineBlock"></div>
                        <div class="desc"><b>T:</b> +852 2869 9799</div>
                        <div class="desc"><b>E:</b> <a href="mailto:general@mhh.com.hk">general@mhh.com.hk</a></div><br /><br />
                        <div class="blue bold">Leasing (Retail, Office & Car Park)</div>
                        <div class="lineBlock"></div>
                        <div class="desc"><b>T:</b> +852 2122 4288</div>
                        <div class="desc"><b>E:</b> <a href="mailto:leasing@mhh.com.hk">leasing@mhh.com.hk</a></div><br /><br />
                        <div class="blue bold">Reservation (Serviced Apartment)</div>
                        <div class="lineBlock"></div>
                        <div class="desc"><b>T:</b> +852 8202 3377</div>
                        <div class="desc"><b>E:</b> <a href="mailto:mkt.lp@mhh.com.hk">mkt.lp@mhh.com.hk</a></div><br /><br /><br />
                    </div>
                    <div class="clearfix"></div>
                </div>
                

                <div class="clearfix"></div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>
        
    </div>
</body>
</html>
