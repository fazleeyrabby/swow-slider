<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Saintmartin Service -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend_asset/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend_asset/') }}/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend_asset/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend_asset/') }}/css/style.css"/>
    <script type="text/css" src="{{ asset('assets/frontend_asset/') }}/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>

<section class="header-top-area">
    <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="logo">
                <a href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/logo.png" alt="Logo" class="img-responsive"/></a>
            </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <a class="anchor" href="tel:01713 273667"><img src="{{ asset('assets/frontend_asset/') }}/img/call.png" alt="Logo" class="img-responsive"/>
                24hr Emergency Service <br> <span>+88 01713 273667 or, +88 01711 321143</span>
            </a>
        </div>
    </div>
</section>

<section class="navbar-area">
    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="100">
        <div class="container">
            <div class="navbar-navbar">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul id="myDiv" class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="{{ asset('assets/frontend_asset/') }}/img/profile.pdf" target="#">Our Profile</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="destination.php">Destinations</a></li>
                        <li><a href="coach.php">Coach</a></li>
                        <li><a href="awards.php">Awards</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="clients.php">Our Clients</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</section>
<!-- start slider -->
<section class="slider-area">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <?php
            $sliders = App\Slider::where('publication_status',1)->get();
            ?>

            <ol class="carousel-indicators">
                @foreach($sliders as $key => $slider)
                <li data-target="#myCarousel" data-slide-to="{{$key}}" class="<?php if($key == 0){echo 'active';}?>"></li>
                @endforeach
            </ol>

            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                <div class="item <?php if($key == 0){echo 'active';}?>">
                    <img src="assets/admin/sliderImage/{{ $slider->img }}" >
                </div>
                @endforeach
            </div>

            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-backward" area-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-forward" area-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- End Slider -->
@yield('content')
<!----------Products Details---------->
<section class="category-row">
    <div class="container">
        <div class="header-blog">
            <h2>Our Clients</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-1.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-2.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-3.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-4.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-5.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-6.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-7.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-8.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-9.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-10.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-11.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-12.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-13.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-14.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-15.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-16.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <a class="best-box" href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/concern/c-17.png" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-tilenav" data-slide="prev"><i class="fa fa-arrow-left"></i></a>
                    <a class="right carousel-control" href="#carousel-tilenav" data-slide="next"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-top">
    <div class="container">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>Follow Us</h3>
            <div class="social-icon">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="#"><img src="{{ asset('assets/frontend_asset/') }}/img/logo.png" alt="Logo" class="img-responsive"/></a>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>For Help</h3>
            <p><i class="fa fa-phone" aria-hidden="true"></i> +88 01713 273667 or, +88 01711 321143</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> smstours2000@yahoo.com </p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h3>Contact Us</h3>
            <h5 style="letter-spacing:1px"><b>For AC Bus Rent:</b> <br>
                01713-273667, 01711-321143, 01711-322711<br><br>
                <b>information:</b> <br>
                01313-476400, 01313-476411</h5>
        </div>
    </div>
</section>

<section class="footer-down">
    <div class="container">
        <p>Copyright © 2020 <a href="#">Saintmartin Service.</a> All Right Reserved.</p>
    </div>
</section>


<!--------------Begin: Javascript---------------->
<script src="{{ asset('assets/frontend_asset') }}/js/jquery-2.1.1.js"></script>
<script src="{{ asset('assets/frontend_asset') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/frontend_asset') }}/js/slider.js"></script>

<!------For Active Menu------>
<script>
    $(document).ready(function() {
        var url = window.location.href;
        url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
        url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
        url = url.substr(url.lastIndexOf("/") + 1);
        if(url == ''){
            url = 'index.php';
        }
        $('.navbar-area li').each(function(){
            var href = $(this).find('a').attr('href');
            if(url == href){
                $(this).addClass('active');
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('layouts.message')
<script>
    $(document).ready(function(){
        //FANCYBOX
        //https://github.com/fancyapps/fancyBox
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

<script>
    $(".carousel-showmanymoveone").carousel({
        interval: 1500
    });

    (function () {
        $(".carousel-showmanymoveone .item").each(function () {
            var itemToClone = $(this);

            for (var i = 1; i < 4; i++) {
                itemToClone = itemToClone.next();

                // wrap around if at end of item collection
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(":first");
                }

                // grab item, clone, add marker class, add to collection
                itemToClone
                    .children(":first-child")
                    .clone()
                    .addClass("cloneditem-" + i)
                    .appendTo($(this));
            }
        });
    })();
</script>



</body>
</html>