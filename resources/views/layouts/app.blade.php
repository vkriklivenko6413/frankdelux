<!DOCTYPE html>
<html lang="uk">

<head>

  <title>@yield('meta_title',$seo->seo_title[app()->getLocale()] ?? '')</title>
    <meta name="description" content="@yield('meta_description',$seo->seo_description[app()->getLocale()] ?? '')">
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="wrapper">
    <header data-scroll="60" data-scroll-show class="header">
        <div class="header__container">
            <a href="{{ route('index') }}" class="header__logo">
                <picture>
                    <source srcset="{{ asset('img/logo.svg') }}" type="image/webp">
                    <img src="{{ asset('img/logo.svg') }}" alt="Frank De Lux"></picture>
            </a>
            <div class="header__wrap">
                <nav class="header__menu menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="#advantages" id="advantages-id" class="menu__link">Преимущества</a>
                        </li>
                        <li class="menu__item">
                            <a href="#about" id="about-id" class="menu__link">О нас</a>
                        </li>
                        <li class="menu__item">
                            <a href="#categories" id="categories-id" class="menu__link">Категории</a>
                        </li>
                        <li class="menu__item">
                            <a href="#reviews" id="reviews-id" class="menu__link">Отзывы</a>
                        </li>
                        <li class="menu__item">
                            <a href="#footer" id="footer-id" class="menu__link">Контакты</a>
                        </li>
                        <li class="menu__item">
                            <a href="#form" id="form-id" class="menu__link">Оставить заявку</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__mob">
                    <div class="header__contacts">
                        <a href="mailto:turcanuna@gmail.com" class="header__contact">turcanuna@gmail.com</a>
                        <a href="tel:+37369573801" class="header__contact">+373 695 73 801</a>
                    </div>
                    <div class="header__socials">
                        <a href="" class="header__social _icon-facebook"></a>
                        <a href="" class="header__social _icon-instagram"></a>
                    </div>
                </div>
            </div>
            <div class="header__block">
                <div class="header__language-mob language-mob">
                    <input checked class="language-mob__radio" type="radio" id="select-ru" name="select_lang">
                    <label for="select-ru">
                        <a href="" class="language-mob__link select-ru">Рус</a>
                    </label>
                    <input class="language-mob__radio" type="radio" id="select-rom" name="select_lang">
                    <label for="select-rom">
                        <a href="" class="language-mob__link select-rom">Рум</a>
                    </label>
                </div>
                <button type="button" class="menu__icon icon-menu"><span></span></button>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer id="footer" class="footer">
        <div class="footer__container">
            <div class="footer__body">
                <div class="footer__wrapper">
                    <div class="footer__column">
                        <a href="" class="footer__logo">Frank de Lux</a>
                        <p class="footer__text">Мебель твоего дома</p>
                        <div class="footer__contacts">
                            <a href="mailto:{{ $setting->email }}" class="footer__contact">{{ $setting->email }}</a>
                            <a href="tel:{{ $setting->phone }}" class="footer__contact">{{ $setting->phone }}</a>
                        </div>
                        <div class="footer__socials">
                            <a href="{{ $setting->viber }}" class="footer__social _icon-facebook"></a>
                            <a href="{{ $setting->instagram }}" class="footer__social _icon-instagram"></a>
                        </div>
                    </div>
                    <nav class="footer__menu">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <a href="#advantages" id="advantages-f" class="footer__link">Преимущества</a>
                            </li>
                            <li class="footer__item">
                                <a href="#about" id="about-f" class="footer__link">О нас</a>
                            </li>
                            <li class="footer__item">
                                <a href="#categories" id="categories-f" class="footer__link">Категории</a>
                            </li>
                            <li class="footer__item">
                                <a href="#reviews" id="reviews-f" class="footer__link">Отзывы</a>
                            </li>
                            <li class="footer__item">
                                <a href="#form" id="form-f" class="footer__link">Оставить заявку</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div data-da=".footer__menu,767.98,1" class="footer__bottom">
                    <a href="" target="_blank" class="footer__bottom--link">Terms & Conditions</a>
                    <a href="" target="_blank" class="footer__bottom--link">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('js/app.min.js') }}"></script>

</body>

</html>
