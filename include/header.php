<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>MGM </title>
    <!-- 
    bootstrap 
 -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>

    <!-- fraimwork - css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <!-- icon css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">

    <!-- carousel css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.min.css">

    <!-- others css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

    <!-- color switcher css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/style-switcher.css">
    <link id="color_theme" rel="stylesheet" type="text/css" href="assets/css/colors/default.css">

    <!-- custom css include -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-hldi.css">
    <link rel="stylesheet" type="text/css" href="assets/css/rec-style.css">




</head>
<style>
.sub-menu li {

    background: #333333 !important;
    color: white;

    padding: 10px 10px !important;
    font-weight: 550;
    font-size: 0.8rem;
    font-family: sans-serif;
}



button:focus,
.navbar.toggler:focus {
    outline: 0;
    box-shadow: none;
}

.d-flex {
    display: flex !important;
    flex-direction: row !important;
    margin-left: 20px !important;

}

.d-flex li a {
    padding: 10px;
    /* border-bottom: 1px solid white; */
}

.d-flex li a:hover {
    background: #000;

    display: inline-block;
}

.d-flex .imagess {
    background-image: url(../assets/images/gallery/7.image.jpg) !important;
    opacity: 1;
}

.d-flex li {

    width: 380px !important;
    height: 43px !important;

}

.main-drop:hover {
    display: block;
}

.nav-links {
    position: relative;
}

.nav-links li:hover .mega-box {
    visibility: visible;
    opacity: 1;
    transition: all 0.4s ease;
}

.mega-box {
    position: absolute;
    top: 110%;
    justify-self: center;
    width: 100%;
    right: 550%;
    z-index: 999;
    opacity: 0;
    visibility: hidden;
}

.mega-box .content {
    background: black;
    padding: 20px 25px;
    display: flex;
    width: 70rem;
    /* margin-left: auto; */
    height: 100%;
    justify-content: space-around;
}

.rowss .mega-links {
    margin-left: 20px;
}

.content .rowss:nth-child(1) {
    margin-left: 15px;
}

.content .rowss:nth-child(1),
.content .rowss:nth-child(5) {
    border-left: 0px;
}

.rowss .mega-links li a {
    /* font-size: 0.8rem;
    font-weight: 440; */
    border-bottom: 1px solid #333333;
    margin-top: 10px;
    margin-right: 10px;
    font-size: 14px;
    font-family: 'poppins', sans-serif;


}

.mega-links li a:hover {
    background: #333333;

    display: inline-block;
}

.content .rowss {
    /* width: calc(15% - 0px); */
    /* line-height: 30px; */
    display: flex;
    justify-content: space-around;
    /* gap: 20px; */
}

.rowss .mega-links {
    flex: 3;

}

.primary-btn {
    padding: 10px 27px;


}

.rowss img {
    flex: 1;
}

.content .rowss img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 5px;

}

.main-menuu .clearfix .nav-links li a {
    text-decoration: none;
}

.rowss .links-1 {
    margin-left: 10px;
}

.content .rowss .mega-links li a {
    padding: 7px 5px;
    text-decoration: none;
}

.content .rowss .mega-links {
    /* margin-left: -40px; */
    border-left: 1px solid rgbs(255, 255, 255, 0.09);
}

.ul-li .login-modal a {
    border: none !important;
    width: 90px !important;
    height: 70px !important;
    font-weight: 600;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* .ul-li .login-modal a:hover {} */
@media (max-width:1030px) {

    /* .mega-box {
        position: relative;
        top: 0;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        box-shadow: none;
        transition: all 0.5s ease-in;
        text-align: start;
    }

    .mega-box:hover.rowss {
        
    } */
    .other-pages-links ul .mega-open {
        position: relative;
    }

    .other-pages-links ul li .mega-tags:hover .mega-box {
        color: red !important;
        visibility: visible !important;
        opacity: 1 !important;
        transition: all 0.4s ease;
        height: 100% !important;
    }


    .content .rowss {
        /* width: calc(15% - 0px); */
        /* line-height: 30px; */
        flex-direction: column;
        /* gap: 20px; */
    }

    .rowss .mega-links {
        flex: 0;

    }

    .rowss img {
        flex: 0;
    }

    .mega-box {
        position: absolute;
        top: 50%;
        /* justify-self: center; */
        width: 100%;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        right: 50%;
        /* z-index: 999; */
        /* opacity: 0;
        visibility: hidden; */
    }
}
</style>

<body>





    <!-- backtotop - start -->
    <div id="thetop" class="thetop"></div>
    <div class='backtotop'>
        <a href="#thetop" class='scroll'>
            <i class="fas fa-angle-double-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <div id="preloader"></div>
    <!-- preloader - end -->





    <!-- header-section - start
		================================================== -->
    <header id="header-section" class="header-section sticky-header-section not-stuck clearfix">
        <!-- header-bottom - start -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">

                    <!-- site-logo-wrapper - start -->
                    <div class="col-lg-3">
                        <div class="site-logo-wrapper">
                            <a href="index-1.php" class="logo">
                                <img src="assets\images\logo.png" width="70px;" alt="MGM title logo">
                            </a>
                        </div>
                    </div>
                    <!-- site-logo-wrapper - end -->

                    <!-- mainmenu-wrapper - start -->
                    <div class="col-lg-9">
                        <div class="mainmenu-wrapper">
                            <div class="row">

                                <!-- menu-item-list - start -->
                                <div class="col-lg-10 main-menuu">
                                    <div class="menu-item-list ul-li clearfix">
                                        <ul class="nav-links">
                                            <li class="menu-item-has-children active">
                                                <a href="index.php">home</a>

                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="about.php">about</a>

                                            </li>
                                            <li>

                                                <a href="service.php">Service</a>
                                                <div class="mega-box">
                                                    <div class="content">

                                                        <div class="rowss">
                                                            <ul class="mega-links links-1">
                                                                <li><a href="mgmband.php">Mgm The Band</a></li>
                                                                <li><a href="celebratity.php">Celebrity</a></li>
                                                                <li><a href="classical.php">Magical Show</a></li>
                                                                <li><a href="dj_artist.php">Dj Artist</a></li>
                                                                <li><a href="standup_comedy.php">Standup Comedy</a></li>
                                                                <li><a href="sufi_music.php">Sufi Night</a></li>
                                                                <li><a href="folk_music.php">Folk Music<span
                                                                            style="font-size:10px; ">(rajasthani
                                                                            sangeet)</span></a>
                                                                </li>
                                                                <li><a href="unleash.php">Laughter Event</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="rowss">
                                                            <ul class="mega-links">
                                                                <li><a href="pre_wedding.php"> Pre Wedding Planning</a>
                                                                </li>
                                                                <li><a href="ceremony.php">Ceremony</a></li>
                                                                <li><a href="photography_vedio.php">Photography &
                                                                        Video</a></li>
                                                                <li><a href="Aniversary.php">Anniversary Celebration</a>
                                                                </li>
                                                                <li><a href="hldi-function.php">Haldi Celebration</a>
                                                                </li>
                                                                <li><a href="wedding.php">Marriage Celebration</a></li>
                                                                <li><a href="destination_wedding.php">Destination
                                                                        Wedding
                                                                        Plan</a>
                                                                </li>
                                                                <li><a href="reception.php">Reception Celebration</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="rowss">
                                                            <ul class="mega-links">

                                                                <li><a href="Engagements.php">Engagement Celebration</a>
                                                                </li>
                                                                <li><a href="bhangra.php">Bhangra Dance Party</a>
                                                                </li>
                                                                <li><a href="classical_music.php">Classical Music
                                                                        Event</a>
                                                                </li>

                                                                <li><a href="sangeet.php">Wedding Sangeet</a></li>
                                                                <li><a href="quwwali.php">Qawwali Program</a>
                                                                </li>
                                                                <li><a href="shehnai.php">Shehnai Event</a>
                                                                </li>
                                                                <li><a href="birthday-celebration.php">Birthday
                                                                        Celebration</a></li>

                                                                <li><a href="choreographer.php">Choreographer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="rowss">
                                                            <ul class="mega-links">
                                                                <li><a href="jagran.php">Bhagwati Jagran</a></li>
                                                                <li><a href="sai_sandhya.php">Sai Sandhya</a>
                                                                </li>
                                                                <li><a href="bhajan_sandhya.php">Bhajan Sandhya</a>
                                                                </li>
                                                                <li><a href="skyevent.php">Celebrity Live Concert</a>
                                                                </li>
                                                                <li><a href="dance_group.php">Dance Event
                                                                    </a></li>
                                                                <li><a href="showtime.php">Celebrity Cheif Guest</a>
                                                                </li>
                                                                <li><a href="MusicalShow.php">Musical Show</a></li>
                                                                <li><a href="mgmorchestra.php">MGM Symphony Orchestra
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="rowss">
                                                            <img src="assets\images\gallery\6.image.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="blog-details.php">blogs</a>

                                            </li>

                                            <li>
                                                <a href="gallery.php">gallery</a>
                                            </li>
                                            <li>
                                                <a href="speaker.php">speaker</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#!">contact</a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- menu-item-list - end -->

                                <!-- menu-item-list - start -->
                                <div class="col-lg-2">
                                    <div class="user-search-btn-group ul-li clearfix">
                                        <ul>
                                            <li class="login-modal">
                                                <a href="#login-modal" class="login-modal-btn">
                                                    Book Now
                                                </a>
                                                <div id="login-modal" class="reglog-modal-wrapper mfp-hide clearfix"
                                                    style="background-image: url(assets/images/login-modal-bg.jpg);">
                                                    <div class="overlay-black clearfix">

                                                        <!-- leftside-content - start -->
                                                        <div class="leftside-content">
                                                            <div class="site-logo-wrapper mb-80">
                                                                <a href="#!" class="logo">
                                                                    <img src="assets/images/2.site-logo.png"
                                                                        alt="logo_not_found">
                                                                </a>
                                                            </div>
                                                            <div class="register-login-link mb-80">
                                                                <ul>
                                                                    <li class="active"><a href="#!">Login</a></li>
                                                                    <li><a href="#!">Register</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="copyright-text">
                                                                <p class="m-0">©2019 <a href="#!"
                                                                        class="yellow-color">Harmoni.com</a>
                                                                    all right
                                                                    reserved, made with <i class="fas fa-heart"></i> by
                                                                    jThemes Studio </p>
                                                            </div>
                                                        </div>
                                                        <!-- leftside-content - end -->

                                                        <!-- rightside-content - start -->
                                                        <div class="rightside-content text-center">

                                                            <div class="mb-30">
                                                                <h2 class="form-title title-large white-color">Account
                                                                    <strong>Login</strong>
                                                                </h2>
                                                                <span class="form-subtitle white-color">Login to our
                                                                    website, or <strong>REGISTER</strong></span>
                                                            </div>

                                                            <div class="fb-login-btn mb-30">
                                                                <a href="#!">
                                                                    <span class="icon">
                                                                        <i class="fab fa-facebook-f"></i>
                                                                    </span>
                                                                    login with facebook
                                                                </a>
                                                            </div>

                                                            <div class="or-text mb-30">
                                                                <span>or sign in</span>
                                                            </div>

                                                            <div class="login-form text-center mb-50">
                                                                <form action="#!">
                                                                    <div class="form-item">
                                                                        <input type="email"
                                                                            placeholder="example@gmail.com">
                                                                    </div>
                                                                    <div class="form-item">
                                                                        <input type="password" placeholder="Password">
                                                                    </div>
                                                                    <button type="submit" class="login-btn">login
                                                                        now</button>
                                                                </form>
                                                            </div>

                                                            <div class="bottom-text white-color">
                                                                <p class="m-0">
                                                                    * Denotes mandatory field.
                                                                </p>
                                                                <p class="m-0">** At least one telephone number is
                                                                    required.</p>
                                                            </div>

                                                        </div>
                                                        <!-- rightside-content - end -->

                                                        <a class="popup-modal-dismiss" href="#!">
                                                            <i class="fas fa-times"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- menu-item-list - end -->

                            </div>
                        </div>
                    </div>
                    <!-- mainmenu-wrapper - end -->

                </div>
            </div>
        </div>
        <!-- header-bottom - end -->
    </header>
    <!-- header-section - end
		================================================== -->





    <!-- altranative-header - start
		================================================== -->
    <div class="header-altranative">
        <div class="container">
            <div class="logo-area float-left">
                <a href="index.php">
                    <img src="assets\images\logo.png" width="40px" height="50px" alt="logo_not_found">
                </a>
            </div>

            <button type="button" id="sidebarCollapse" class="alt-menu-btn float-right">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- sidebar menu - start -->
        <div class="sidebar-menu-wrapper">
            <div id="sidebar" class="sidebar">
                <span id="sidebar-dismiss" class="sidebar-dismiss">
                    <i class="fas fa-arrow-left"></i>
                </span>

                <div class="sidebar-header">
                    <a href="index.php">
                        <img src="assets\images\logo.png" width="60px" height="60px" alt="logo_not_found">
                    </a>
                </div>

                <!-- sidebar-form - start -->
                <div class="sidebar-form">
                    <form action="#">
                        <input id="altmenu-sidebar-search" type="search" placeholder="Search">
                        <label for="altmenu-sidebar-search"><i class="fas fa-search"></i></label>
                    </form>
                </div>
                <!-- sidebar-form - end -->

                <!-- main-pages-links - start -->

                <!-- main-pages-links - end -->

                <!-- other-pages-links - start -->
                <div class="menu-link-list other-pages-links">
                    <h2 class="menu-title">all single pages</h2>
                    <ul>
                        <li>
                            <a href="about.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                About Us
                            </a>
                        </li>
                        <li class="mega-open">
                            <a class="mega-tags" href="service.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                our Services
                            </a>
                        </li>
                        <li>
                            <a href="blog.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                Latest blogs
                            </a>
                        </li>
                        <li>
                            <a href="gallery.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                our gallery
                            </a>
                        </li>
                        <li>
                            <a href="speaker.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                event speakers
                            </a>
                        </li>
                        <li>
                            <a href="contact.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                contact us
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- other-pages-links - end -->

                <!-- inner-pages-links - start -->
                <div class="menu-link-list inner-pages-links">
                    <h2 class="menu-title">all inner pages</h2>
                    <ul>
                        <li>
                            <a href="booking.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                event booking
                            </a>
                        </li>
                        <li>
                            <a href="event-details.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                event details
                            </a>
                        </li>
                        <li>
                            <a href='blog-details.php'>
                                <span class="icon"><i class="fas fa-home"></i></span>
                                blog details
                            </a>
                        </li>
                        <li>
                            <a href="faq.php">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                Frequently Ask Qusetion
                            </a>
                        </li>
                        <li>
                            <a href="404-error.html">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                404 error
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- inner-pages-links - end -->

                <!-- login-btn-group - start -->
                <div class="login-btn-group">
                    <ul>

                        <li>
                            <a href="#alt-register-modal" class="register-modal-btn">
                                Register
                            </a>
                            <div id="alt-register-modal" class="reglog-modal-wrapper register-modal mfp-hide clearfix"
                                style="background-image: url(assets/images/login-modal-bg.jpg);">
                                <div class="overlay-black clearfix">

                                    <!-- leftside-content - start -->
                                    <div class="leftside-content">
                                        <div class="site-logo-wrapper mb-80">
                                            <a href="index.php" class="logo">
                                                <img src="assets\images\logo.png" alt="logo_not_found">
                                            </a>
                                        </div>
                                        <div class="register-login-link mb-80">
                                            <ul>
                                                <li><a href="#!">Login</a></li>
                                                <li class="active"><a href="#!">Register</a></li>
                                            </ul>
                                        </div>
                                        <div class="copyright-text">
                                            <p class="m-0">©2019 <a href="#!" class="yellow-color">Harmoni.com</a> all
                                                right reserved, made with <i class="fas fa-heart"></i> by jThemes Studio
                                            </p>
                                        </div>
                                    </div>
                                    <!-- leftside-content - end -->

                                    <!-- rightside-content - start -->
                                    <div class="rightside-content text-center">

                                        <div class="mb-30">
                                            <h2 class="form-title title-large white-color">Account
                                                <strong>Register</strong>
                                            </h2>
                                            <span class="form-subtitle white-color">Have an account? <strong>LOGIN
                                                    NOW</strong></span>
                                        </div>

                                        <div class="login-form text-center mb-50">
                                            <form action="#!">
                                                <div class="form-item">
                                                    <input type="email" placeholder="User Name">
                                                </div>
                                                <div class="form-item">
                                                    <input type="password" placeholder="Password">
                                                </div>
                                                <div class="form-item">
                                                    <input type="email" placeholder="Repeat Password">
                                                </div>
                                                <div class="form-item">
                                                    <input type="password" placeholder="Email Address">
                                                </div>
                                                <div class="human-verification text-left">
                                                    <input type="checkbox" id="alt-imnotarobot">
                                                    <label for="alt-imnotarobot">I'm not a robot</label>
                                                    <span class="verification-image">
                                                        <img src="assets/images/iamnotrobot.png" alt="Image_not_found">
                                                    </span>
                                                </div>
                                                <button type="submit" class="login-btn">login now</button>
                                            </form>
                                        </div>

                                        <div class="bottom-text white-color">
                                            <p class="m-0">
                                                * Denotes mandatory field.
                                            </p>
                                            <p class="m-0">** At least one telephone number is required.</p>
                                        </div>

                                    </div>
                                    <!-- rightside-content - end -->

                                    <a class="popup-modal-dismiss" href="#!">
                                        <i class="fas fa-times"></i>
                                    </a>

                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#alt-login-modal" class="login-modal-btn">
                                Login
                            </a>
                            <div id="alt-login-modal" class="reglog-modal-wrapper mfp-hide clearfix"
                                style="background-image: url(assets/images/login-modal-bg.jpg);">
                                <div class="overlay-black clearfix">

                                    <!-- leftside-content - start -->
                                    <div class="leftside-content">
                                        <div class="site-logo-wrapper mb-80">
                                            <a href="index.php" class="logo">
                                                <img src="assets\images\logo.png" width="60px" height="60px"
                                                    alt="logo_not_found">
                                            </a>
                                        </div>
                                        <div class="register-login-link mb-80">
                                            <ul>
                                                <li class="active"><a href="#!">Login</a></li>
                                                <li><a href="#!">Register</a></li>
                                            </ul>
                                        </div>
                                        <div class="copyright-text">
                                            <p class="m-0">©2018 <a href="#!" class="yellow-color">Harmoni.com</a> all
                                                right reserved, made with <i class="fas fa-heart"></i> by jThemes Studio
                                            </p>
                                        </div>
                                    </div>
                                    <!-- leftside-content - end -->

                                    <!-- rightside-content - start -->
                                    <div class="rightside-content text-center">

                                        <div class="mb-30">
                                            <h2 class="form-title title-large white-color">Account
                                                <strong>Login</strong>
                                            </h2>
                                            <span class="form-subtitle white-color">Login to our website, or
                                                <strong>REGISTER</strong></span>
                                        </div>

                                        <div class="fb-login-btn mb-30">
                                            <a href="#!">
                                                <span class="icon">
                                                    <i class="fab fa-facebook-f"></i>
                                                </span>
                                                login with facebook
                                            </a>
                                        </div>

                                        <div class="or-text mb-30">
                                            <span>or sign in</span>
                                        </div>

                                        <div class="login-form text-center mb-50">
                                            <form action="#!">
                                                <div class="form-item">
                                                    <input type="email" placeholder="example@gmail.com">
                                                </div>
                                                <div class="form-item">
                                                    <input type="password" placeholder="Password">
                                                </div>
                                                <button type="submit" class="login-btn">login now</button>
                                            </form>
                                        </div>

                                        <div class="bottom-text white-color">
                                            <p class="m-0">
                                                * Denotes mandatory field.
                                            </p>
                                            <p class="m-0">** At least one telephone number is required.</p>
                                        </div>

                                    </div>
                                    <!-- rightside-content - end -->

                                    <a class="popup-modal-dismiss" href="#!">
                                        <i class="fas fa-times"></i>
                                    </a>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- login-btn-group - end -->

                <!-- social-links - start -->
                <div class="social-links">
                    <h2 class="menu-title">get in touch</h2>
                    <div class="mb-15">
                        <h3 class="contact-info">
                            <i class="fas fa-phone"></i>
                            100-2222-9999
                        </h3>
                        <h3 class="contact-info">
                            <i class="fas fa-envelope"></i>
                            info@harmoni.com
                        </h3>
                    </div>
                    <ul>
                        <li>
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-twitch"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                        <li>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <a href="contact.php" class="contact-btn">contact us</a>
                </div>
                <!-- social-links - end -->

                <div class="overlay"></div>
            </div>
        </div>
        <!-- sidebar menu - end -->
    </div>
    <!-- altranative-header - end
		================================================== -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>