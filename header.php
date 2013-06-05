<div id="header">
    <div class="container">
        <a href="index.php"><div class="logo"></div></a>
        <div class="lanuage">
            <a href="index.php"><span class="langBtn">Home</span></a>
            <span class="line">|</span>
            <a href="contact.php"><span class="langBtn">Contact</span></a>
            <span class="line">|</span>
            中文
        </div>
        <div class="search">
            <div class="searchBox"><input type="text" /></div>
            <div class="searchBtn"></div>
            <div class="clearfix"></div>
        </div>
        <div class="shadowLine"></div>
        <div class="buttonContainer">
            <a href="about.php"><div class="button <? if($currentPage == "about") echo "active";  ?>">About Us</div></a>
            <a href="retail.php"><div class="button <? if($currentPage == "retail") echo "active";  ?>">Retail</div></a>
            <a href="office.php"><div class="button <? if($currentPage == "office") echo "active";  ?>">Office</div></a>
            <a href="carpark.php"><div class="button <? if($currentPage == "carpark") echo "active";  ?>">Car Park</div></a>
            <a href="apartment.php"><div class="button <? if($currentPage == "apartment") echo "active";  ?>">Serviced Apartment</div></a>
            <a href="csr.php"><div class="button <? if($currentPage == "social") echo "active";  ?>">Corporate Social Responsibility</div></a>
            <a href="news.php"><div class="button <? if($currentPage == "news") echo "active";  ?>">News</div></a>
            <a href="career.php"><div class="button <? if($currentPage == "career") echo "active";  ?> end">Career</div></a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>