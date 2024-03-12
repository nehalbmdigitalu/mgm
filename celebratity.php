<?php include 'include/header.php';?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Celebratity demo</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href=""> -->
    <style>

    </style>
    <link rel="stylesheet" href="celebrarity.css">
</head>

<style></style>

<body>
    <div class="pages" style="margin-top: 300px;"></div>
    <h3 class="header">Book Celebrarity for Appearances | Performances | Brand Endorsements | Social Media</h3>
    <div class="head">
        <div class="line"></div>
        <h3>Bollywood Celebrities</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\kartik.webp" alt="img-1" />
                        Kartik
                        Aryan</p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\katrina.webp"
                            alt="img-2" />Katrina
                        Kaif</p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\kiara.webp"
                            alt="img-3" />Kiara Adwani
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\ranveer.webp"
                            alt="img-4" />Ranveer
                        Singh</p>
                    <p class="name"><img class="image-items" src="assets\images\celebratity\priyanka.webp"
                            alt="img-5" />Priyanka
                        Chopra</p>
                    <p class="name"><img class="image-items" src="assets\images\celebratity\rohit.webp"
                            alt="img-6" />Rohit Setty
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\sonam.webp"
                            alt="img-7" />Sonam Kapoor
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\sonu.webp"
                            alt="img-8" />Sonu Sood</p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\tiger.webp"
                            alt="img-9" />Tiger Shroff
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\celebratity\vicky.webp"
                            alt="img-10" />Vicky
                        Koshal</p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check more profiles of Bollywood celebrities</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg">More
            Profile</button>
    </div>


    <!-- 2nd About Singers -->

    <div class="head">
        <div class="line"></div>
        <h3>celebrarity singers</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items" src="assets\images\Singer\armaan.webp"
                            alt="img-1" />Armaan
                        Malik</p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\arijit.jpg" alt="img-2" />Arijit
                        Singh</p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\badshah.webp"
                            alt="img-3" />Badshah</p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\honey.jpg" alt="img-4" />Yo Yo
                        Honey Singh
                    </p>
                    <p class="name"><img class="image-items" src="assets\images\Singer\jubin.jpg" alt="img-5" />Jubin
                        Nautiyal</p>
                    <p class="name"><img class="image-items" src="assets\images\Singer\mika.jpg" alt="img-6" />Mika
                        Singh
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\neha.jpg" alt="img-7" />Neha
                        Kakkar</p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\shreya.avif"
                            alt="img-8" />Shreya
                        Ghoshal
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\sunidhi.jpg"
                            alt="img-9" />Sunidhi Chauhan
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\Singer\kailas.jpg"
                            alt="img-10" />Kailash Kher</p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check more profiles of Singer celebrities</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">More
            Profile</button>
    </div>

    <!-- All Sports celebrarity -->


    <div class="head">
        <div class="line"></div>
        <h3>Sports Celebrities</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items" src="assets\images\sports\dhoni.webp" alt="img-1" />M S
                        Dhoni</p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\sachin.jpg" alt="img-2" />Sachin
                        Tendulkar
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\kohli.webp" alt="img-3" />Virat
                        Kohli</p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\mary kom.jpg" alt="img-4" />Mary
                        Kom</p>
                    <p class="name"><img class="image-items" src="assets\images\sports\mithali.webp"
                            alt="img-5" />Mithali Raj</p>
                    <p class="name"><img class="image-items" src="assets\images\sports\neeraj.jpg" alt="img-6" />Neeraj
                        Chopra</p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\pvsindhu.jpg" alt="img-7" />P V
                        Sindhu</p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\rohit.jpg" alt="img-8" />Rohit
                        Sharma</p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\kapil.webp" alt="img-9" />Kapil
                        Dev</p>
                    <p class="name"> <img class="image-items" src="assets\images\sports\vijendra.jpg"
                            alt="img-10" />Vijendra singh
                    </p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check more profiles of Sports celebrities</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">More
            Profile</button>
    </div>


    <!-- performing Artist -->

    <div class="more">
        <h3 class="header">Check - Comedian | Rock Band | Singers | Rapper | DJ's | EDM's | Etc.</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">Performing
            Atrists</button>
    </div>



    <!-- South India Celebrarity -->


    <div class="head">
        <div class="line"></div>
        <h3>South Indian Celebrities</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items" src="assets\images\south\allu.webp" alt="img-1" />Allu
                        Arjun</p>
                    <p class="name"> <img class="image-items" src="assets\images\south\dhanush.jpg" alt="img-2" />Danush
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\south\kajal.jpg" alt="img-3" />Kajal
                        Aggrawak</p>
                    <p class="name"> <img class="image-items" src="assets\images\south\ramcharan.jpg" alt="img-4" />Ram
                        Charan</p>
                    <p class="name"><img class="image-items" src="assets\images\south\rana.jpg" alt="img-5" />Rana Singh
                        Daggubati
                    </p>
                    <p class="name"><img class="image-items" src="assets\images\south\samanthaa.webp"
                            alt="img-6" />Samanatha Ruth
                        Prabhu</p>
                    <p class="name"> <img class="image-items" src="assets\images\south\shriya.jpg" alt="img-7" />Shriya
                        Sharan</p>
                    <p class="name"> <img class="image-items" src="assets\images\south\tamanna.jpg"
                            alt="img-8" />Tamanna
                        Bhatia
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\south\Vijay-Sethupati.webp"
                            alt="img-9" />Vijay
                        Sethupati</p>
                    <p class="name"> <img class="image-items" src="assets\images\south\vijay.webp" alt="img-10" />Vijay
                        Sethupati
                    </p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check More profiles of South Indian Celebrities</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">More
            Profile</button>
    </div>



    <!--  OTT Celebrarity -->

    <div class="head">
        <div class="line"></div>
        <h3>Indian OTT Celebrities</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items" src="assets\images\Ott\pankaj.jpg" alt="img-1" />Pankaj
                        Tripathi</p>
                    <p class="name"> <img class="image-items" src="assets\images\Ott\ali_fazal.webp" alt="img-2" />Ali
                        Faizal</p>
                    <p class="name"> <img class="image-items" src="assets\images\Ott\kay_kay_menon.webp"
                            alt="img-3" />Kay Kay
                        Menon</p>
                    <p class="name"> <img class="image-items" src="assets\images\Ott\sanya.jpg" alt="img-4" />Sanya
                        Malhotra</p>
                    <p class="name"><img class="image-items" src="assets\images\Ott\kritika_kamra.jpg"
                            alt="img-5" />Kritika Kamra
                    </p>
                    <p class="name"><img class="image-items" src="assets\images\Ott\kirti_kulharti.jpg"
                            alt="img-6" />Kirti Kulhari
                    </p>
                    <p class="name"> <img class="image-items" src="assets\images\Ott\siddhant_chaturvedi.jpg"
                            alt="img-7" />Siddhant Chaturvedi</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/sayani%20gupta.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-8" />Sayani Gupta</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Mona%20Singh.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-9" />Mona Singh</p>
                    <p class="name"> <img class="image-items" src="assets\images\Ott\jitendra.webp"
                            alt="img-10" />Jitendra Kumar</p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check more profiles of Indian OTT celebrities</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">More
            Profile</button>
    </div>


    <!--  Tv Celebrarity -->

    <div class="head">
        <div class="line"></div>
        <h3>TV Celebrities</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Shivangi%20Joshi.jpg/:/rs=w:600,cg:true,m"
                            alt="img-1" />Shivangi Joshi</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Sharad%20Kelkar.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-2" />Sarad Kelkar</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Rajeev-Khandelwal.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-3" />Rajeev Khandelwal</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Karishma%20Tanna.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-4" />Karishma Tanna </p>
                    <p class="name"><img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Jennifer-Winget.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-5" />Jennifer Winget
                    </p>
                    <p class="name"><img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Avneet%20Kaur.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-6" />Avneet Kaur
                    </p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Ronit-Roy.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-7" />Ronit Roy</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Amar%20Upadhyay.jpeg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-8" />Amar Upadhyay</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Manish%20Paul.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-9" />Manish Paul</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/shweta%20Tiwari.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-10" />Shweta Tiwar</p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check more profiles of tv celebrities</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">More
            Profile</button>
    </div>



    <!-- Celebrarity Motivational Speaker  -->


    <div class="head">
        <div class="line"></div>
        <h3>Celebrity motivational speakers</h3>
        <div class="line"></div>
    </div>
    <div class="body">
        <div class="container">
            <div class="slider-wrapper">
                <button id="prev-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle-fill " id="arrow" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg>
                </button>
                <ul class="image-lists">
                    <p class="name"> <img class="image-items" style="width: 400px !important;height:200px; "
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Nawazuddin%20Siddiqui.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-1" />Nawazuddin Siddiqui</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Gaur%20Gopal%20Das.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-2" />Gaur Gopal Das</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/ankur-warikoo.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-3" />Ankur Warikoo</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/sudha-murthy.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-4" />Sudha Murti</p>
                    <p class="name"><img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/kumar-vishwas-c2d588b.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-5" />Dr. Kumar Viswas
                    </p>
                    <p class="name"><img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Kapil%20Dev.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-6" />Kapil Dev
                    </p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Chetan%20Bhagat.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-7" />Chetan Bhagat</p>
                    <p class="name"> <img class="image-items"
                            src="https://img1.wsimg.com/isteam/ip/c76862d1-4b72-4973-80c5-7d12414010ec/Anupam%20Kher.jpg/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:600,cg:true"
                            alt="img-8" />Anupam Kher</p>
                    <p class="name"> <img class="image-items"
                            src="https://static.tnnbt.in/photo/105226963/105226963.jpg" alt="img-9" />Sandeep Maheshwari
                    </p>
                    <p class="name"> <img class="image-items"
                            src="https://yt3.googleusercontent.com/ytc/AIdro_l1kJ1qi9uX-R8fcRls4QhRQme7shcz3N7ir6kwiA=s900-c-k-c0x00ffffff-no-rj"
                            alt="img-10" />Sonu Sharma </p>
                </ul>
                <button id="next-slide" class="slide-button material-symbols-rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
                    </svg>
                </button>
            </div>
            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="more">
        <h3 class="header">Check more profiles of Motivational Speakers
        </h3><button style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">More
            Profile</button>
    </div>

    <!-- End  -->


    <div class="more" style="margin-bottom: 60px;">
        <h3 class="header">Check - Comedian | Rock Band | Singers | Rapper | DJ's | EDM's | Etc.</h3><button
            style="background-color: black;color: white;" type="button" class="btn btn-primary btn-lg ">Performing
            Atrists</button>
    </div>



    <div class="more">

        <p class="header"
            style="color: white; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; opacity: 0.8; letter-spacing: 0.4px; margin-bottom: 100px;">
            We are India’s leading celebrity talent management company offering a wide range of celebrities for brand
            endorsement, launch events, performance, etc. We recommend and provide your favorite stars around your
            budget, without missing the suitability of requirement for events, films, web series, tv shows, Ads, etc.
            Sky Events India is a celebrity management agency for paid events only. We do not handle requests for
            donation of time or media requests for interviews, and cannot provide celebrity contact information. We are
            offering Bollywood Top Celebrities, South Indian Celebrity, TV celebrity Artists, OTT Stars, Sports
            Celebrities
            and providing them for Brand Endorsements, Presence in events or performance and also for social media
            engagements. Contact us for all budget TEDx Motivational Speakers, Comedians, Realty Show Artists, Live
            Bands, Rapper's , Bollywood singers, Punjabi Singers, Musicians, EDMs, DJs , etc. A listing or profile on
            this
            website does not claim an exclusive agency affiliation or endorsement by any celebrity. if you are looking
            to
            book a popular celebrity for endorsement, Advertising Films, Print shoots, and Media Interactions, Our
            highly reliable celebrity management team will help. We are best entertainment artist management company
            in India.
        </p>


    </div>


    <!-- script tag -->

</body>
<script>
const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper.image-lists");
    const slideButtons = document.querySelectorAll(".slider-wrapper.slide-button");
    const sliderScrollbar = document.querySelector(".container.slider-scrollbar");
    const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

    // Handle scrollbar thumb drag
    scrollbarThumb.addEventListener("mousedown", (e) => {
        const startX = e.clientX;
        const thumbPosition = scrollbarThumb.offsetLeft;
        const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb
            .offsetWidth;

        // Update thumb position on mouse move
        const handleMouseMove = (e) => {
            const deltaX = e.clientX - startX;
            const newThumbPosition = thumbPosition + deltaX;

            // Ensure the scrollbar thumb stays within bounds
            const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
            const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

            scrollbarThumb.style.left = ` ${boundedPosition}px`;
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
            scrollbarThumb.offsetWidth);
        scrollbarThumb.style.left = `${thumbPosition}px`;
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
<?php include 'include/footer.php';?>

</html>