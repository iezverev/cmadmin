<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/site.css") }}">
    <link rel="stylesheet" href="{{ asset("css/jquery-ui.css") }}">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="{{ asset("js/jquery-ui.js") }}" defer></script>
    <script src="{{ asset("js/acardeon.js") }}" defer></script>
    <script src="{{ asset("js/star.js") }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js" type="text/javascript" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset("js/paralax.js") }}" defer></script>
    <script src="{{ asset("js/script.js") }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="preloader">
    <svg class="preloader__image" width="35" height="45" viewBox="0 0 35 45" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.1905 13.1294C27.6416 14.3709 27.8411 15.6187 27.8411 17.0013C27.8411 23.8452 14.4676 43.1261 14.4676 43.1261C14.4676 43.1261 1.09412 23.846 1.09412 17.0013C1.09412 15.5766 1.22036 14.4037 1.69841 13.1294" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M21.624 10.3766C25.0385 11.0738 27.284 12.2544 27.284 13.5927C27.284 15.7349 21.5365 17.4716 14.4466 17.4716C7.3567 17.4716 1.60669 15.7349 1.60669 13.5927C1.60669 12.4595 3.21504 11.4403 5.77949 10.7306" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
        <path d="M27.6837 15.6179C28.3133 15.4096 28.9771 15.3041 29.6455 15.306C32.8437 15.306 34.4521 17.6455 33.7375 20.5395C32.9944 23.5434 29.0774 24.4816 25.7505 23.9708" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M10.1315 13.1216C10.1315 13.1216 8.07372 11.3077 8.64519 8.74125C8.8455 7.84833 9.73426 6.44617 10.1315 5.36297C11.2719 2.26154 9.37067 1.01379 9.37067 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
        <path d="M14.4441 30.6728C17.0828 30.6728 19.222 28.7696 19.222 26.4218C19.222 24.0741 17.0828 22.1709 14.4441 22.1709C11.8053 22.1709 9.66614 24.0741 9.66614 26.4218C9.66614 28.7696 11.8053 30.6728 14.4441 30.6728Z" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
        <path d="M15.2689 13.1216C15.2689 13.1216 13.2077 11.3077 13.7834 8.74125C13.9828 7.84833 14.8716 6.44617 15.2689 5.36297C16.4059 2.26154 14.508 1.01379 14.508 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
        <path d="M20.301 13.1216C20.301 13.1216 18.2407 11.3077 18.8147 8.74125C19.015 7.84833 19.9037 6.44617 20.301 5.36297C21.438 2.25764 19.5435 1.01379 19.5435 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
    </svg>

</div>
<div class="header">
    <div class="container">

        <div class="header__body fc">

            <div class="logo_block">
                <a class="logo" href="../../" >
                    <svg width="35" height="45" viewBox="0 0 35 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.1905 13.1294C27.6416 14.3709 27.8411 15.6187 27.8411 17.0013C27.8411 23.8452 14.4676 43.1261 14.4676 43.1261C14.4676 43.1261 1.09412 23.846 1.09412 17.0013C1.09412 15.5766 1.22036 14.4037 1.69841 13.1294" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M21.624 10.3766C25.0385 11.0738 27.284 12.2544 27.284 13.5927C27.284 15.7349 21.5365 17.4716 14.4466 17.4716C7.3567 17.4716 1.60669 15.7349 1.60669 13.5927C1.60669 12.4595 3.21504 11.4403 5.77949 10.7306" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M27.6837 15.6179C28.3133 15.4096 28.9771 15.3041 29.6455 15.306C32.8437 15.306 34.4521 17.6455 33.7375 20.5395C32.9944 23.5434 29.0774 24.4816 25.7505 23.9708" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M10.1315 13.1216C10.1315 13.1216 8.07372 11.3077 8.64519 8.74125C8.8455 7.84833 9.73426 6.44617 10.1315 5.36297C11.2719 2.26154 9.37067 1.01379 9.37067 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M14.4441 30.6728C17.0828 30.6728 19.222 28.7696 19.222 26.4218C19.222 24.0741 17.0828 22.1709 14.4441 22.1709C11.8053 22.1709 9.66614 24.0741 9.66614 26.4218C9.66614 28.7696 11.8053 30.6728 14.4441 30.6728Z" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                        <path d="M15.2689 13.1216C15.2689 13.1216 13.2077 11.3077 13.7834 8.74125C13.9828 7.84833 14.8716 6.44617 15.2689 5.36297C16.4059 2.26154 14.508 1.01379 14.508 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M20.301 13.1216C20.301 13.1216 18.2407 11.3077 18.8147 8.74125C19.015 7.84833 19.9037 6.44617 20.301 5.36297C21.438 2.25764 19.5435 1.01379 19.5435 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>
                    <div class="logo__text">
                        CoffeeMap
                    </div>
                </a>
            </div>
            <div class="header__burger">
                <span></span>
            </div>
            <nav>

                <ul class="menu__list">


                    <li class="menu__item  "><a href="/contact">Контакты</a></li>

                    <li class="menu__item  "><a href="/faq">FAQ</a></li>
                    @auth
                        <li class="menu__item "><a href="/admin/index">Админка</a></li>
                        <li class="menu__item  "><a href="/admin/logout">Выйти</a></li>
                    @endauth
                </ul>
            </nav>
        </div>

    </div>
</div>
<div id="app">
        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            <div class="footer__container">
                <div class="footer__top">
                    <div class="footer__logo-block">
                        <div class="footer__logo">
                            <svg width="35" height="45" viewBox="0 0 35 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.1905 13.1294C27.6416 14.3709 27.8411 15.6187 27.8411 17.0013C27.8411 23.8452 14.4676 43.1261 14.4676 43.1261C14.4676 43.1261 1.09412 23.846 1.09412 17.0013C1.09412 15.5766 1.22036 14.4037 1.69841 13.1294" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M21.624 10.3766C25.0385 11.0738 27.284 12.2544 27.284 13.5927C27.284 15.7349 21.5365 17.4716 14.4466 17.4716C7.3567 17.4716 1.60669 15.7349 1.60669 13.5927C1.60669 12.4595 3.21504 11.4403 5.77949 10.7306" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                <path d="M27.6837 15.6179C28.3133 15.4096 28.9771 15.3041 29.6455 15.306C32.8437 15.306 34.4521 17.6455 33.7375 20.5395C32.9944 23.5434 29.0774 24.4816 25.7505 23.9708" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M10.1315 13.1216C10.1315 13.1216 8.07372 11.3077 8.64519 8.74125C8.8455 7.84833 9.73426 6.44617 10.1315 5.36297C11.2719 2.26154 9.37067 1.01379 9.37067 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                <path d="M14.4441 30.6728C17.0828 30.6728 19.222 28.7696 19.222 26.4218C19.222 24.0741 17.0828 22.1709 14.4441 22.1709C11.8053 22.1709 9.66614 24.0741 9.66614 26.4218C9.66614 28.7696 11.8053 30.6728 14.4441 30.6728Z" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                                <path d="M15.2689 13.1216C15.2689 13.1216 13.2077 11.3077 13.7834 8.74125C13.9828 7.84833 14.8716 6.44617 15.2689 5.36297C16.4059 2.26154 14.508 1.01379 14.508 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                <path d="M20.301 13.1216C20.301 13.1216 18.2407 11.3077 18.8147 8.74125C19.015 7.84833 19.9037 6.44617 20.301 5.36297C21.438 2.25764 19.5435 1.01379 19.5435 1.01379" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                            </svg>
                            <div class="logo__text">
                                CoffeeMap
                            </div>
                        </div>
                        <div class="social">
                            <a class="vk" href="#">
                                <svg  width="24" height="14" viewBox="0 0 24 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M22.7203 1.1875C22.8872 0.65875 22.7203 0.274375 21.982 0.274375H19.5272C18.908 0.274375 18.622 0.610937 18.4552 0.970937C18.4552 0.970937 17.1923 4.04594 15.4289 6.03953C14.857 6.61609 14.595 6.80828 14.2852 6.80828C14.1183 6.80828 13.9036 6.61609 13.9036 6.08781V1.16266C13.9036 0.538281 13.7133 0.25 13.1887 0.25H9.32812C8.94656 0.25 8.70844 0.538281 8.70844 0.826563C8.70844 1.42703 9.59016 1.57141 9.68531 3.25281V6.90625C9.68531 7.69891 9.54469 7.84375 9.2325 7.84375C8.39859 7.84375 6.37313 4.74484 5.15812 1.21375C4.92188 0.514375 4.68188 0.25 4.06219 0.25H1.58391C0.869063 0.25 0.75 0.586094 0.75 0.946563C0.75 1.59531 1.58391 4.86203 4.63406 9.18578C6.65953 12.1389 9.54281 13.7261 12.1402 13.7261C13.7133 13.7261 13.9036 13.3656 13.9036 12.7652V10.5311C13.9036 9.81062 14.0466 9.69062 14.5472 9.69062C14.9044 9.69062 15.548 9.88234 17.0016 11.2998C18.6694 12.9813 18.9553 13.75 19.8848 13.75H22.3392C23.0541 13.75 23.3878 13.3895 23.197 12.693C22.9828 11.9964 22.1723 10.9877 21.1238 9.78672C20.5519 9.11453 19.6941 8.36969 19.432 8.00922C19.0748 7.52875 19.17 7.33656 19.432 6.90438C19.4081 6.90438 22.4109 2.62844 22.7203 1.18563" fill="#A6A6A6"/>
                                </svg>
                            </a>
                            <a class="facebook" href="#">
                                <svg width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.44043 0.5C5.48393 0.5 3.75 2.06163 3.75 5.61963V8.75H0V12.5H3.75V21.5H7.5V12.5H10.5L11.25 8.75H7.5V6.25391C7.5 4.91366 7.93707 4.25 9.19482 4.25H11.25V0.653809C10.8945 0.605809 9.85868 0.5 8.44043 0.5Z" fill="#A6A6A6"/>
                                </svg>
                            </a>
                            <a class="tw" href="#">
                                <svg  width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 2.41894C17.3379 2.71191 16.626 2.91113 15.8789 2.99902C16.6406 2.54199 17.2266 1.81836 17.502 0.957031C16.79 1.37891 15.999 1.68652 15.1582 1.85352C14.4844 1.13574 13.5234 0.68457 12.4629 0.68457C10.4238 0.68457 8.76855 2.33984 8.76855 4.37891C8.76855 4.66895 8.80078 4.95019 8.86524 5.21973C5.79492 5.06738 3.07324 3.59668 1.25391 1.36133C0.93457 1.90625 0.752929 2.54199 0.752929 3.21875C0.752929 4.49902 1.40332 5.62988 2.39648 6.29199C1.79004 6.27148 1.22168 6.10742 0.723633 5.8291C0.723633 5.84668 0.723633 5.86133 0.723633 5.87598C0.723633 7.66602 1.99512 9.16016 3.68555 9.49707C3.375 9.58203 3.0498 9.62891 2.71289 9.62891C2.47559 9.62891 2.24121 9.60547 2.01855 9.56152C2.4873 11.0293 3.85254 12.0957 5.4668 12.1279C4.2041 13.1182 2.61035 13.707 0.881836 13.707C0.583008 13.707 0.290039 13.6895 0 13.6543C1.63477 14.7031 3.57422 15.3154 5.66016 15.3154C12.4541 15.3154 16.1689 9.6875 16.1689 4.80664C16.1689 4.64844 16.1631 4.4873 16.1572 4.3291C16.8779 3.80762 17.5049 3.15723 18 2.41894Z" fill="#A6A6A6"/>
                                </svg>
                            </a>
                            <a class="inst"  href="#">
                                <svg class="inst" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 0C8.741 0 8.33236 0.0138127 7.05243 0.0722122C5.77517 0.130468 4.90283 0.33334 4.13954 0.630005C3.35044 0.936625 2.68123 1.34695 2.01407 2.01406C1.34695 2.68122 0.936625 3.35044 0.630005 4.13954C0.33334 4.90283 0.130476 5.77515 0.0722198 7.05241C0.0138204 8.33234 0 8.74099 0 12C0 15.259 0.0138204 15.6677 0.0722198 16.9476C0.130476 18.2248 0.33334 19.0972 0.630005 19.8605C0.936625 20.6496 1.34695 21.3188 2.01407 21.9859C2.68123 22.6531 3.35044 23.0634 4.13954 23.37C4.90283 23.6667 5.77517 23.8695 7.05243 23.9278C8.33236 23.9862 8.741 24 12 24C15.259 24 15.6676 23.9862 16.9476 23.9278C18.2248 23.8695 19.0972 23.6667 19.8604 23.37C20.6495 23.0634 21.3188 22.6531 21.9859 21.9859C22.653 21.3188 23.0634 20.6496 23.37 19.8605C23.6666 19.0972 23.8695 18.2248 23.9278 16.9476C23.9862 15.6677 24 15.259 24 12C24 8.74099 23.9862 8.33234 23.9278 7.05241C23.8695 5.77515 23.6666 4.90283 23.37 4.13954C23.0634 3.35044 22.653 2.68122 21.9859 2.01406C21.3188 1.34695 20.6495 0.936625 19.8604 0.630005C19.0972 0.33334 18.2248 0.130468 16.9476 0.0722122C15.6676 0.0138127 15.259 0 12 0ZM12 2.16216C15.2041 2.16216 15.5837 2.1744 16.849 2.23213C18.019 2.28548 18.6544 2.48097 19.0773 2.64531C19.6374 2.863 20.0371 3.12303 20.457 3.54298C20.877 3.96287 21.137 4.36262 21.3547 4.92274C21.519 5.34559 21.7145 5.98098 21.7679 7.15097C21.8256 8.41632 21.8378 8.79587 21.8378 12C21.8378 15.2041 21.8256 15.5837 21.7679 16.849C21.7145 18.019 21.519 18.6544 21.3547 19.0773C21.137 19.6374 20.877 20.0371 20.457 20.457C20.0371 20.877 19.6374 21.137 19.0773 21.3547C18.6544 21.519 18.019 21.7145 16.849 21.7679C15.5839 21.8256 15.2044 21.8378 12 21.8378C8.79564 21.8378 8.41618 21.8256 7.15097 21.7679C5.98098 21.7145 5.34559 21.519 4.92274 21.3547C4.36262 21.137 3.96286 20.877 3.54297 20.457C3.12307 20.0371 2.863 19.6374 2.64531 19.0773C2.48097 18.6544 2.28548 18.019 2.23213 16.849C2.1744 15.5837 2.16216 15.2041 2.16216 12C2.16216 8.79587 2.1744 8.41632 2.23213 7.15097C2.28548 5.98098 2.48097 5.34559 2.64531 4.92274C2.863 4.36262 3.12303 3.96287 3.54297 3.54298C3.96286 3.12303 4.36262 2.863 4.92274 2.64531C5.34559 2.48097 5.98098 2.28548 7.15097 2.23213C8.41632 2.1744 8.79588 2.16216 12 2.16216ZM12 5.83784C8.59672 5.83784 5.83784 8.59671 5.83784 12C5.83784 15.4033 8.59672 18.1622 12 18.1622C15.4033 18.1622 18.1622 15.4033 18.1622 12C18.1622 8.59671 15.4033 5.83784 12 5.83784ZM12 16C9.79086 16 8 14.2091 8 12C8 9.79085 9.79086 8 12 8C14.2092 8 16 9.79085 16 12C16 14.2091 14.2092 16 12 16ZM19.8456 5.59438C19.8456 6.38968 19.2009 7.03436 18.4056 7.03436C17.6104 7.03436 16.9656 6.38968 16.9656 5.59438C16.9656 4.79908 17.6104 4.15436 18.4056 4.15436C19.2009 4.15436 19.8456 4.79908 19.8456 5.59438Z" fill="#A6A6A6"/>
                                </svg>
                            </a>


                        </div>
                        <div class="language">
                            <p class="footer__text">Русский</p>
                            <p class="footer__text">English</p>
                        </div>
                    </div>
                    <div class="footer__company-block">
                        <ul class="footer__list">
                            <li>Компания</li>
                            <li><a href="#">Бренд-центр</a></li>
                            <li><a href="#">Условия пользования</a></li>
                            <li><a href="#">Рекламная политика</a></li>
                            <li><a href="#">Конфиденциальность</a></li>
                            <li><a href="#">Справка</a></li>
                        </ul>
                    </div>
                    <div class="footer__coffeemap-block">
                        <ul class="footer__list">
                            <li>CoffeeMap</li>
                            <li><a href="#">Функции</a></li>
                            <li><a href="#">Партнерам</a></li>
                            <li><a href="#">Поддержка</a></li>

                        </ul>
                    </div>
                    <div class="footer__help-block">
                        <ul class="footer__list">
                            <li>Помощь</li>
                            <li><a href="/site/faq">FAQ</a></li>


                        </ul>
                        <div class="footer__link-block">
                            <ul class="footer__list">
                                <li>Связаться с нами:</li>
                                <li><a href="#">info@coffeemap.online</a></li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer__line"></div>
            <div class="footer__bot">
                <p ><a href="#" class="footer__text">Privacy Policy</a></p>
                <p><a href="#"  class="footer__text">Terms of use</a></p>
            </div>
    </footer>
    </div>

</body>
</html>
<script>
    window.onload = function(){
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);

        let logo = document.getElementById("text1");
        TweenLite.to(logo, 1, {x:"0px"});

        document.querySelectorAll('.dot').forEach(dot => {

        });


    }
    $(window).on('load',function () {
        $('.menu__item a').each(function () {

            let location = window.location.href;
            let link = this.href;

            if(location == link) {
                $(this).addClass('active');
            }
        });

    });
    $(document).ready(function () {
        $('.header__burger').click(function () {
            $('.header__burger, nav').toggleClass('active');
            $('body').toggleClass('lock');
        });


    });
    $('.social a ').mouseenter(function () {
        $(this).children().children().attr('fill','#000');
    });
    $('.social a').mouseleave(function () {
        $(this).children().children().attr('fill','#A6A6A6');
    });
</script>
