<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- swiperJS library -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>    
    <!-- einde swiperJS -->
    <link rel="icon" type="image/png" href="/img/logo.png">
    <script src="/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Daily Routine</title>
</head>
<body>
    <header id="js--mainHeader" class="mainHeader u-main-gradient u-box-shadow">
        <nav id="js--nav" class="nav">
            <input type="checkbox" id="check" class="checkbtn">
            <label for="check" class="nav__hamburger"><i class="fas fa-bars fa-2x"></i></label>
            <figure>
                <img class="nav__logo" src="/img/logo.png" alt="Logo">
            </figure>
            <ul class="nav__list">
                <li class="nav__list__li--close">
                    <input type="checkbox" id="check" class="checkbtn">
                    <label for="check" class="nav__close"><i class="fas fa-times fa-2x"></i></label>
                </li>
                <li class="nav__list__li" ><a class=" nav__list__li--a active" href="/boodschappenlijst">Boodschappen</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/desk">Bureau</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/recepten">Koken</a></li>
                <li class="nav__list__li" ><a class="nav__list__li--a" href="/opstaan">Opstaan</a></li>
                <li class="nav__list__li" ><p class="nav__mijnaccount--message" id="u-white">Hallo {{$ActiveUser->name}}</p></li>
                <li class="nav__list__li" ><a href="/gebruiker" class="nav__mijnaccount nav__mijnaccount__link" id="u-white" href="/gebruiker">Andere gebruiker</a></li>
            </ul> 
        </nav>
    </header>   
    @yield('content')
    <section id="js--feedbackPopup" class="feedbackPopup">
        <h1 id="js--feedbackPopupText" class="feedbackPopup__text"> Placeholder </h1>
    </section>
</body>
</html>