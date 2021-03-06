<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>::Matchday45::</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

    <link href="css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/default1.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body class="cbp-spmenu-push">
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right " id="cbp-spmenu-s2">
    <h3>LIVE UPDATES</h3>
    <a href="#">LOBBY</a>
    <a href="#">PICK TEAM</a>
    <a href="#">PLAYER PROFILE</a>
    <a href="#">POINTS</a>
    <a href="#">STATS</a>
    <a href="#">MY PROFILE</a>
    <a href="#">LANGUAGE</a>
    <a href="#">MY MATCHDAYHERO</a>
</nav>

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 header-left">
                Matchday45
            </div><!--header-left-->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 header-center">
                The Real Fans Fantasy League
            </div><!--header-center-->
            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 header-right">

                @if (Auth::guest())
                <div class="Top-Login">
                    <a href="{{ url(Config::get('url.login')) }}">Login</a>
                </div><!--Top-Login-->
                <div class="Top-Register">
                    <a href="{{ url(Config::get('url.register')) }}">Register</a>
                </div><!--Top-Register-->
                @else
                <div class="Top-Login">
                    <a href="{{ url(Config::get('url.logout')) }}">Logout</a>
                </div><!--Top-Login-->
                @endif


                <div class="Top-Menu">
                    <!--<a id="rightBurger" class="slideLeft animatedSlide pressed" href=""><img src="img/menu.jpg" alt=""/></a>-->
                    <a id="showRightPush" class="active"><img src="img/menu.jpg" alt=""/></a>
                    <!--<button id="showRightPush" class="active"><img src="img/menu.jpg" alt=""/></button>-->
                </div><!--Top-Menu-->
                <div class="clearfix"></div>
            </div><!--header-right-->
            <div class="clearfix"></div>
        </div><!--row-->
    </div><!--container-->
</header><!--header-->

<section class="main">
<div class="container">
<div class="row">
<div class="main-content">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 main-content-left">
        <div class="Emotional-Pitch">
            <div class="Emotional-Pitch-Text">
                Emotional Pitch
            </div><!--Emotional-Pitch-Text-->

        </div><!-- End Emotional-Pitch-->
        <div class="clearfix"></div>

        <div class="part2">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 part2-left1">
                <div class="part2-left">
                    <div class="Part2Text">Intro / Offerings</div><!--Part2Text-->
                </div>

            </div><!-- End part2-left-->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 part2-right1">
                <div class="part2-right">
                    <div class="Part2Text">USP game Play</div><!--Part2Text-->

                </div>

            </div><!-- End part2-right-->
            <div class="clearfix"></div>
        </div><!-- End part2-->


    </div><!--main-content-left-->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 main-content-right">
        <div class="Pitch-Img">
            <div class="player-img"><img src="img/player-img.png" alt=""/></div><!-- End player-img-->

        </div><!-- End Pitch-Img-->
        <div class="Login-Register">
            <div class="Login-Register-Btn">
                <a href="{{ url(Config::get('url.login')) }}">Login</a> / <a href="{{ url(Config::get('url.register')) }}">Register</a>

            </div><!-- Login-Register-Btn -->

            <div class="Opta-Visa">

                <div class="OptaDiv">
                    <a href="#">Opta</a>
                </div><!-- End OptaDiv-->
                <div class="VisaDiv">
                    <a href="#">Visa</a>
                </div><!-- End VisaDiv-->

                <div class="clearfix"></div>
            </div><!-- End Opta-Visa-->


            <div class="clearfix"></div>
        </div><!-- End Login-Register-->



    </div><!--main-content-right-->
    <div class="clearfix"></div>
</div><!--main-content-->


<div class="promos">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="promo1">
            <div class="Promo-Text">Promo 1</div>

        </div>

    </div><!-- End promo1-->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="promo2">
            <div class="Promo-Text">Promo 1</div>
        </div>

    </div><!-- End promo1-->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="promo3">
            <div class="Promo-Text">Promo 1</div>
        </div>

    </div><!-- End promo1-->
    <div class="clearfix"></div>
</div><!-- End promos-->
<div class="clearfix"></div>


<div class="part3">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <div class="part3left">
            <div class="part3left-top">
                <div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
                    <div class="part3left-top-Left">
                        <img src="img/part3-img-2.jpg" alt="" class="img-responsive"/>
                    </div>
                </div> <!--part3left-top-Left-->
                <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                    <div class="part3left-top-right">
                        <img src="img/part3-img-1.jpg" alt="" class="img-responsive"/>
                    </div>
                </div>  <!--part3left-top-right-->
                <div class="clearfix"></div>
            </div><!--part3left-top-->
            <div class="part3left-center">
                <div class="part3left-center-text">
                    <div class="part3left-center-text1">
                        FANTASY PREMIER LEAGUE 2014/15
                    </div><!--part3left-center-text1-->
                    <div class="part3left-center-text2">
                        IN ASSOCIATION WITH
                    </div><!--part3left-center-text2-->
                    <div class="EA_Sports_logo">
                        <a href="#"><img src="img/EA_Sports_logo.png" alt="" /></a>
                    </div><!--EA_Sports_logo  -->
                    <div class="clearfix"></div>
                </div><!-- End part3left-center-text-->

                <div class="part3left-center2-text1">
                    THE OFFICIAL FANTASY FOOTBALL GAME OF THE PREMIER LEAGUE
                </div><!--part3left-center2-text1-->
                <div class="part3left-center2-text2">
                    With over 3 million players League is the biggest Fantasy Football game in the world! It's
                    FREE to play and you can win great prizes!
                </div><!--part3left-center2-text2-->



            </div><!--part3left-center-->


            <div class="part3left-btm">
                <div class="part3left-btm-head">How It Work</div>
                <div class="part3left-btm-Item">
                    <div class="part3left-btm-left col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        <div class="part3-img-5"> <img src="img/part3-img-5.jpg" alt=""/></div><!--part3-img-5-->
                        <div class="Pick-text">1.Pick your squad</div><!--Pick-text-->
                        <div class="Use-your">Use your budget of 100m to pick a squad of 15 players from the barclaye Premier
                            League.</div><!--Use-your-->



                    </div>
                    <div class="part3left-btm-center col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="Global-Leagues">Global Leagues</div>

                        <div class="part3-img-6">
                            <ul>
                                <li><img src="img/1.jpg" alt=""/>&nbsp;&nbsp; 233,145<span>Overall</span></li>
                                <li><img src="img/2.jpg" alt=""/>&nbsp;&nbsp; 233,145<span>Overall</span></li>
                                <li><img src="img/3.jpg" alt=""/>&nbsp;&nbsp; 233,145<span>Overall</span></li>


                            </ul>





                        </div><!--part3-img-5-->
                        <div class="Pick-text">2.Create and join leagues</div><!--Pick-text-->
                        <div class="Use-your">Play against friends and family, colleagues or a web community in private
                            leagues..</div><!--Use-your-->


                    </div>
                    <div class="part3left-btm-center col-lg-4 col-md-4 col-sm-6 col-xs-12">


                        <div class="part3-img-7"> <img src="img/part3-img-6.jpg" alt=""/></div><!--part3-img-5-->
                        <div class="Pick-text">1.Pick your squad</div><!--Pick-text-->
                        <div class="Use-your">Use your budget of 100m to pick a squad of 15 players from the barclaye Premier
                            League.</div><!--Use-your-->

                    </div>
                    <div class="clearfix"></div>
                </div><!--part3left-btm-Item-->
                <div class="clearfix"></div>
            </div><!--part3left-btm-->
            <div class="clearfix"></div>

        </div><!--part3left-->
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="part3right">
            <div class="part3right-img1">


            </div><!--part3right-img1-->
            <div class="part3right-btn-div">
                <div class="part3right-btn-header">

                    My Fantasy Teams

                </div><!--part3right-btn-header-->
                <div class="part3right-btn">
                    <div class="part3right-btn1">

                        <a href="#">Join League</a>

                    </div><!-- End part3right-btn1-->
                    <div class="part3right-btn2">

                        <a href="#">Create League</a>

                    </div><!-- End part3right-btn2-->

                    <div class="clearfix"></div>

                </div><!-- End part3right-btn-->

            </div><!--part3right-btn-->

            <div class="clearfix"></div>
        </div><!--part3right-->
    </div>
    <div class="clearfix"></div>
</div><!--part3-->


</div><!--row-->
</div><!--container-->
</section><!--main-->
<section class="Change-Language">
    <div class="container">
        <div class="row">
            <ul>
                <li><span>Change Language</span> </li>
                <li><a href="#">English</a></li>
                <li><a href="#">Portugues</a></li>
                <li><a href="#">Espanol</a></li>
                <li><a href="#">Bahasa Indonesia</a></li>
            </ul>
        </div><!--row-->
    </div><!--container-->

</section><!--Change-Language-->





<!-- Footer Section -->

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 footer-left">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">How it works</a> </li>
                        <li><a href="#">Promo</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div><!-- end footer-top-->
                <div class="footer-right">
                    <ul>
                        <li><a href="#"><img src="img/so.jpg" alt=""/></a></li>

                    </ul>

                </div><!-- end footer-right-->
                <div class="clearfix"></div>
            </div><!-- End row-->
        </div><!-- End container-->

    </div><!-- End footer-top -->

    <div class="footer-btm">
        <div class="container">
            <div class="row">

                2013-2015 MatchDayHero . All Rights Terms of Use Privacy Pollcy

            </div><!-- End row-->
        </div><!-- End container-->


    </div><!-- End footer-btm-->

</footer>





<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Scrolling Nav JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>

<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script src="js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        menuTop = document.getElementById( 'cbp-spmenu-s3' ),
        menuBottom = document.getElementById( 'cbp-spmenu-s4' ),

        showRight = document.getElementById( 'showRight' ),
        showTop = document.getElementById( 'showTop' ),
        showBottom = document.getElementById( 'showBottom' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        showRightPush = document.getElementById( 'showRightPush' ),
        body = document.body;


    showRightPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toleft' );
        classie.toggle( menuRight, 'cbp-spmenu-open' );
        disableOther( 'showRightPush' );
    };

    function disableOther( button ) {
        if( button !== 'showLeft' ) {
            classie.toggle( showLeft, 'disabled' );
        }
        if( button !== 'showRight' ) {
            classie.toggle( showRight, 'disabled' );
        }
        if( button !== 'showTop' ) {
            classie.toggle( showTop, 'disabled' );
        }
        if( button !== 'showBottom' ) {
            classie.toggle( showBottom, 'disabled' );
        }
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
        if( button !== 'showRightPush' ) {
            classie.toggle( showRightPush, 'disabled' );
        }
    }
</script>




</body>

</html>
