@extends('layouts.layout')

@section('title')
    Lesles VPN
@endsection

@section('main_content')

    <main class="main">
        <!-- Intro start -->
        <div class="wrapper">
            <section class="intro">

                <div class="intro__left">
                    <div class="intro__title">
                        Want anything to be easy with LaslesVPN.
                    </div>
                    <div class="intro__subtitle">
                        Provide a network for all your needs with ease and fun using LaslesVPN discover interesting
                        features from us.
                    </div>
                    <button class="intro__button">Get Started</button>
                </div>
                <div class="intro__right">
                    <img class="intro__image" src="./image/Illustration1.svg">
                </div>

            </section>
        </div>
        <!-- Intro end -->

        <!-- Benefits start -->
        <div class="wrapper">
            <section class="benefits">
                <div class="benefits__cards">
                    <div class="benefits__card">
                        <img src="./image/svg/user.svg" class="benefits__card-pic">
                        <div class="benefits__top">
                            <div class="benefits__card-title">
                                90+
                            </div>
                            <p class="benefits__card-desc">
                                Users
                            </p>
                        </div>
                        <img src="./image/svg/line.svg" class="benefits__card-line">
                    </div>
                    <div class="benefits__card">
                        <img src="./image/svg/location.svg" class="benefits__card-pic">
                        <div class="benefits__top">
                            <div class="benefits__card-title">
                                30+
                            </div>
                            <p class="benefits__card-desc">
                                Locations
                            </p>
                        </div>
                        <img src="./image/svg/line.svg" class="benefits__card-line">
                    </div>
                    <div class="benefits__card">
                        <img src="./image/svg/server.svg" class="benefits__card-pic">
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
                    <img class="feature__image" src="./image/Illustration.svg">
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
                            <img src="./image/box.svg" alt="user" class="plans__card-thumb">
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
                            <img src="./image/box.svg" alt="location" class="plans__card-thumb">
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
                            <img src="./image/box.svg" alt="server" class="plans__card-thumb">
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
                <img class="map__image" src="./image/HugeGlobal.svg">
                <ul class="logo__list">
                    <div class="logo__list1">
                        <img class="logo__item" src="./image/netflix.png">
                        <img class="logo__item" src="./image/reddit.png">
                    </div>
                    <div class="logo__list1">
                        <img class="logo__item" src="./image/amazon.png">
                        <img class="logo__item" src="./image/discord.png">
                    </div>
                    <div class="logo__list2">
                        <img class="logo__item" src="./image/spotify.png">
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
                These are the stories of our customers who have joined us with great pleasure when using this crazy
                feature.
            </div>
        </div>

        <div class="slider" id="js_slider">
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

@endsection
