<?php
include('database.inc.php');
include('function.inc.php');
include('constant.inc.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo FRONT_SITE_NAME?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <?php
				$banner_res=mysqli_query($con,"select * from banner where status='1' order by order_number");
				while($banner_row=mysqli_fetch_assoc($banner_res)){
				?>
				<div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(<?php echo SITE_BANNER_IMAGE.$banner_row['image']?>);">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated"><?php echo $banner_row['heading']?></h1>
                            <h3 class="animated"><?php echo $banner_row['sub_heading']?></h3>
                            <div class="slider-btn mt-90">
                                <a class="animated" href="<?php echo $banner_row['link']?>"><?php echo $banner_row['link_txt']?></a>
                            </div>
                        </div>
                    </div>
                </div>
				<?php } ?>
            </div>            
        </div>
        <div class="flexdevCARD">
            <div class="cardArea">
                <div class="forntTitle">
                    <h2>Desserts</h2>
                </div>                
            </div>
        </div>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="./assets/img/product/HabshiHalwa.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Habshi Halwa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>
        <div class="col">
            <img src="./assets/img/product/KajuKatli.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Kaju Katli</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>
        <div class="col">
            <img src="./assets/img/product/Rasmalai.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Kaju Katli</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>
        <div class="col">
            <img src="./assets/img/product/MotichoorLadoo.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Motichoor Ladoo</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>                
    </div>
</div>

<div class="flexdevCARD">
    <div class="cardArea">
        <div class="forntTitle">
            <h2>Gujarati</h2>
        </div>                
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="./assets/img/product/HabshiHalwa.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Habshi Halwa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>
        <div class="col">
            <img src="./assets/img/product/KajuKatli.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Kaju Katli</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>
        <div class="col">
            <img src="./assets/img/product/Rasmalai.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Kaju Katli</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>
        <div class="col">
            <img src="./assets/img/product/MotichoorLadoo.jpg" class="card-img-top" alt="food image">
            <div class="card-body">
                <h5 class="card-title">Motichoor Ladoo</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="shop.php" class="btn btn-primary btncolor">Order Now</a>
            </div>
        </div>        
    </div>
</div>

<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>



