<!DOCTYPE html>
<html lang="en">
<style>
    .bg1 {
        background: url="image\adult-analogue-indoors-2249290.jpg";
    }
</style>

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

    <!--intro-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!--slider starts-->
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="image/slider/s1.jpg" style="width:100%"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>HEADING</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore maiores itaque totam officiis voluptatem necessitatibus? Excepturi pariatur nihil ex ab perspiciatis incidunt ratione esse consequuntur veniam in, placeat, vero odit?</p>
                                <a href="/Accounts/Login" class="btn-get-started scrollto">Login</a>
                                <a href="/Accounts/Signup" class="btn-get-started scrollto">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="carousel-background"><img src="image/slider/s2.jpg" style="width:100%"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>HEADING</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae molestias blanditiis voluptate non, aliquam odit amet repudiandae recusandae autem accusamus a officiis magni, quibusdam ipsam tempore at laboriosam fuga modi.</p>
                                <a href="/Accounts/Login" class="btn-get-started scrollto">Login</a>
                                <a href="/Accounts/Signup" class="btn-get-started scrollto">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="carousel-background"><img src="image/slider/s3.jpg" style=" width:100%"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>HEADING</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nam fugiat illum cum, deserunt harum quidem at fugit repellendus quis tempora, cupiditate quod placeat incidunt facere delectus necessitatibus dolor commodi?
                                </p>
                                <a href="/Accounts/Login" class="btn-get-started scrollto">Login</a>
                                <a href="/Accounts/Signup" class="btn-get-started scrollto">Sign Up</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="carousel-background"><img src="image/slider/s4.jpg" style="width:100%"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>HEADING</h2>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eaque fugiat enim amet, laudantium quo iusto explicabo nemo repudiandae ipsa voluptates magni obcaecati nobis eligendi voluptatum unde sint rerum! Consequuntur?
                                </p>
                                <a href="/Accounts/Login" class="btn-get-started scrollto">Login</a>
                                <a href="/Accounts/Signup" class="btn-get-started scrollto">Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <!--slider ends-->
                </div>
                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    

    <!-- ADD FOOTER -->
    <?php include('footer.php') ?>
</body>

</html>