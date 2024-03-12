<?php include 'include/header.php';?>
<link rel="stylesheet" href="classical.css">
<style>
.service-type-list ul {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.service-type-list ul li {
    padding: 10px;
}

/* Styles for screens less than or equal to 320px wide */
@media only screen and (max-width: 320px) {
    .service-type-list ul {
        display: flex;
        flex-direction: column;
    }

    .service-content .service-title .title-text {
        font-size: 14px;
    }


}

/* Styles for screens between 321px and 768px wide */
@media only screen and (min-width: 321px) and (max-width: 768px) {

    /* grid-template-columns: repeat(2, 1fr); */
    .service-type-list ul {
        display: flex;
        flex-direction: column;

    }

    .service-content .service-title .title-text {
        font-size: 16px !important;

    }

    .service-type-list ul li {
        align-self: flex-start;
    }
}

/* Styles for screens greater than or equal to 769px wide */
@media only screen and (min-width: 769px) {
    /* grid-template-columns: repeat(2, 1fr); */
}
</style>

<!-- breadcrumb-section - start
		================================================== -->
<section id="breadcrumb-section" class="breadcrumb-section clearfix">
    <div class="jarallax" style="background-image: url(assets/images/breadcrumb/0.breadcrumb-bg.jpg);">
        <div class="overlay-black">
            <div class="container" style="
    padding-top: 90px;">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <!-- breadcrumb-title - start -->
                        <div class="breadcrumb-title text-center mb-50">
                            <span class="sub-title">what we can do</span>
                            <h2 class="big-title">MGM <strong>services</strong></h2>
                        </div>
                        <!-- breadcrumb-title - end -->

                        <!-- breadcrumb-list - start -->
                        <div class="breadcrumb-list">
                            <ul>
                                <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item"><a href="about.php" class="breadcrumb-link">About</a></li>
                                <li class="breadcrumb-item active" aria-current="page">services</li>
                            </ul>
                        </div>
                        <!-- breadcrumb-list - end -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-section - end
		================================================== -->


<!-- 
   service-wrapper - start
   <div class="service-wrapper">

 
<div class="service-item clearfix">
    <div class="service-image float-left">
        <div class="big-image">
            <img src="assets/images/service/1.image.png" alt="Image_not_found">
        </div>
        <div class="small-image">
            <img src="assets/images/service/1.1.image.png" alt="Image_not_found">
        </div>
    </div>
    <div class="service-content float-right">
        <div class="service-title mb-30">
            <h2 class="title-text">Complete  <strong>Wedding</strong> Planning</h2>
            <span class="service-price">price start from $52.00</span>
        </div>
        <p class="service-description black-color mb-30">
            Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
            the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
            adipiscing elit.
        </p>
        <div class="service-type-list mb-50 clearfix">
            <ul>

                <li>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                    <a href="hldi-function.php">Haldi Function</a>
                </li>
                <li>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                    <a href="Engagements.php">Engagement Celebration</a>
                </li>
                <li>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                    <a href="Aniversary.php">Anniversary Celebration</a>
                </li>

                <li>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                 <a href=""></a>
                </li>
                <li>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                    online store
                </li>
                <li>
                    <span class="icon">
                        <i class="fas fa-arrow-circle-right"></i>
                    </span>
                    office meeting
                </li>

            </ul>
        </div>
        <div class="text-left">
            <a href="#!" class="custom-btn">make an event</a>
            <a href="#!" class="conference-btn">conference event</a>
        </div>
    </div>
</div> -->

<!-- service-section - start
		================================================== -->
<section id="service-section" class="service-section sec-ptb-100 clearfix">
    <div class="container">

        <!-- service-wrapper - start -->
        <div class="service-wrapper">


            <div class="service-content float-center">
                <div class="service-title mb-30">
                    <h2 class="title-text"> <strong> Our Service</strong></h2>
                </div>
                <p class="service-description black-color mb-30">
                    Click Each Events See details Service
                </p>
                <div class="service-type-list mb-50 clearfix">
                    <ul>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="hldi-function.php">Haldi Function</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="Engagements.php">Engagement Celebration</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="Aniversary.php">Anniversary Celebration</a>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="ceremony.php">Ceremony Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="wedding.php">Marriage Celebration</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="sufi_music.php">Sufi Night</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="folk_music.php">Folk Music</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="quwwali.php">Qawwali Program</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="shehnai.php">Shehnai Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="bhangra.php">Bhangra Dance Party</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="sai_sandhya.php">Sai Sandhya Program</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="bhajan_sandhya.php">Bhajan Sandhya</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="classical_music.php">Classical Music Event</a>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="reception.php">Reception Party</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="destination_wedding.php">Destination Wedding Planing</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="sangeet.php"> Wedding Sangeet</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="pre_wedding.php">Pre Wedding Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="celebratity.php">Events With Celebrity </a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="classical.php">Magical Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="unleash.php">Laughter Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="choreographer.php">Choreographer Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="jagran.php">Bhagwati Jagran</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="skyevent.php">Celebrity Live Concert</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="showtimes.php">Celebrity Chief Guest</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="showtime_cheorigrapher.php">Sangeet Choreographer</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="MusicalShow.php">Musical Show Organizer</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="dance_group.php">Dance Event</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="photography_vedio.php">Photography And Vediography</a>
                        </li>

                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="birthday-celebration.php">Birthday Celebration</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="mgmband.php">MGM the Band</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="dj_artist.php">Dj Artist</a>
                        </li>
                        <li>
                            <span class="icon">
                                <i class="fas fa-arrow-circle-right"></i>
                            </span>
                            <a href="mgmorchestra.php">MGM Symphony Orchestra</a>
                        </li>



                    </ul>
                </div>

            </div>


            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-left">
                    <div class="big-image">
                        <img style="width:500px !important;height:300px !important;object-fit:cover !important;"
                            src="https://images.unsplash.com/photo-1616165415772-f5b95c3ae135?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8d2VkZGluZyUyMGNvdXBsZXxlbnwwfHwwfHx8MA%3D%3D"
                            alt="Image_not_found">
                    </div>
                    <div class="https://i.pinimg.com/236x/e3/8d/55/e38d55d8cd00ad87853707def5acf164.jpg">
                        <img style="width:200px !important;height:200px !important;object-fit:cover !important;"
                            src="https://i.pinimg.com/236x/e3/8d/55/e38d55d8cd00ad87853707def5acf164.jpg"
                            alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-right">
                    <div class="service-title mb-30">
                        <h2 class="title-text">Complete <strong>Wedding</strong> Planning</h2>
                        <span class="service-price">price start from $52.00</span>
                    </div>
                    <p class="service-description black-color mb-30">
                        Marriage service include a series of rituals and ceremonies that celebratethe union of two
                        individuals. please click On given below link description for Each Events
                    </p>
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="hldi-function.php">Haldi Function</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="Engagements.php">Engagement Celebration</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="Aniversary.php">Anniversary Celebration</a>
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="ceremony.php">Ceremony Event</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="wedding.php">Marriage Celebration</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="pre_wedding.php"> Pre Wedding Planning</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="reception.php">Reception Party</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="destination_wedding.php">Destination Wedding </a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="sangeet.php"> Wedding Sangeet</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="showtime_cheorigrapher.php">Sangeet Choreographer</a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-left">
                        <a href="#!" class="custom-btn">make an event</a>
                        <a href="#!" class="conference-btn">conference event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-right">
                    <div class="big-image">
                        <img style="width:500px !important;height:300px !important;object-fit:cover !important;"
                            src="https://img.jakpost.net/c/2019/06/12/2019_06_12_74202_1560308728._large.jpg"
                            alt="Image_not_found">
                    </div>
                    <div class="small-image">
                        <img style="width:300px !important;height:300px !important;object-fit:cover !important;"
                            src="https://matakajagranparty.com/wp-content/themes/hantus/assets/images/banner5.jpg"
                            alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-left">
                    <div class="service-title mb-30">
                        <h2 class="title-text"><strong>Birthday Party,Musical,Magic,Concert,Jagran With
                                Celebrity</strong>
                        </h2>
                        <span class="service-price">price start from $52.00</span>
                    </div>
                    <p class="service-description black-color mb-30">
                        Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
                        the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
                        adipiscing elit.
                    </p>
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="celebratity.php">Event With Celebrity </a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="classical.php">Magical Event</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="unleash.php">Laughter Event</a>
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="jagran.php">Bhagwati Jagran</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="skyevent.php">Celebrity Live Concert</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="showtime.php">Celebrity Chief Guest</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="MusicalShow.php">Musical Show</a>
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="birthday-celebration.php">Birthday Celebration</a>
                            </li>

                        </ul>
                    </div>
                    <div class="text-left">
                        <a href="#!" class="custom-btn">make an event</a>
                        <a href="#!" class="conference-btn">musical event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-left">
                    <div class="big-image">
                        <img style="width:500px !important;height:300px !important;object-fit:cover !important;"
                            src="https://varioproductions.com/wp-content/uploads/2020/11/Event-Lighting-.jpg"
                            alt="Image_not_found">
                    </div>
                    <div class="small-image">
                        <img style="width:200px !important;height:200px !important;object-fit:cover !important;"
                            src="https://images.squarespace-cdn.com/content/v1/553e6c5fe4b07cdafb3caf48/1541690418402-9L3CODCXJ41S71MGRUZQ/Eggsotic%2BEvents%2BNJ%2BEvent%2BDesign%2BLighting%2BDecor%2BRental%2B%2B-%2B14.jpg"
                            alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-right">
                    <div class="service-title mb-30">
                        <h2 class="title-text"><strong>MGM Service Bands Orchestra</strong></h2>
                        <span class="service-price">price start from $52.00</span>
                    </div>
                    <p class="service-description black-color mb-30">
                        Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
                        the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
                        adipiscing elit.
                    </p>
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="mgmband.php">MGM the Band</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="dj_artist.php">Dj Artist</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="mgmorchestra.php">MGM Symphony Orchestra</a>
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                <a href="dance_group.php">Dance Event Organize</a>
                            </li>


                        </ul>
                    </div>
                    <div class="text-left">
                        <a href="#!" class="custom-btn">make an event</a>
                        <a href="#!" class="conference-btn">playground event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

            <!-- service-item - start -->
            <div class="service-item clearfix">
                <div class="service-image float-right">
                    <div class="big-image">
                        <img src="assets/images/service/4.image.png" alt="Image_not_found">
                    </div>
                    <div class="small-image">
                        <img src="assets/images/service/4.4.image.png" alt="Image_not_found">
                    </div>
                </div>
                <div class="service-content float-left">
                    <div class="service-title mb-30">
                        <h2 class="title-text">Party <strong>Wedding & Birtday</strong></h2>
                        <span class="service-price">price start from $52.00</span>
                    </div>
                    <p class="service-description black-color mb-30">
                        Lorem ipsum dollor site amet the best consectuer diam adipiscing elites sed diam nonummy nibh
                        the euismod tincidunt ut laoreet dolore magna aliquam erat volutpat insignia the consectuer
                        adipiscing elit.
                    </p>
                    <div class="service-type-list mb-50 clearfix">
                        <ul>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                traditional musical
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                personal consert
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                modern musical
                            </li>

                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                traditional musical
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                personal consert
                            </li>
                            <li>
                                <span class="icon">
                                    <i class="fas fa-arrow-circle-right"></i>
                                </span>
                                modern musical
                            </li>

                        </ul>
                    </div>
                    <div class="text-left">
                        <a href="#!" class="custom-btn">make an event</a>
                        <a href="#!" class="conference-btn">party event</a>
                    </div>
                </div>
            </div>
            <!-- service-item - end -->

        </div>
        <!-- service-wrapper - end -->

    </div>
</section>
<!-- service-section - end
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
                    <h2><strong>30%</strong> Off in June~July for <span>Birthday Event</span></h2>
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





<!-- google map - start
		================================================== -->
<section id="map-section" class="map-section clearfix">
    <div class="address-wrapper">

        <!-- address-info-topbar - start -->
        <div class="address-info-topbar mb-30 clearfix">
            <div class="address-info-left">
                <h3 class="title-text">MGM event management</h3>
                <p class="m-0">
                    Apple Store, 112 Prince St New York,
                    NY 10012, United States 80361,
                    United States
                </p>
            </div>

            <div class="address-info-right">
                <ul>
                    <li>
                        <button type="button">
                            <span class="icon"><i class="fas fa-street-view"></i></span>
                            <small>Direction</small>
                        </button>
                    </li>
                    <li>
                        <button type="button">
                            <span class="icon"><i class="fas fa-rss"></i></span>
                            <small>Save</small>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <!-- address-info-topbar - end -->

        <!-- address-info-bottombar - start -->
        <div class="address-info-bottombar clearfix">
            <div class="address-info-left">
                <div class="rating-star">
                    <span class="rating-point">4.5</span>
                    <ul>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star-half"></i></li>
                    </ul>
                </div>
                <p class="m-0">105 reviews</p>
            </div>

            <div class="address-info-right">
                <button type="button" class="map-larger-btn">
                    view larger map
                </button>
            </div>
        </div>
        <!-- address-info-bottombar - end -->

    </div>
    <div id="google-map">
        <div id="googleMaps" class="google-map-container"></div>
    </div>
</section>
<!-- google map - end
		================================================== -->





<!-- default-footer-section - start
		================================================== -->
<?php include 'include/footer.php';?>