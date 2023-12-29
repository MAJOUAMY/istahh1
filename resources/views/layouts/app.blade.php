<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <title>ISTA HH1 </title>

    <!-- Css Files -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
    <link href="{{ asset('build/mediaelementplayer.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-two.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-three.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-four.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">


</head>

<body>
    <div class="wm-main-wrapper">
        <header id="wm-header" class="wm-header-one">

            <!--// TopStrip \\-->
            <div class="wm-topstrip">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="wm-language">
                                <ul>
                                    <li><a href="#">français</a></li>
                                    <li><a href="#">arabe</a></li>
                                </ul>
                            </div>
                            <ul class="wm-stripinfo">
                                <li><i class="wmicon-location"></i> H898+GJ6, Bd d'Afghanistan, Casablanca</li>
                                <li><i class="wmicon-technology4"></i> +0 500000000</li>
                                <li><i class="wmicon-clock2"></i> Lun - ven: 8:30am - 6:30pm</li>
                            </ul>
                            <ul class="wm-adminuser-section">
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#ModalLogin">login</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                                <li>
                                    <a href="#" class="wm-search-btn" data-toggle="modal"
                                        data-target="#ModalSearch"><i class="wmicon-search"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainHeader \\-->
            <div class="wm-main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 "><a href="" class="wm-logo"><img src="{{ asset('logo.png') }}"
                                    alt=""></a></div>
                        <div class="col-md-9">
                            <!--// Navigation \\-->
                            <nav class="navbar navbar-default">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="#"> ACCUEIL</a>

                                        </li>
                                        <li><a href="#">MODULES</a>

                                        </li>
                                        <li><a href="#">evenments</a>

                                        </li>

                                        <li class="wm-megamenu-li"><a href="#">articles</a>

                                        </li>
                                        <li><a href="contact-us.html">formation</a>
                                            <ul class="wm-dropdown-menu">
                                                <li><a href="shop-grid.html">Deeloppement digital</a></li>
                                                <li><a href="shop-list.html">infrastructure digital</a></li>
                                                <li><a href="shop-single-product.html">gestion et commerce</a></li>
                                            </ul>
                                        </li>
                                        <li class="wm-megamenu-li"><a href="#">Contact</a>

                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <!--// Navigation \\-->
                            <a href="#" class="wm-header-btn">commancer</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainHeader \\-->

        </header>
        <!--// Footer \\-->

        <!--// Footer \\-->


        @yield('content')
        <footer id="wm-footer" class="wm-footer-one">

            <!--// FooterNewsLatter \\-->
            <div class="wm-footer-newslatter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form>
                                <i class="wmicon-interface2"></i>
                                <input type="text" value="Enter your e-mail address"
                                    onblur="if(this.value == '') { this.value ='Enter your e-mail address'; }"
                                    onfocus="if(this.value =='Enter your e-mail address') { this.value = ''; }">
                                <input type="submit" value="Subscribe to our newsletter">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterNewsLatter \\-->

            <!--// FooterWidgets \\-->
            <div class="wm-footer-widget">
                <div class="container">
                    <div class="row">
                        <aside class="widget widget_contact_info col-md-3">
                            <a href="index-2.html" class="wm-footer-logo"><img src="{{ asset('logo.png') }}"
                                    alt=""></a>
                            <ul>
                                <li><i class="wm-color wmicon-pin"></i> 195 Cooks Mine Road Espanola, NM 87532</li>
                                <li><i class="wm-color wmicon-phone"></i> +0500000000 <br> +05000000000</li>
                                <li><i class="wm-color wmicon-letter"></i> <a
                                        href="mailto:name@email.com">info@university.com</a> <a
                                        href="mailto:name@email.com">support@university.com</a></li>
                            </ul>
                            <div class="wm-footer-icons">
                                <a href="#" class="wmicon-social5"></a>
                                <a href="#" class="wmicon-social4"></a>
                                <a href="#" class="wmicon-social3"></a>
                                <a href="#" class="wmicon-vimeo"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_archive col-md-2">
                            <div class="wm-footer-widget-title">
                                <h5>Quick Links</h5>
                            </div>
                            <ul>
                                <li><a href="#">dirnere evenement </a></li>
                                <li><a href="#">Formation</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>

                                <li><a href="#">Notre Formateur</a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget_twitter col-md-4">
                            <div class="wm-footer-widget-title">
                                <h5><i class="wmicon-social2"></i> @istahh1</h5>
                            </div>
                            <ul>
                                <li>
                                    <p>Check Youniverse - Multipurpose PSD Template @ThemeForest: <a
                                            href="#">pic.twitter.com/xcVlqJySjq</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">2 hrs ago</time>
                                </li>
                                <li>
                                    <p>Check out my New PSD: FashionPlus - Fashion eCommerce: <a
                                            href="#">pic.twitter.com/xc445Ghyt</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">4 hrs ago</time>
                                </li>
                                <li>
                                    <p>MedicAid - Medical Template @ThemeForest: <a
                                            href="#">pic.twitter.com/xcVlq542wfER</a></p>
                                    <time datetime="2008-02-14 20:00" class="wm-color">1 day ago</time>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget_gallery col-md-3">
                            <div class="wm-footer-widget-title">
                                <h5>Our Instructors</h5>
                            </div>
                            <ul class="gallery">
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-1.jpg"><img
                                            src="extra-images/widget-gallery-1.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-2.jpg"><img
                                            src="extra-images/widget-gallery-2.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-3.jpg"><img
                                            src="extra-images/widget-gallery-3.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-4.jpg"><img
                                            src="extra-images/widget-gallery-4.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-5.jpg"><img
                                            src="extra-images/widget-gallery-5.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-6.jpg"><img
                                            src="extra-images/widget-gallery-6.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-7.jpg"><img
                                            src="extra-images/widget-gallery-7.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-8.jpg"><img
                                            src="extra-images/widget-gallery-8.jpg" alt=""></a></li>
                                <li><a title="" data-rel="prettyPhoto[gallery1]"
                                        href="extra-images/widget-galleryfull-9.jpg"><img
                                            src="extra-images/widget-gallery-9.jpg" alt=""></a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// FooterWidgets \\-->

            <!--// FooterCopyRight \\-->
            <div class="wm-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"> <span><i class="wmicon-nature"></i> CASABLANCA, MAROC </span> </div>
                        <div class="col-md-6">
                            <p><a target="_blank" href="">AJOUAMY MILOUD / HADRAOUI ZAKARIA</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!--// FooterCopyRight \\-->

        </footer>


        <div class="clearfix"></div>
    </div>
    <!-- ModalLogin Box -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form wm-login-popup">
                        <span class="wm-color">Login to Your Account</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Your Username"
                                        onblur="if(this.value == '') { this.value ='Your Username'; }"
                                        onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li> <input type="password" value="password"
                                        onblur="if(this.value == '') { this.value ='password'; }"
                                        onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <a href="#" class="wm-forgot-btn">Forgot Password?</a> </li>
                                <li> <input type="submit" value="Sign In"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or try our socials</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color"><a href="#"><i
                                        class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Not a member yet? <a href="#">Sign-up Now!</a></p>
                    </div>
                    <div class="wm-modallogin-form wm-register-popup">
                        <span class="wm-color">create Your Account today</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Your Username"
                                        onblur="if(this.value == '') { this.value ='Your Username'; }"
                                        onfocus="if(this.value =='Your Username') { this.value = ''; }"> </li>
                                <li> <input type="text" value="Your E-mail"
                                        onblur="if(this.value == '') { this.value ='Your E-mail'; }"
                                        onfocus="if(this.value =='Your E-mail') { this.value = ''; }"> </li>
                                <li> <input type="password" value="password"
                                        onblur="if(this.value == '') { this.value ='password'; }"
                                        onfocus="if(this.value =='password') { this.value = ''; }"> </li>
                                <li> <input type="text" value="Confirm Password"
                                        onblur="if(this.value == '') { this.value ='Confirm Password'; }"
                                        onfocus="if(this.value =='Confirm Password') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Create Account"> </li>
                            </ul>
                        </form>
                        <span class="wm-color">or signup with your socials:</span>
                        <ul class="wm-login-social-media">
                            <li><a href="#"><i class="wmicon-social5"></i> Facebook</a></li>
                            <li class="wm-twitter-color"><a href="#"><i class="wmicon-social4"></i> twitter</a>
                            </li>
                            <li class="wm-googleplus-color"><a href="#"><i
                                        class="fa fa-google-plus-square"></i> Google+</a></li>
                        </ul>
                        <p>Already a member? <a href="#">Sign-in Here!</a></p>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- ModalLogin Box -->

    <div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="wm-modallogin-form">
                        <span class="wm-color">Search Your KeyWord</span>
                        <form>
                            <ul>
                                <li> <input type="text" value="Keywords..."
                                        onblur="if(this.value == '') { this.value ='Keywords...'; }"
                                        onfocus="if(this.value =='Keywords...') { this.value = ''; }"> </li>
                                <li> <input type="submit" value="Search"> </li>
                            </ul>
                        </form>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('script/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/jquery.prettyphoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/fitvideo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/skills.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/slick.slider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/waypoints-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('build/mediaelement-and-player.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('script/jquery.nicescroll.min.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('https://maps.googleapis.com/maps/api/js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('script/functions.js') }}"></script>
</body>

</html>
