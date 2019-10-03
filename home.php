<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - STITCH IT</title>
    <!-- INCLUDE LINKS AND SCRIPTS -->
    <?php include('includes.php') ?>
</head>

<body>
    <!-- ADD HEADER -->
    <?php include('header.php') ?>

    <!-- banner -->
    <section class="banner_w3lspvt" id="home">
        <div class="csslider infinity" id="slider1">
            <input type="radio" name="slides" checked="checked" id="slides_1" />
            <input type="radio" name="slides" id="slides_2" />
            <input type="radio" name="slides" id="slides_3" />

            <ul class="banner_slide_bg">
                <li>
                    <div class="slider-info bg1">
                        <div class="bs-slider-overlay">
                            <div class="banner-text">
                                <div class="container">
                                    <h5><span class="fa fa-stumbleupon" aria-hidden="true"></span> Fashion Trendz</h5>
                                    <h2 class="movetxt agile-title text-capitalize">You Either Know Fashion </h2>
                                    <h2 class="movetxt mb-3 agile-title text-capitalize">Or You Dont</h2>
                                    <a href="#gallery" class="btn"> See Our Gallery </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg2">
                        <div class="bs-slider-overlay1">
                            <div class="banner-text">
                                <div class="container">
                                    <h5><span class="fa fa-stumbleupon" aria-hidden="true"></span> Trending Fashion</h5>
                                    <h4 class="movetxt agile-title text-capitalize">Fashion Is A Reflection </h4>
                                    <h4 class="movetxt mb-3 agile-title text-capitalize">of Your Style</h4>
                                    <a href="#gallery" class="btn"> See Our Gallery </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg3">
                        <div class="bs-slider-overlay1">
                            <div class="banner-text">
                                <div class="container">
                                    <h5><span class="fa fa-stumbleupon" aria-hidden="true"></span> Style Makeup</h5>
                                    <h4 class="movetxt agile-title text-capitalize">An Influential Platform for</h4>
                                    <h4 class="movetxt mb-3 agile-title text-capitalize">Fashion Industry</h4>
                                    <a href="#gallery" class="btn"> See Our Gallery </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="navigation">
                <div>
                    <label for="slides_1"></label>
                    <label for="slides_2"></label>
                    <label for="slides_3"></label>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner -->
    
    <!-- ADD FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>