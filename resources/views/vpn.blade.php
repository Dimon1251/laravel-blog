<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaslesVPN</title>
    <link rel="stylesheet" href="css/moonbase.css">
<!--    <link rel="stylesheet" href="resources/css/app.css">-->
    <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">


    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">


    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
<!-- Header start -->

<header class="header">
    <div class="wrapper">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <img src="./img/svg/logo.svg" alt="LaslesVPN" class="header__logo-pic">
                </a>
            </div>
            <ul class="header__list">
                <li class="header__item">
                    <a href="#!"  class="header__link">About</a>
                </li>
                <li class="header__item">
                    <a href="#!"  class="header__link">Features</a>
                </li>
                <li class="header__item">
                    <a href="#!"  class="header__link">Pricing</a>
                </li>
                <li class="header__item">
                    <a href="#!"  class="header__link">Testimonials</a>
                </li>
                <li class="header__item">
                    <a href="#!"  class="header__link">Help</a>
                </li>
            </ul>
            <ul class="header__list">
                <li class="header__sign">
                    <button class="header__signin">Sign in</button>
                </li>
                <li class="header__sign">
                    <button class="header__signup">Sign up</button>
                </li>
            </ul>
        </div>


        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label id ="submit" class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <ul class="menu__box">
                <li><a class="menu__item" href="#">About</a></li>
                <li><a class="menu__item" href="#">Features</a></li>
                <li><a class="menu__item" href="#">Pricing</a></li>
                <li><a class="menu__item" href="#">Testimonials</a></li>
                <li><a class="menu__item" href="#">Help</a></li>
                <button class="header__signin">Sign in</button>
                <button class="header__signup">Sign up</button>
            </ul>
        </div>



    </div>
</header>
<!-- Header end -->
<main class="main">
    <!-- Intro start -->
    <div class="wrapper">
        <section class="intro">

            <div class="intro__left">
                <div class="intro__title">
                    Want anything to be easy with LaslesVPN.
                </div>
                <div class="intro__subtitle">
                    Provide a network for all your needs with ease and fun using LaslesVPN discover interesting features from us.
                </div>
                <button class="intro__button">Get Started</button>
            </div>
            <div class="intro__right">
                <img class="intro__image" src="./img/Illustration1.svg">
            </div>

        </section>
    </div>
    <!-- Intro end -->

    <!-- Benefits start -->
    <div class="wrapper">
        <section class="benefits">
            <div class="benefits__cards">
                <div class="benefits__card">
                    <img src="./img/svg/user.svg" class="benefits__card-pic">
                    <div class="benefits__top">
                        <div class="benefits__card-title">
                            90+
                        </div>
                        <p class="benefits__card-desc">
                            Users
                        </p>
                    </div>
                    <img src="./img/svg/line.svg" class="benefits__card-line">
                </div>
                <div class="benefits__card">
                    <img src="./img/svg/location.svg" class="benefits__card-pic">
                    <div class="benefits__top">
                        <div class="benefits__card-title">
                            30+
                        </div>
                        <p class="benefits__card-desc">
                            Locations
                        </p>
                    </div>
                    <img src="./img/svg/line.svg" class="benefits__card-line">
                </div>
                <div class="benefits__card">
                    <img src="./img/svg/server.svg" class="benefits__card-pic">
                    <div class="benefits__top">
                        <div class="benefits__card-title">
                            50+
                        </div>
                        <p class="benefits__card-desc">
                            Servers
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Benefits end -->
    <!-- Feature start -->
    <div class="wrapper">
        <section class="feature">
            <div class="feature__left">
                <img class="feature__image" src="./img/Illustration.svg">
            </div>
            <div class="feature__right">
                <div class="feature__title">
                    We Provide Many Features wou Can Use
                </div>
                <div class="feature__subtitle">
                    You can explore the features that we provide with fun and have their own functions each feature.
                </div>
                <ul class="feature__list">
                    <li class="feature__item">Powerfull online protection.</li>
                    <li class="feature__item">Internet without borders.</li>
                    <li class="feature__item">Supercharged VPN</li>
                    <li class="feature__item">No specific time limits.</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- Feature end -->
    <!-- Plan -->
    <div class="wrapper">
        <section class="plan">
            <div class="plan__title">
                Choose Your Plan
            </div>
            <div class="plan__subtitle">
                Let's choose the package that is best for you and explore it happily and cheerfully.
            </div>
        </section>
    </div>
    <!-- Plan end-->
    <!-- ChoosePlan -->
    <div class="wrapper">
        <section class="plans">
            <div class="plans__cards">
                <div class="plans__card">
                    <div class="plans__card-pic">
                        <img src="./img/box.svg" alt="user" class="plans__card-thumb">
                    </div>
                    <div class="plans__card-title">
                        Free Plan
                    </div>
                    <ul class="plans__card-list">
                        <li class="plans__card-desc">Unlimited Bandwitch</li>
                        <li class="plans__card-desc">Encrypted Connection</li>
                        <li class="plans__card-desc">No Traffic Logs</li>
                        <li class="plans__card-desc">Works on All Devices</li>
                    </ul>
                    <p class="plans__card-price">
                        Free
                    </p>
                    <button class="plans__card-button">Select</button>
                </div>
                <div class="plans__card">
                    <div class="plans__card-pic">
                        <img src="./img/box.svg" alt="location" class="plans__card-thumb">
                    </div>
                    <div class="plans__card-title">
                        Standard Plan
                    </div>

                    <ul class="plans__card-list">
                        <li class="plans__card-desc">Unlimited Bandwitch</li>
                        <li class="plans__card-desc">Encrypted Connection</li>
                        <li class="plans__card-desc">Yes Traffic Logs</li>
                        <li class="plans__card-desc">Works on All Devices</li>
                        <li class="plans__card-desc">Connect Anyware</li>
                    </ul>
                    <p class="plans__card-price">
                        $9 / mo
                    </p>
                    <button class="plans__card-button">Select</button>
                </div>
                <div class="plans__card">
                    <div class="plans__card-pic">
                        <img src="./img/box.svg" alt="server" class="plans__card-thumb">
                    </div>
                    <div class="plans__card-title">
                        Premium Plan
                    </div>
                    <ul class="plans__card-list">
                        <li class="plans__card-desc">Unlimited Bandwitch</li>
                        <li class="plans__card-desc">Encrypted Connection</li>
                        <li class="plans__card-desc">Yes Traffic Logs</li>
                        <li class="plans__card-desc">Works on All Devices</li>
                        <li class="plans__card-desc">Connect Anyware</li>
                        <li class="plans__card-desc">Get New Features</li>

                    </ul>
                    <p class="plans__card-price">
                        $12 / mo
                    </p>
                    <button class="plans__card-button">Select</button>
                </div>
            </div>
        </section>
    </div>
    <!-- ChoosePlan -->
    <!-- Map -->
    <div class="wrapper">
        <section class="map">
            <div class="map__title">
                Huge Global Network of Fast VPN
            </div>
            <div class="map__subtitle">
                See LaslesVPN everywhere to make it easier for you when you move locations.
            </div>
            <img class="map__image" src="./img/HugeGlobal.svg">
            <ul class="logo__list">
                <div class="logo__list1">
                    <img class="logo__item" src="./img/netflix.png">
                    <img class="logo__item" src="./img/reddit.png">
                </div>
                <div class="logo__list1">
                    <img class="logo__item" src="./img/amazon.png">
                    <img class="logo__item" src="./img/discord.png">
                </div>
                <div class="logo__list2">
                    <img class="logo__item" src="./img/spotify.png">
                </div>
            </ul>
        </section>
    </div>
    <!-- Map end-->
    <!-- Rating start-->
    <div class="wrapper">
        <div class="ratings__title">
            Trusted by Thousands of Happy Customer
        </div>
        <div class="ratings__subtitle">
            These are the stories of our customers who have joined us with great pleasure when using this crazy feature.
        </div>
    </div>

    <div class="slider" id ="js_slider">
    </div>

    <div class="wrapper">
        <div class="rating__button">
            <div class="rating__button-left"></div>
            <div class="rating__button-right"></div>
        </div>
    </div>

    <!-- Rating end-->
    <!-- Subscribe start-->
    <div class="wrapper">
        <section class="sub">
            <div>
                <div class="sub__title">
                    Subscribe Now for Get Special Features!
                </div>
                <div class="sub__subtitle">
                    Let's subscribe with us and find the fun.
                </div>
            </div>
            <button class="sub__button">Subscribe Now</button>
        </section>
    </div>

</main>
<!-- Footer -->
<footer class="footer">
    <div class="wrapper">
        <div class="footer__item">
            <div class="footer__logo">
                <img class="footer__logo-img" src="./img/svg/logo.svg">
                <div class="footer__logo-vpn">LaslesVPN is a private virtual network that has unique features and has high security.</div>
                <div class="footer__logo-icons">
                    <img href="#!" class="footer__logo-icon" src="./img/svg/Facebook.png">
                    <img href="#!" class="footer__logo-icon" src="./img/svg/Instagram.png">
                    <img href="#!" class="footer__logo-icon" src="./img/svg/Twitter.png">
                </div>
                <div class="footer__logo-year">©2020LaslesVPN></div>
            </div>
            <nav class="footer__nav">
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <div class="footer__menu-title">Product</div>
                        <a href="#!"  class="footer__menu-item">Download </a>
                        <a href="#!"  class="footer__menu-item">Pricing</a>
                        <a href="#!"  class="footer__menu-item">Locations</a>
                        <a href="#!"  class="footer__menu-item">Server</a>
                        <a href="#!"  class="footer__menu-item">Countries</a>
                        <a href="#!"  class="footer__menu-item">Blog</a>
                    </li>
                </ul>
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <div class="footer__menu-title">Engage</div>
                        <a href="#!"  class="footer__menu-item">LaslesVPN</a>
                        <a href="#!"  class="footer__menu-item">FAQ </a>
                        <a href="#!"  class="footer__menu-item">Tutorials</a>
                        <a href="#!"  class="footer__menu-item">About Us</a>
                        <a href="#!"  class="footer__menu-item">Privacy Policy</a>
                        <a href="#!"  class="footer__menu-item">Terms of Service</a>
                    </li>
                </ul>
                <ul class="footer__menu">
                    <li class="footer__menu-item">
                        <div class="footer__menu-title">Earn Money</div>
                        <a href="#!"  class="footer__menu-item">Affiliate</a>
                        <a href="#!"  class="footer__menu-item">Become Partner</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</footer>
<!-- Footer end -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script src="/public/js/script.js"></script>


</body>
</html>
