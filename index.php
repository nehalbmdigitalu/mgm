<?php include 'include/header.php'; ?>

<style>
/* styles.css */


.body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 70vh;
    background: #f1f4fd;
}

.container {
    max-width: 1400px;
    width: 97%;
}

.slider-wrapper {
    position: relative;
}

.slider-wrapper .slide-button {
    position: absolute;
    top: 50%;
    outline: none;
    border: none;
    height: 50px;
    width: 50px;
    z-index: 5;
    color: #fff;
    display: flex;
    cursor: pointer;
    font-size: 2.2rem;
    background: #000;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transform: translateY(-70%);
}

.slider-wrapper .slide-button:hover {
    background: #404040;
}

.slider-wrapper .slide-button#prev-slide {
    left: -25px;
    display: none;
}

.slider-wrapper .slide-button#next-slide {
    right: -25px;
}

.slider-wrapper .image-list {
    display: grid;
    grid-template-columns: repeat(32, 1fr);
    gap: 0px;
    font-size: 0;
    list-style: none;
    margin-bottom: 30px;
    overflow-x: auto;
    scrollbar-width: none;
}

.slider-wrapper .image-list::-webkit-scrollbar {
    display: none;
}

.slider-wrapper .image-list .image-item {
    width: 350px;
    height: 450px;
    /* object-fit: cover; */
}

.slider-wrapper .image-list .image-item img {
    width: 310px !important;
    height: 345px;
    object-fit: cover;
}

.container .slider-scrollbar {
    height: 24px;
    width: 100%;
    display: flex;
    align-items: center;
}

.slider-scrollbar .scrollbar-track {
    background: #ccc;
    width: 100%;
    height: 2px;
    display: flex;
    align-items: center;
    border-radius: 4px;
    position: relative;
}

.slider-scrollbar:hover .scrollbar-track {
    height: 4px;
}

.slider-scrollbar .scrollbar-thumb {
    position: absolute;
    background: #000;
    top: 0;
    bottom: 0;
    width: 50%;
    height: 100%;
    cursor: grab;
    border-radius: inherit;
}

.slider-scrollbar .scrollbar-thumb:active {
    cursor: grabbing;
    height: 8px;
    top: -2px;
}

.slider-scrollbar .scrollbar-thumb::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: -10px;
    bottom: -10px;
}

/* Styles for mobile and tablets */
@media only screen and (max-width: 1023px) {
    .slider-wrapper .slide-button {
        display: none !important;
    }

    .slider-wrapper .image-list {
        gap: 10px;
        margin-bottom: 15px;
        scroll-snap-type: x mandatory;
    }

    .slider-wrapper .image-list .image-item {
        width: 180px;
        height: 450px;
    }

    .slider-wrapper .image-list .image-item img {
        width: 210px !important;
        height: 300px;
        object-fit: cover;
    }

    .slider-scrollbar .scrollbar-thumb {
        width: 20%;
    }
}
</style>



<!-- slide-section - start
        ================================================== -->
<section id="main-carousel2" class="main-carousel2 clearfix">

    <div class="item" style="background-image: url(assets/images/slider/slider-bg4.jpg);">
        <div class="overlay-black">
            <div class="container">
                <div class="row">

                    <!-- reg-form - start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="reg-form">

                            <div class="from-title">
                                <h2 class="title-text"><strong>register</strong> now</h2>
                                <div class="sub-title">make a booking now</div>
                            </div>

                            <div class="form-wrapper mb-30">
                                <form action="#">

                                    <div class="form-item">
                                        <input type="text" placeholder="Full Name">
                                    </div>

                                    <div class="form-item">
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="form-item">
                                        <input type="tel" placeholder="Phone Number">
                                    </div>

                                    <div class="form-item">
                                        <select class="package-select">
                                            <option selected="">Choose Package</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="form-item">
                                        <select class="quantity-select">
                                            <option selected="">Ticket Quantity</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                </form>
                            </div>

                            <button type="submit" class="submit-btn">register now</button>

                        </div>
                    </div>
                    <!-- reg-form - end -->

                    <!-- slider-content - start -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="slider-content">
                            <div class="countdown-timer mb-50">
                                <ul class="countdown-list" data-countdown="2020/08/08"></ul>
                            </div>
                            <span class="date">26 december 2019</span>
                            <h1 class="title-text">
                                MGM
                            </h1>
                            <strong class="bold-text" style="display:inline-block; font-size:2em;">EVENT MANAGEMENT
                                COMPANY</strong>
                            <a href="#!" class="details-btn">event details</a>
                        </div>
                    </div>
                    <!-- slider-content - end -->

                </div>
            </div>
        </div>
    </div>

    <div class="item" style="background-image: url(assets/images/slider/slider-bg5.jpg);">
        <div class="overlay-black">
            <div class="container">
                <div class="row">

                    <!-- reg-form - start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="reg-form">

                            <div class="from-title">
                                <h2 class="title-text"><strong>register</strong> now</h2>
                                <div class="sub-title">make a booking now</div>
                            </div>

                            <div class="form-wrapper mb-30">
                                <form action="#">

                                    <div class="form-item">
                                        <input type="text" placeholder="Full Name">
                                    </div>

                                    <div class="form-item">
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="form-item">
                                        <input type="tel" placeholder="Phone Number">
                                    </div>

                                    <div class="form-item">
                                        <select class="package-select">
                                            <option selected="">Choose Package</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="form-item">
                                        <select class="quantity-select">
                                            <option selected="">Ticket Quantity</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                </form>
                            </div>

                            <button type="submit" class="submit-btn">register now</button>

                        </div>
                    </div>
                    <!-- reg-form - end -->

                    <!-- slider-content - start -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="slider-content">
                            <div class="countdown-timer mb-50">
                                <ul class="countdown-list" data-countdown="2020/08/08"></ul>
                            </div>
                            <span class="date">26 december 2019</span>
                            <h1 class="title-text">
                                MGM
                            </h1>
                            <strong class="bold-text" style="font-size:2em;">ALL WEDDING EVENT</strong>
                            <a href="#!" class="details-btn">event details</a>
                        </div>
                    </div>
                    <!-- slider-content - end -->

                </div>
            </div>
        </div>
    </div>

    <div class="item" style="background-image: url(assets/images/slider/slider-bg6.jpg);">
        <div class="overlay-black">
            <div class="container">
                <div class="row">

                    <!-- reg-form - start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="reg-form">

                            <div class="from-title">
                                <h2 class="title-text"><strong>register</strong> now</h2>
                                <div class="sub-title">make a booking now</div>
                            </div>

                            <div class="form-wrapper mb-30">
                                <form action="#">

                                    <div class="form-item">
                                        <input type="text" placeholder="Full Name">
                                    </div>

                                    <div class="form-item">
                                        <input type="email" placeholder="Email Address">
                                    </div>

                                    <div class="form-item">
                                        <input type="tel" placeholder="Phone Number">
                                    </div>

                                    <div class="form-item">
                                        <select class="package-select">
                                            <option selected="">Choose Package</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                    <div class="form-item">
                                        <select class="quantity-select">
                                            <option selected="">Ticket Quantity</option>
                                            <option value="1">Option 1</option>
                                            <option value="2">Option 2</option>
                                            <option value="3">Option 3</option>
                                        </select>
                                    </div>

                                </form>
                            </div>

                            <button type="submit" class="submit-btn">register now</button>

                        </div>
                    </div>
                    <!-- reg-form - end -->

                    <!-- slider-content - start -->
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="slider-content">
                            <div class="countdown-timer mb-50">
                                <ul class="countdown-list" data-countdown="2020/08/08"></ul>
                            </div>
                            <span class="date">26 december 2019</span>
                            <h1 class="title-text">
                                MGM
                            </h1>
                            <strong class="bold-text" style="font-size:2em;">MUSIC SHOW ORGANIZER</strong>
                            <a href="#!" class="details-btn">event details</a>
                        </div>
                    </div>
                    <!-- slider-content - end -->

                </div>
            </div>
        </div>
    </div>

</section>
<!-- slide-section - end
        ================================================== -->






<!-- event-advertisement-section - start
        ================================================== -->
<section id="event-advertisement-section" class="event-advertisement-section clearfix"
    style="background-image: url(assets/images/special-offer-bg.png);">
    <div class="container">
        <div class="row">

            <!-- event-item - start -->
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="event-item">

                    <div class="event-image">
                        <img src="assets/images/event/2.jpg" alt="Image_not_found">
                        <a href="#!" class="plus-effect"></a>
                    </div>

                    <div class="event-content">
                        <div class="event-title">
                            <span class="tag">
                                <i class="fas fa-bookmark"></i>
                                Upcoming Event
                            </span>
                            <h3 class="title-text"><strong>Arijit Singh Musical Concert </strong></h3>
                            <small class="ticket-price">Tickets start from $10.00</small>
                        </div>
                        <div class="event-info ul-li-block">
                            <ul>

                                <li>
                                    <span class="icon">
                                        <i class="far fa-clock"></i>
                                    </span>
                                    On 24 March

                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                    Exibition Ground Pune
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- event-item - end -->

            <!-- right-content-wrapper - start -->
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="right-content-wrapper">

                    <div class="countdown-timer mb-30">
                        <ul class="countdown-list" data-countdown="2020/08/08"></ul>
                    </div>

                    <div class="text-right">
                        <a href="#!" class="booking-btn">booking ticket</a>
                        <a href="#!" class="details-btn">tickets & details</a>
                    </div>

                </div>
            </div>
            <!-- right-content-wrapper - end -->

        </div>
    </div>
</section>
<!-- event-advertisement-section - end
        ================================================== -->





<!-- about-section - start
        ================================================== -->
<section id="about-section" class="about-section sec-ptb-100 clearfix">
    <div class="container">
        <div class="row">

            <!-- section-title - start -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="section-title text-left mb-30">
                    <span class="line-style"></span>
                    <small class="sub-title">we are MGM</small>
                    <h2 class="big-title"><strong>No.1</strong> Events Management</h2>
                    <p class="black-color mb-50">
                        From the corporate conferences and product launches to wedding and social gatherings ,we
                        approaches each project with ethusiasm and attention to details .
                    </p>
                    <a href="about.php" class="custom-btn">
                        about MGM
                    </a>
                </div>
            </div>
            <!-- section-title - end -->

            <!-- about-item-wrapper - start -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="about-item-wrapper ul-li">
                    <ul>

                        <li>
                            <a href="#!" class="about-item">
                                <span class="icon">
                                    <i class="flaticon-handshake"></i>
                                </span>
                                <strong class="title">
                                    Friendly Team
                                </strong>
                                <small class="sub-title">
                                    More than 200 teams
                                </small>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="about-item">
                                <span class="icon">
                                    <i class="flaticon-two-balloons"></i>
                                </span>
                                <strong class="title">
                                    perfact venues
                                </strong>
                                <small class="sub-title">
                                    perfact venues
                                </small>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="about-item">
                                <span class="icon">
                                    <i class="flaticon-cheers"></i>
                                </span>
                                <strong class="title">
                                    Unique Scenario
                                </strong>
                                <small class="sub-title">
                                    We thinking out of the box
                                </small>
                            </a>
                        </li>

                        <li>
                            <a href="#!" class="about-item">
                                <span class="icon">
                                    <i class="flaticon-clown-hat"></i>
                                </span>
                                <strong class="title">
                                    Unforgettable Time
                                </strong>
                                <small class="sub-title">
                                    We make you perfect event
                                </small>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="about-item">
                                <span class="icon">
                                    <i class="flaticon-speech-bubble"></i>
                                </span>
                                <strong class="title">
                                    24/7 Hours Support
                                </strong>
                                <small class="sub-title">
                                    Anytime anywhere
                                </small>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="about-item">
                                <span class="icon">
                                    <i class="flaticon-light-bulb"></i>
                                </span>
                                <strong class="title">
                                    Briliant Idea
                                </strong>
                                <small class="sub-title">
                                    We have million idea
                                </small>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- about-item-wrapper - end -->

        </div>
    </div>
</section>
<!-- about-section - end
        ================================================== -->




<!-- event-gallery-section - start
		================================================== -->
<section id="event-gallery-section" class="event-gallery-section sec-ptb-100 clearfix">
    <div class="container">

        <div class="button-group filters-button-group mb-30">
            <button class="button is-checked" data-filter="*">
                <i class="fas fa-star"></i>
                <strong>all</strong> gallery
            </button>
            <button class="button" data-filter=".video-gallery">
                <i class="fas fa-play-circle"></i>
                <strong>video</strong> gallery
            </button>
            <button class="button" data-filter=".photo-gallery">
                <i class="far fa-image"></i>
                <strong>photo</strong> gallery
            </button>
        </div>

        <div class="grid zoom-gallery clearfix mb-80"
            data-isotope="{ &quot;masonry&quot;: { &quot;columnWidth&quot;: 0 } }">
            <div class="grid-item grid-item--height2 photo-gallery " data-category="photo-gallery">
                <a class="popup-link"
                    href="https://cdn.cbeditz.com/cbeditz/large/wedding-marriage-couple-image-background-free-kd3px.jpg">
                    <img src="https://thelavenderplanners.com/wp-content/uploads/elementor/thumbs/1-2-1-1024x683-1-q3sfqjn600s8ldz3ze5h7jl5g50d4yjtb9msst4d8g.jpg"
                        alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Shushank Wedding day</h3>
                    <span>Wedding Party, 24 June 2019</span>
                </div>
            </div>
            <div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
                <a class="popup-youtube" href="Vedio\WhatsApp Video 2024-03-11 at 2.39.45 PM (1).mp4">
                    <img src="https://i.pinimg.com/736x/e9/2f/54/e92f5496f837152327125b0a8c0aeee3.jpg"
                        alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Arijit Singh Musical Events </h3>
                    <span>Musical Event Show, 24 June 2019</span>
                </div>
            </div>
            <div class="grid-item photo-gallery " data-category="photo-gallery">
                <a class="popup-link"
                    href="https://images.pexels.com/photos/1444442/pexels-photo-1444442.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                    <img src="https://www.brides.com/thmb/aD_pAL3rFvNyvWeVGexF5X84NHI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/cakecutting-6c0bede8d78f441aa0433924ac15d244.jpg"
                        alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Amir Marriage Party</h3>
                    <span>Marriage, 24 June 2016</span>
                </div>
            </div>

            <div class="grid-item photo-gallery " data-category="photo-gallery">
                <a class="popup-link" href="assets/images/gallery/4.image.jpg">
                    <img src="https://e0.pxfuel.com/wallpapers/859/885/desktop-wallpaper-indian-wedding-couple-graphy-couples-of-dipak-studios-hindu-wedding.jpg"
                        alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Aakash Wedding day</h3>
                    <span>Wedding Party, 24 June 2016</span>
                </div>
            </div>
            <div class="grid-item grid-item--width2 video-gallery " data-category="video-gallery">
                <a class="popup-youtube" href="https://youtu.be/-haiaZ011OM">
                    <img src="https://imgmedia.lbb.in/media/2023/12/65803c47a42b67455b92a88d_1702902855073.jpg"
                        alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>New Year Celebration</h3>
                    <span>New Year Festival, 1 jan 2023</span>
                </div>
            </div>

            <div class="grid-item grid-item--width2 photo-gallery " data-category="photo-gallery">
                <a class="popup-link" href="assets/images/gallery/6.image.jpg">
                    <img src="assets/images/gallery/6.image.jpg" alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Wedding</h3>
                    <span>Wedding Party, 24 June 2019</span>
                </div>
            </div>
            <div class="grid-item video-gallery " data-category="video-gallery">
                <a class="popup-youtube" href="Vedio\WhatsApp Video 2024-03-11 at 2.43.22 PM.mp4">
                    <img src="https://www.dellaresorts.com/blog/wp-content/uploads/2017/12/Gala-Night-at-Della-870x450.jpg"
                        alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Tulsi Kumar Concert</h3>
                    <span>Music Festival, 24 June 2023</span>
                </div>
            </div>
            <div class="grid-item photo-gallery " data-category="photo-gallery">
                <a class="popup-link" href="Vedio\WhatsApp Video 2024-03-11 at 2.42.23 PM (1).mp4">
                    <img src="" alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Arijit Singh Sol Concert</h3>
                    <span>Music Festival, 24 June 2022</span>
                </div>
            </div>


            <div class="grid-item photo-gallery " data-category="photo-gallery">
                <a class="popup-link" href="Vedio\img1.jpeg">
                    <img src="Vedio\img1.jpeg" alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Wedding party Events</h3>
                    <span>Music Festival, 24 June 2022</span>
                </div>
            </div>



            <div class="grid-item photo-gallery " data-category="photo-gallery">
                <a class="popup-link" href="Vedio\img1.jpeg">
                    <img src="Vedio\img2.jpeg" alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Wedding party Events</h3>
                    <span>Music Festival, 24 June 2022</span>
                </div>
            </div>

            <div class="grid-item photo-gallery " data-category="photo-gallery">
                <a class="popup-link" href="Vedio\img1.jpeg">
                    <img src="Vedio\img3.jpeg" alt="Image_not_found">
                </a>
                <div class="item-content">
                    <h3>Wedding party Events</h3>
                    <span>Music Festival, 24 June 2022</span>
                </div>
            </div>




        </div>

        <div class="pagination ul-li clearfix">
            <ul>
                <li class="page-item prev-item">
                    <a class="page-link" href="#">Prev</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">01</a></li>
                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item"><a class="page-link" href="#">04</a></li>
                <li class="page-item"><a class="page-link" href="#">05</a></li>
                <li class="page-item next-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </div>

    </div>
</section>
<!-- event-gallery-section - end
		================================================== -->







<!-- event-expertise-section - start
        ================================================== -->
<section id="event-expertise-section2" class="event-expertise-section2 bg-gray-light sec-ptb-100 clearfix">
    <div class="container">

        <!-- section-title - start -->
        <div class="section-title text-center mb-50">
            <small class="sub-title">our services</small>
            <h2 class="big-title">MGM<strong>Expertise</strong></h2>
        </div>
        <!-- section-title - end -->

        <!-- slider container -->

        <div class="body">
            <div class="container">
                <div class="slider-wrapper">
                    <button id="prev-slide" class="slide-button material-symbols-rounded">
                        < </button>
                            <ul class="image-list">
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://thelavenderplanners.com/wp-content/uploads/elementor/thumbs/Akhila-Pranay-Indian-wedding-53-q3u9dk0r47kfmtkjntfci8vmxu15s5jdj30bgxgmww.jpg"
                                                alt="Image_not_found">
                                            <a href="wedding.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Wedding Party</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="wedding.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class=" image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/artist-lb-1.jpg"
                                                alt="Image_not_found">
                                            <a href="mgmband.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Mgm The Band</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="mgmband.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class=" image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="download%20(6).jpg" alt="Image_not_found">
                                            <a href="celebratity.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Celebrity Management</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="celebratity.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class=" image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/magic-gallery-3.jpg"
                                                alt="Image_not_found">
                                            <a href="classical.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Magical Show</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="classical.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class=" image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/dj-gallery-1.jpg"
                                                alt="Image_not_found">
                                            <a href="dj_artist.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Dj Artist</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="dj_artist.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class=" image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/comedian-gallery-3.jpg"
                                                alt="Image_not_found">
                                            <a href="standup_comedy.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Standup Comedy</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="standup_comedy.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.natyasutraonline.com/uploads/music-channel/main_img/rajasthani-jugalbandhi.jpg"
                                                alt="Image_not_found">
                                            <a href="folk_music.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Rajsthani Sangeet</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="folk_music.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="assets/images/experties/img1.jpg" alt="Image_not_found">
                                            <a href="unleash.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Laughter Event</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="unleash.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/wedding/Pre-Wedding-3.jpg"
                                                alt="Image_not_found">
                                            <a href="pre_wedding.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Pre Wedding Planning</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="pre_wedding.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.sengalleries.com/images/photos_image/11667458956.jpg"
                                                alt="Image_not_found">
                                            <a href="#!" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Ceremony</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="ceremony.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/video-photo-gallery-1.jpg"
                                                alt="Image_not_found">
                                            <a href="photography_vedio.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Photography & Vediography</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="photography_vedio.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://m.media-amazon.com/images/I/81FirJI1XhL._AC_UF894,1000_QL80_.jpg"
                                                alt="Image_not_found">
                                            <a href="Aniversary.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Anniversary Celebration</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="Aniversary.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="assets/images/experties/img1.jpg" alt="Image_not_found">
                                            <a href="hldi-function.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Haldi Celebration</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="hldi-function.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/wedding/Destination-Wedding-6.jpg"
                                                alt="Image_not_found">
                                            <a href="destination_wedding.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Destination Wedding Plan</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="destination_wedding.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://thelavenderplanners.com/wp-content/uploads/elementor/thumbs/taarini-weddings-19-q3ualojzy7z0nth3zw2uk40mv0jh4mpqxhiwik1atc.jpg"
                                                alt="Image_not_found">
                                            <a href="reception.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Reception Celebration</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="reception.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://thelavenderplanners.com/wp-content/uploads/elementor/thumbs/SwiniKharaE_1677684722943-q3ubulaeh9g7d48prax5os1glr6sw102frm1yhg5j4.jpg"
                                                alt="Image_not_found">
                                            <a href="Engagements.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Engagement Celebration</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="Engagements.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.admin.booktheparty.in/assets/images/entry_concepts/72a0a82534c641ee8c98a7da75493daa.jpeg"
                                                alt="Image_not_found">
                                            <a href="bhangra.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Bhangra Dance Party</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="bhangra.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.sangeetsamvaad.com/images/ShriRamakantGaikwad.jpg"
                                                alt="Image_not_found">
                                            <a href="classical_music.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Classical Music Event</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="classical_music.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.theweddingcardsonline.com/cdn/shop/articles/sangeet.jpg?v=1662092977"
                                                alt="Image_not_found">
                                            <a href="sangeet.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Wedding Sangeet</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="sangeet.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://images.indianexpress.com/2021/11/MQ-1263_820.jpg?w=630"
                                                alt="Image_not_found">
                                            <a href="quwwali.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Qawwali Program</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="quwwali.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://5.imimg.com/data5/ANDROID/Default/2022/8/UM/AZ/XG/67868282/product-jpeg-500x500.jpg"
                                                alt="Image_not_found">
                                            <a href="shehnai.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Shehnai Event</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="shehnai.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://thelavenderplanners.com/wp-content/uploads/elementor/thumbs/IMG-20200619-WA0100-q3ufdzcypxu6ul76vv9x44rewpan39qgaak2fikc8w.jpg"
                                                alt="Image_not_found">
                                            <a href="birthday-celebration.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Birthday Celebration Party</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="birthday-celebration.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="assets/images/experties/img1.jpg" alt="Image_not_found">
                                            <a href="#!" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Choreographer</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="choreographer.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://cdn-dnbcl.nitrocdn.com/vNvhJizKuejBrHskCVwtxpdbMDumHHnq/assets/images/optimized/rev-06c0a79/wp-content/uploads/2021/06/maxresdefault-2-300x169.jpg"
                                                alt="Image_not_found">
                                            <a href="jagran.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Bhagwati Jagran</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="jagran.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://s1.dmcdn.net/v/63mrC1LTyThyl-k1I/x720"
                                                alt="Image_not_found">
                                            <a href="sai_sandhya.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Sai Sandhya</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="sai_sandhya.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.djjs.org/uploads/news/5ab5c5954c62b135802081.jpg"
                                                alt="Image_not_found">
                                            <a href="bhajan_sandhya.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Bhajan Sandhya</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="bhajan_sandhya.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="http://localhost:8000/MGM/download%20(7).jpg"
                                                alt="Image_not_found">
                                            <a href="skyevent.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Celebrity Live Concert</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="skyevent.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/artist-dance-troup-1.jpg"
                                                alt="Image_not_found">
                                            <a href="dance_group.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Dance Event Organizer</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="dance_group.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/artist-bollywood-2.jpg"
                                                alt="Image_not_found">
                                            <a href="showtime.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Celebrity Chief Guest </h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="showtime.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/gallery/artist/singer-gallery-3.jpg"
                                                alt="Image_not_found">
                                            <a href="MusicalShow.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Music Show Organizer</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="MusicalShow.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="image-item">
                                    <div class="expertise-item">

                                        <div class="expertise-image">
                                            <img src="https://www.showtimeevent.com/assets/img/event/College-event.jpg"
                                                alt="Image_not_found">
                                            <a href="mgmorchestra.php" class="plus-effect"></a>
                                        </div>

                                        <div class="expertise-content">
                                            <h3 class="title">Mgm Symphony Orchestra</h3>
                                            <p>Start from <strong>$1.200-$2.000</strong></p>
                                            <a href="mgmorchestra.php" class="link-btn">
                                                <i class="fas fa-arrow-circle-right"></i>
                                            </a>
                                        </div>

                                    </div>
                                </div>


                            </ul>
                            <button id="next-slide" class="slide-button material-symbols-rounded">
                                >
                            </button>
                </div>
                <div class="slider-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- speaker-section - start
        ================================================== -->
        <section id="speaker-section" class="speaker-section clearfix">
            <div class="jarallax" style="background-image: url(assets/images/speaker/Black-White-Dubai-Wallpaper.jpg);">
                <div class="overlay-white">
                    <div class="container">

                        <!-- speaker-carousel - start -->
                        <div class="speaker-carousel">
                            <div class="slider-for">

                                <div class="item">
                                    <div class="row">

                                        <!-- speaker-image - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-image image-wrapper text-center">
                                                <img src="assets\images\logo.png" alt="Image_not_found">
                                                <span class="speaker-name"><strong>Arushi</strong> Berthas</span>
                                            </div>
                                        </div>
                                        <!-- speaker-image - end -->

                                        <!-- speaker-content - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-content">

                                                <!-- section-title - start -->
                                                <div class="section-title text-left mb-50">
                                                    <span class="line-style"></span>
                                                    <small class="sub-title">MGM staffs</small>
                                                    <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                                                </div>
                                                <!-- section-title - end -->

                                                <div class="speaker-info">
                                                    <div class="speaker-title mb-30">
                                                        <span class="speaker-name"><strong>Jenni</strong> Berthas</span>
                                                        <span class="work-experienc yellow-color"><strong>15
                                                                Years</strong>
                                                            experienced</span>
                                                    </div>
                                                    <p class="black-color mb-30">
                                                        Event managers are the architects of the entire operation,
                                                        orchestrating logistics, coordinating with clients, and ensuring
                                                        the seamless execution of events. </p>

                                                    </p>
                                                    <div class="speaker-social-network ul-li">
                                                        <h3 class="title title-medium mb-15">
                                                            <strong>Social</strong> Network
                                                        </h3>
                                                        <ul>
                                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                                            </li>
                                                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- speaker-content - end -->

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">

                                        <!-- speaker-image - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-image image-wrapper text-center">
                                                <img src="assets\images\logo.png" alt="Image_not_found">
                                                <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                                            </div>
                                        </div>
                                        <!-- speaker-image - end -->

                                        <!-- speaker-content - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-content">

                                                <!-- section-title - start -->
                                                <div class="section-title text-left mb-50">
                                                    <span class="line-style"></span>
                                                    <small class="sub-title">MGM staffs</small>
                                                    <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                                                </div>
                                                <!-- section-title - end -->

                                                <div class="speaker-info">
                                                    <div class="speaker-title mb-30">
                                                        <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                                                        <span class="work-experienc yellow-color"><strong>15
                                                                Years</strong>
                                                            experienced</span>
                                                    </div>
                                                    <p class="black-color mb-30">
                                                        Event managers are the architects of the entire operation,
                                                        orchestrating logistics, coordinating with clients, and ensuring
                                                        the seamless execution of events. </p>

                                                    </p>
                                                    <div class="speaker-social-network ul-li">
                                                        <h3 class="title title-medium mb-15">
                                                            <strong>Social</strong> Network
                                                        </h3>
                                                        <ul>
                                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                                            </li>
                                                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- speaker-content - end -->

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">

                                        <!-- speaker-image - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-image image-wrapper text-center">
                                                <img src="assets\images\logo.png" alt="Image_not_found">
                                                <span class="speaker-name"><strong>Denies</strong> Suarez</span>
                                            </div>
                                        </div>
                                        <!-- speaker-image - end -->

                                        <!-- speaker-content - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-content">

                                                <!-- section-title - start -->
                                                <div class="section-title text-left mb-50">
                                                    <span class="line-style"></span>
                                                    <small class="sub-title">MGM staffs</small>
                                                    <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                                                </div>
                                                <!-- section-title - end -->

                                                <div class="speaker-info">
                                                    <div class="speaker-title mb-30">
                                                        <span class="speaker-name"><strong>Denies</strong> Suarez</span>
                                                        <span class="work-experienc yellow-color"><strong>15
                                                                Years</strong>
                                                            experienced</span>
                                                    </div>
                                                    <p class="black-color mb-30">
                                                        Event managers are the architects of the entire operation,
                                                        orchestrating logistics, coordinating with clients, and ensuring
                                                        the seamless execution of events. </p>

                                                    </p>
                                                    <div class="speaker-social-network ul-li">
                                                        <h3 class="title title-medium mb-15">
                                                            <strong>Social</strong> Network
                                                        </h3>
                                                        <ul>
                                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                                            </li>
                                                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- speaker-content - end -->

                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">

                                        <!-- speaker-image - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-image image-wrapper text-center">
                                                <img src="assets\images\logo.png" alt="Image_not_found">
                                                <span class="speaker-name"><strong>Jonathan</strong> Doe</span>
                                            </div>
                                        </div>
                                        <!-- speaker-image - end -->

                                        <!-- speaker-content - start -->
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="speaker-content">

                                                <!-- section-title - start -->
                                                <div class="section-title text-left mb-50">
                                                    <span class="line-style"></span>
                                                    <small class="sub-title">MGM staffs</small>
                                                    <h2 class="big-title">Professional <strong>Speakers</strong></h2>
                                                </div>
                                                <!-- section-title - end -->

                                                <div class="speaker-info">
                                                    <div class="speaker-title mb-30">
                                                        <span class="speaker-name"><strong>Denial</strong> Doe</span>
                                                        <span class="work-experienc yellow-color"><strong>1
                                                                Years</strong>
                                                            experienced</span>
                                                    </div>
                                                    <p class="black-color mb-30">
                                                        Event managers are the architects of the entire operation,
                                                        orchestrating logistics, coordinating with clients, and ensuring
                                                        the seamless execution of events. </p>
                                                    <div class="speaker-social-network ul-li">
                                                        <h3 class="title title-medium mb-15">
                                                            <strong>Social</strong> Network
                                                        </h3>
                                                        <ul>
                                                            <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-twitch"></i></a></li>
                                                            <li><a href="#!"><i class="fab fa-google-plus-g"></i></a>
                                                            </li>
                                                            <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- speaker-content - end -->

                                    </div>
                                </div>

                            </div>

                            <div class="slider-nav">
                                <div class="item">
                                    <div class="item-content">
                                        <span class="speaker-thumbnail">
                                            <img src="data:image/jpeg;base64,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"
                                                width="100%;" alt="Image_not_found">
                                        </span>
                                        <h3 class="speaker-name">Neha Kakkar</h3>
                                        <span class="sub-title">Singer</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-content">
                                        <span class="speaker-thumbnail">
                                            <img src="https://i.scdn.co/image/ab6761610000517436a7262247318ff0f1ad00da"
                                                alt="Image_not_found">
                                        </span>
                                        <h3 class="speaker-name">Shreya Ghoshal</h3>
                                        <span class="sub-title">Singer</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-content">
                                        <span class="speaker-thumbnail">
                                            <img src="https://m.media-amazon.com/images/M/MV5BZGU5ZWFmYjYtMDJjMy00Y2UyLTlhYjctZDg4MWEzN2RlOWVlXkEyXkFqcGdeQXVyNDAzNDk0MTQ@._V1_.jpg"
                                                alt="Image_not_found">
                                        </span>
                                        <h3 class="speaker-name">Tulsi Kumar</h3>
                                        <span class="sub-title">Singer</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-content">
                                        <span class="speaker-thumbnail">
                                            <img src="https://wallpapers.com/images/hd/guru-randhawa-pastel-suit-7nb99hvi4nn7319m.jpg"
                                                alt="Image_not_found">
                                        </span>
                                        <h3 class="speaker-name">Guru Randhawa</h3>
                                        <span class="sub-title">Singer</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-content">
                                        <span class="speaker-thumbnail">
                                            <img src="https://s.saregama.tech/image/c/m/c/17/5f/vishal-mishra_1655101195.jpg"
                                                alt="Image_not_found">
                                        </span>
                                        <h3 class="speaker-name">Vishal Mishra</h3>
                                        <span class="sub-title">Singer</span>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="item-content">
                                        <span class="speaker-thumbnail">
                                            <img src="https://iansportalimages.s3.amazonaws.com/thumbnails/WhatsApp_Image_2023-09-05_at_4.36.24_PM.jpeg"
                                                width="100%;" alt="Image_not_found">
                                        </span>
                                        <h3 class="speaker-name">Kumar Sanu</h3>
                                        <span class="sub-title">Singer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- speaker-carousel - end -->

                        </div>
                    </div>
                </div>
        </section>
        <!-- speaker-section - end
        ================================================== -->





        <!-- testimonial5-section - start
        ================================================== -->
        <section id="testimonial5-section" class="testimonial5-section clearfix">
            <div class="jarallax"
                style="background-image: url('http://localhost:8000/MGM/assets/images/gallery/6.image.jpg');">
                <div class="overlay-black sec-ptb-100">
                    <div class="container">

                        <!-- testimonial5-carousel - start -->
                        <div id="testimonial5-carousel" class="testimonial5-carousel owl-carousel owl-theme">

                            <div class="item text-center">
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                                <p class="clients-comment" style="color:white;">
                                    “Bring people together, or turn your passion into a business. MGM gives you
                                    everything you
                                    need to host your best event yet. lorem ipsum diamet. Bring people together, or turn
                                    your
                                    passion into a business. MGM gives you everything you need to host your best event
                                    yet.”
                                </p>
                                <div class="client-info">
                                    <h3 class="client-name">Jenni Hernandes</h3>
                                    <span class="client-sub-title" style="color:beige;">Graphic Designer</span>
                                </div>
                            </div>

                            <div class="item text-center">
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                                <p class="clients-comment" style="color:white;">
                                    “Bring people together, or turn your passion into a business. MGM gives you
                                    everything you
                                    need to host your best event yet. lorem ipsum diamet. Bring people together, or turn
                                    your
                                    passion into a business. MGM gives you everything you need to host your best event
                                    yet.”
                                </p>
                                <div class="client-info">
                                    <h3 class="client-name">Jenni Hernandes</h3>
                                    <span class="client-sub-title" style="color:beige;">Graphic Designer</span>
                                </div>
                            </div>

                            <div class="item text-center">
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </span>
                                <p class="clients-comment" style="color:white;">
                                    “Bring people together, or turn your passion into a business. MGM gives you
                                    everything you
                                    need to host your best event yet. lorem ipsum diamet. Bring people together, or turn
                                    your
                                    passion into a business. MGM gives you everything you need to host your best event
                                    yet.”
                                </p>
                                <div class="client-info">
                                    <h3 class="client-name">Jenni Hernandes</h3>
                                    <span class="client-sub-title" style="color:beige;">Graphic Designer</span>
                                </div>
                            </div>

                            <div class="item text-center">
                                <span class="quote-icon">
                                    <i class="fas fa-quote-right" style="color:white;"></i>
                                </span>
                                <p class="clients-comment " style="color:white;">
                                    “Bring people together, or turn your passion into a business. MGM gives you
                                    everything you
                                    need to host your best event yet. lorem ipsum diamet. Bring people together, or turn
                                    your
                                    passion into a business. MGM gives you everything you need to host your best event
                                    yet.”
                                </p>
                                <div class="client-info">
                                    <h3 class="client-name">Jenni Hernandes</h3>
                                    <span class="client-sub-title" style="color:beige;">Graphic Designer</span>
                                </div>
                            </div>

                        </div>
                        <!-- testimonial5-carousel - end -->

                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial5-section - end
        ================================================== -->





        <!-- special-offer-section - start
        ================================================== -->
        <section id="special-offer-section" class="special-offer-section clearfix"
            style="background-image: url(assets/images/special-offer-bg.png);">
            <div class="container">
                <div class="row">

                    <!-- special-offer-content - start -->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="special-offer-content">
                            <h2><strong>10%</strong> Off in June~July for <span>Birthday Events</span></h2>
                            <p class="m-0">
                                Contact us now and we will make your event unique & unforgettable
                            </p>
                        </div>
                    </div>
                    <!-- special-offer-content - end -->

                    <!-- event-makeing-btn - start -->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="event-makeing-btn">
                            <a href="#!">make an event now</a>
                        </div>
                    </div>
                    <!-- event-makeing-btn - end -->

                </div>
            </div>
        </section>
        <!-- special-offer-section - end
        ================================================== -->





        <!-- event-section - start
        ================================================== -->
        <section id="event-section" class="event-section sec-ptb-100 bg-gray-light clearfix ">
            <div class="container">

                <div class="mb-50">
                    <div class="row">

                        <!-- section-title - start -->
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <div class="section-title text-left">
                                <span class="line-style"></span>
                                <small class="sub-title">MGM events</small>
                                <h2 class="big-title"><strong>event</strong> listing</h2>
                            </div>
                        </div>
                        <!-- section-title - end -->

                        <!-- event-tab-menu - start -->
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="event-tab-menu clearfix">
                                <ul class="nav">

                                    <li>
                                        <a class="active" data-toggle="tab" href="#musical-event">
                                            <strong><i class="fas fa-music"></i> musical</strong> event
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- event-tab-menu - end -->

                    </div>
                </div>

                <!-- tab-content - start -->

                <!-- musical-event - start -->
                <div id="musical-event" class="tab-pane fade in active show">
                    <div class="row">

                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://res.cloudinary.com/dwzmsvp7f/image/fetch/q_75,f_auto,w_760,c_fill,h_380,g_face/q_75,f_auto,w_660,c_thumb,h_380,g_west/https%3A%2F%2Fmedia.insider.in%2Fimage%2Fupload%2Fc_crop%2Cg_custom%2Fv1577688541%2Fefnipccyfuhzqcfflx0x.png"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Arijit Singh Musical Concert
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $12</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                2021-22
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Austin Taxes ,USA
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->

                            </div>
                        </div>
                        <!-- event-item - end -->

                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://i.ytimg.com/vi/2iIU0k-4GCA/maxresdefault.jpg"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Javed Ali Musical Concert
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $22</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                2021-22
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Mumbai,India
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->

                            </div>
                        </div>
                        <!-- event-item - end -->

                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://www.iwmbuzz.com/wp-content/uploads/2020/01/neha-kakkars-all-concert-looks-2.jpg"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Neha kakkar Musical Concert
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                2019-20
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Mumbai,India
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->

                            </div>
                        </div>
                        <!-- event-item - end -->

                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://images.hindustantimes.com/img/2021/09/17/1600x900/09829768-1567-11ec-b5f0-8fc03d5e5335_1631861173079.jpg"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Jubin Nutoiyal
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $22</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                2019-20
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Mumbai,India
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->

                            </div>
                        </div>
                        <!-- event-item - end -->

                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="assets/images/event/1.event-grid.jpg" alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Diller Mehnadi Events
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                2022-23
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                India
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->

                            </div>
                        </div>
                        <!-- event-item - end -->

                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://static.toiimg.com/thumb/msid-66936500,width-1280,height-720,resizemode-4/66936500.jpg"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Ek sham Kishor ke Naam
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                Amit Jain/Ananat Maheshwari
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Cherry County
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->

                            </div>
                        </div>
                        <!-- event-item - end -->
                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://images.ottplay.com/images/arijit-singh-783.jpg?impolicy=ottplay-20210210&width=1200&height=675"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Sol Full Arijit Singh Musical Event
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                By Ananat Maheshwari 2023
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                India
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>
                                <!-- event-content - end -->
                                <!-- event-item - start -->



                            </div>
                        </div>


                        <!-- event-item - start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://i.ytimg.com/vi/OYLQpOLFbQY/maxresdefault.jpg"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Ek shaam Asha Bhoshle ke Naam
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                By Surbhi Kashyap 2024
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                India
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>


                            </div>
                        </div>


                        <!-- start -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="event-item2 clearfix">

                                <!-- event-image - start -->
                                <div class="event-image">
                                    <div class="post-date">
                                        <span class="date"></span>
                                        <small class="month"></small>
                                    </div>
                                    <img src="https://images7.alphacoders.com/133/thumb-350-1339451.webp"
                                        alt="Image_not_found">
                                </div>
                                <!-- event-image - end -->

                                <!-- event-content - start -->
                                <div class="event-content">
                                    <div class="event-title mb-15">
                                        <h3 class="title">
                                            Ek shaam Latta Ji ke Naam
                                        </h3>
                                        <span class="ticket-price yellow-color">Tickets from $52</span>
                                    </div>
                                    <div class="event-post-meta ul-li-block mb-30">
                                        <ul>
                                            <li>
                                                <span class="icon">
                                                    <i class="far fa-clock"></i>
                                                </span>
                                                By Surbhi Kashyap 2023
                                            </li>
                                            <li>
                                                <span class="icon">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                                Dream Valley
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#!" class="tickets-details-btn">
                                        tickets & details
                                    </a>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pagination ul-li clearfix">
                                <ul>
                                    <li class="page-item prev-item">
                                        <a class="page-link" href="#">Prev</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                                    <li class="page-item"><a class="page-link" href="#">05</a></li>
                                    <li class="page-item next-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- musical-event - end -->






                <!-- news-update-section - start
        ================================================== -->
                <section id="news-update-section" class="news-update-section sec-ptb-100 clearfix">
                    <div class="container">
                        <div class="row">

                            <!-- faq-accordion - start -->
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <!-- section-title - start -->
                                <div class="section-title mb-30">
                                    <span class="line-style"></span>
                                    <small class="sub-title">find your answer</small>
                                    <h2 class="big-title">ask & <strong>questions</strong></h2>
                                </div>
                                <!-- section-title - end -->
                                <div id="faq-accordion" class="faq-accordion">

                                    <div class="card">
                                        <div class="card-header" id="headingone">
                                            <button class="btn collapsed" data-toggle="collapse"
                                                data-target="#collapseone" aria-expanded="true"
                                                aria-controls="collapseone">
                                                <span>01.</span> How to join MGM Event Management?
                                            </button>
                                        </div>

                                        <div id="collapseone" class="collapse" aria-labelledby="headingone"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                <h3>answer</h3>
                                                Bring people together, or turn your passion into a business. MGM gives
                                                you
                                                everything
                                                you need to host your best event yet. lorem ipsum diamet.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingtwo">
                                            <button class="btn" data-toggle="collapse" data-target="#collapsetwo"
                                                aria-expanded="false" aria-controls="collapsetwo">
                                                <span>02.</span> How to make my own event?
                                            </button>
                                        </div>
                                        <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                <h3>answer</h3>
                                                Bring people together, or turn your passion into a business. MGM gives
                                                you
                                                everything
                                                you need to host your best event yet. lorem ipsum diamet.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingthree">
                                            <button class="btn collapsed" data-toggle="collapse"
                                                data-target="#collapsethree" aria-expanded="false"
                                                aria-controls="collapsethree">
                                                <span>03.</span> About the price to make new event?
                                            </button>
                                        </div>
                                        <div id="collapsethree" class="collapse" aria-labelledby="headingthree"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                <h3>answer</h3>
                                                Bring people together, or turn your passion into a business. MGM gives
                                                you
                                                everything
                                                you need to host your best event yet. lorem ipsum diamet.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" id="headingfour">
                                            <button class="btn collapsed" data-toggle="collapse"
                                                data-target="#collapsefour" aria-expanded="false"
                                                aria-controls="collapsefour">
                                                <span>04.</span> About the price to make new event?
                                            </button>
                                        </div>
                                        <div id="collapsefour" class="collapse" aria-labelledby="headingfour"
                                            data-parent="#faq-accordion">
                                            <div class="card-body">
                                                <h3>answer</h3>
                                                Bring people together, or turn your passion into a business. MGM gives
                                                you
                                                everything
                                                you need to host your best event yet. lorem ipsum diamet.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- faq-accordion - end -->

                            <!-- latest-blog-wrapper - start -->
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="latest-blog-wrapper">

                                    <!-- section-title - start -->
                                    <div class="section-title mb-30">
                                        <span class="line-style"></span>
                                        <small class="sub-title">our blog</small>
                                        <h2 class="big-title">latest <strong>news</strong></h2>
                                    </div>
                                    <!-- section-title - end -->

                                    <!-- latest-blog - start -->
                                    <div class="latest-blog clearfix">
                                        <div class="blog-image">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdfvptnh5u7kp1fyWHaX_VTj90AEfs6C8Xkg&usqp=CAU"
                                                alt="Image_not_found">
                                            <a href="#!" class="plus-effect"></a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title mb-30">
                                                <h3>Arijit Singh Musical Concert</h3>
                                                <span>2022-23</span>
                                            </div>
                                            <p class="m-0">
                                                MGM gives you everything you need to host your best event yet.
                                                Everythings Managed by MGM Staffs.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- latest-blog - end -->

                                    <!-- latest-blog - start -->
                                    <div class="latest-blog clearfix">
                                        <div class="blog-image">
                                            <img src="https://images.hindustantimes.com/rf/image_size_630x354/HT/p2/2018/12/16/Pictures/_f41b260c-0113-11e9-8cc1-c9b34ba72f01.jpeg"
                                                alt="Image_not_found">
                                            <a href="#!" class="plus-effect"></a>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-title mb-30">
                                                <h3>Tulsi Kumar</h3>
                                                <span>26 June 2022-23</span>
                                            </div>
                                            <p class="m-0">
                                                MGM gives you everything you need to host your best event yet.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- latest-blog - end -->

                                </div>
                            </div>
                            <!-- latest-blog-wrapper - end -->

                        </div>
                    </div>
                </section>
                <!-- news-update-section - end
        ================================================== -->





                <!-- default-sponsor-section - start
        ================================================== -->
                <div id="default-sponsor-section" class="default-sponsor-section bg-gray-light clearfix">
                    <div class="container">
                        <ul>

                            <li>
                                <a href="#!">
                                    <img src="assets/images/partners/image1.png" alt="Image_not_found">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/images/partners/image2.png" alt="Image_not_found">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/images/partners/image4.png" alt="Image_not_found">
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <img src="assets/images/partners/image6.png" alt="Image_not_found">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>


                <script>
                const initSlider = () => {
                    const imageList = document.querySelector(".slider-wrapper .image-list");
                    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
                    const sliderScrollbar = document.querySelector(".container .slider-scrollbar");
                    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
                    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

                    // Handle scrollbar thumb drag
                    scrollbarThumb.addEventListener("mousedown", (e) => {
                        const startX = e.clientX;
                        const thumbPosition = scrollbarThumb.offsetLeft;
                        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width -
                            scrollbarThumb
                            .offsetWidth;

                        // Update thumb position on mouse move
                        const handleMouseMove = (e) => {
                            const deltaX = e.clientX - startX;
                            const newThumbPosition = thumbPosition + deltaX;

                            // Ensure the scrollbar thumb stays within bounds
                            const boundedPosition = Math.max(0, Math.min(maxThumbPosition,
                                newThumbPosition));
                            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                            scrollbarThumb.style.left = `${boundedPosition}px`;
                            imageList.scrollLeft = scrollPosition;
                        }

                        // Remove event listeners on mouse up
                        const handleMouseUp = () => {
                            document.removeEventListener("mousemove", handleMouseMove);
                            document.removeEventListener("mouseup", handleMouseUp);
                        }

                        // Add event listeners for drag interaction
                        document.addEventListener("mousemove", handleMouseMove);
                        document.addEventListener("mouseup", handleMouseUp);
                    });

                    // Slide images according to the slide button clicks
                    slideButtons.forEach(button => {
                        button.addEventListener("click", () => {
                            const direction = button.id === "prev-slide" ? -1 : 1;
                            const scrollAmount = imageList.clientWidth * direction;
                            imageList.scrollBy({
                                left: scrollAmount,
                                behavior: "smooth"
                            });
                        });
                    });

                    // Show or hide slide buttons based on scroll position
                    const handleSlideButtons = () => {
                        slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
                        slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
                    }

                    // Update scrollbar thumb position based on image scroll
                    const updateScrollThumbPosition = () => {
                        const scrollPosition = imageList.scrollLeft;
                        const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth -
                            scrollbarThumb
                            .offsetWidth);
                        scrollbarThumb.style.left = `$ {
            thumbPosition
        }
        px`;
                    }

                    // Call these two functions when image list scrolls
                    imageList.addEventListener("scroll", () => {
                        updateScrollThumbPosition();
                        handleSlideButtons();
                    });
                }

                window.addEventListener("resize", initSlider);
                window.addEventListener("load", initSlider);
                </script>

                <script>
                // scripts.js
                let currentIndex = 0;
                let isSoundOn = true;

                const slides = document.querySelectorAll('.slide');
                const modal = document.getElementById('modal');

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.style.transform = `translateX(${(i - index) * 100}%)`;
                    });
                }

                function nextSlide() {
                    currentIndex = (currentIndex + 1) % slides.length;
                    showSlide(currentIndex);
                }

                function prevSlide() {
                    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                    showSlide(currentIndex);
                }

                function toggleSound() {
                    const video = slides[currentIndex].querySelector('video');
                    if (video) {
                        isSoundOn = !isSoundOn;
                        video.muted = !isSoundOn;
                    }
                }

                function openModal() {
                    const content = slides[currentIndex].cloneNode(true);
                    modal.querySelector('.modal-content').innerHTML = '';
                    modal.querySelector('.modal-content').appendChild(content);
                    modal.style.display = 'block';
                }

                function closeModal() {
                    modal.style.display = 'none';
                }

                // Auto slide every 5 seconds
                setInterval(nextSlide, 5000);

                // Attach event listeners
                document.querySelector('.next-btn').addEventListener('click', nextSlide);
                document.querySelector('.prev-btn').addEventListener('click', prevSlide);
                document.querySelector('.toggle-sound-btn').addEventListener('click', toggleSound);
                document.querySelector('.slider').addEventListener('click', openModal);
                </script>

                <!-- default-sponsor-section - end
        ================================================== -->


                <?php include 'include/footer.php'; ?>