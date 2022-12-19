
<header class="header">
    <div class="wrapper">
        <div class="header__wrapper">
            <div class="header__logo">
                <a href="/vpn" class="header__logo-link">
                    <img src="../image/svg/logo.svg" alt="LaslesVPN" class="header__logo-pic">
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
                    <a href="{{ route('plans') }}"  class="header__link">Plans</a>
                </li>
                <li class="header__item">
                    <a href="/"  class="header__link">Blog</a>
                </li>
                <li class="header__item">
                    <a href="{{route('admin')}}"  class="header__link">Admin</a>
                </li>
            </ul>
            <ul class="header__list">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="header__item">
                            <a class="header__link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="header__item">

                            <a class="header__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown header__item">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
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
            </ul>
        </div>



    </div>

<!--    <ul class="navbar-nav ms-auto">
        &lt;!&ndash; Authentication Links &ndash;&gt;
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>-->

</header>


