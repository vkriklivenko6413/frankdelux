@extends('layouts.app')
@section('content')

    <section id="main" class="main">
        <div class="main__container">
            <div class="main__wrapper">
                <div class="main__content">
                    <h1 class="main__title">Мебель твоего дома</h1>
                    <p class="main__text">Превратите свою комнату с Frank De Lux в более минималистичную и современную с легкостью и быстротой</p>
                    <a href="#form" class="main__link--btn">Оставить заявку</a>
                </div>
            </div>
        </div>
        <div class="main__bg">
            <picture><source srcset="img/bg/bg-01.webp" type="image/webp"><img src="img/bg/bg-01.jpg" alt=""></picture>
        </div>
    </section>
    <section id="advantages" class="advantages">
        <div class="advantages__container">
            <h2 class="advantages__title-top">Наши
                преимущества</h2>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <h3 class="advantages__title">Быстрая доставка</h3>
                    <p class="advantages__text">Мы отправляем заказ во все города Украины и гарантируем всем клиентам максимально быструю доставку. Если вы оплатите товар в первой половине дня, то во второй мы его отправим с помощью компаний-перевозчиков.</p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__title">Быстрая сборка</h3>
                    <p class="advantages__text">Главное преимущество нашей компании – полный комплекс услуг. Это значит, что мы предоставляем не только доставку до подъезда, но и подъем на этаж и сборку корпусной мебели в удобный для вас день и время.</p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__title">Гарантия</h3>
                    <p class="advantages__text">Вся мебельная продукция, выставленная у нас на сайте, имеет сертификат соответствия и официальную гарантию от производителя. Мы любим и ценим каждого нашего покупателя.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="about__container">
            <div class="about__wrapper">
                <div class="about__image--wrap">
                    <div class="about__image">
                        <picture><source srcset="img/bg/bg-02.webp" type="image/webp"><img src="img/bg/bg-02.jpg" alt=""></picture>
                    </div>
                </div>
                <div class="about__content">
                    <h2 class="about__title">О нас</h2>
                    <p class="about__text">Ищете мебель для дома? В нашем магазине можно найти все необходимое для обустройства: кухни, прихожей, спальни, ванной комнаты. На страницах каталога вас ждет большой выбор моделей от известных украинских производителей, которые уже давно заслужили доверие потребителей.</p>
                    <p class="about__text"> У нас самые выгодные цены и условия доставки. Оплатить товар можно любым удобным способом: оформить кредит или рассрочку, или даже оформить оплату частями.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="categories" class="categories">
        <div class="categories__container">
            <h2 class="categories__title--top">Наши категории</h2>
            <div class="categories__slider swiper">
                <div class="categories__wrapper swiper-wrapper">
                    @foreach($cards as $card)
                    <a href="{{ route('front.product.show',$card->id) }}" class="categories__slide swiper-slide">
                        <div class="categories__image">
                            <picture><source srcset="storage/card/{{ $card->preview_photo }}" type="image/webp"><img src="storage/card/{{ $card->preview_photo }}" alt=""></picture>
                        </div>
                        <div class="categories__content">
                            <h3 class="categories__title">{{ $card->title[app()->getLocale()] }}</h3>
                            <ul class="categories__list">
                                <li class="categories__item">Столы для кухни</li>
                                <li class="categories__item">Кухонные уголки</li>
                                <li class="categories__item">Табуретки</li>
                                <li class="categories__item">Обеденные комплекты</li>
                            </ul>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="categories__button--nav">
                    <button type="button" class="categories__button swiper-button-prev _icon-arrow-1"></button>
                    <button type="button" class="categories__button swiper-button-next _icon-arrow-1"></button>
                </div>
            </div>
        </div>
    </section>
    <section class="block">
        <div class="block__container">
            <div class="block__wrapper">
                <div class="block__content">
                    <h2 class="block__title">Достойное качество, широкий ассортимент и доступные цены!</h2>
                    <a href="#form" class="block__link--btn">Оставить заявку</a>
                </div>
            </div>
        </div>
        <div class="block__bg">
            <picture><source srcset="img/bg/bg-03.webp" type="image/webp"><img src="img/bg/bg-03.jpg" alt=""></picture>
        </div>
    </section>
    <section id="reviews" class="reviews">
        <div class="reviews__container">
            <h2 class="reviews__title--top">Отзывы наших клиентов</h2>
            <div class="reviews__slider swiper">
                <div class="reviews__wrapper swiper-wrapper">
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__image">
                            <picture><source srcset="img/reviews/review-01.webp" type="image/webp"><img src="img/reviews/review-01.jpg" alt=""></picture>
                        </div>
                        <div class="reviews__wrap">
                            <div class="reviews__content">
                                <div class="reviews__top">
                                    <div class="reviews__bg">
                                        <svg viewBox="0 0 334 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M193.415 13.2162C197.368 18.4858 199.344 21.1206 200.459 21.9667C201.843 23.0163 202.088 23.1388 203.758 23.6156C205.104 24 207.023 24 210.86 24H302C313.201 24 318.802 24 323.08 26.1799C326.843 28.0973 329.903 31.1569 331.82 34.9202C334 39.1984 334 44.799 334 56V61C334 72.201 334 77.8016 331.82 82.0798C329.903 85.843 326.843 88.9027 323.08 90.8201C318.802 93 313.201 93 302 93H32C20.799 93 15.1984 93 10.9202 90.8201C7.15695 88.9027 4.09734 85.843 2.17987 82.0798C0 77.8016 0 72.201 0 61V56C0 44.799 0 39.1984 2.17987 34.9202C4.09734 31.1569 7.15695 28.0973 10.9202 26.1799C15.1984 24 20.799 24 32 24H123.14C126.977 24 128.896 24 130.242 23.6156C131.912 23.1388 132.157 23.0163 133.541 21.9667C134.656 21.1206 136.632 18.4858 140.585 13.2162C146.605 5.19164 156.196 0 167 0C177.804 0 187.395 5.19164 193.415 13.2162Z" fill="white" />
                                        </svg>

                                    </div>
                                    <div class="reviews__avatar">
                                        <div class="reviews__avatar--img">
                                            <picture><source srcset="img/reviews/avatar-01.webp" type="image/webp"><img src="img/reviews/avatar-01.png" alt=""></picture>
                                        </div>
                                    </div>
                                    <h3 class="reviews__title">Богдан Янин</h3>
                                    <p class="reviews__text">“Большое спасибо, теперь моя комната стала более роскошной и выглядит дорого“</p>
                                </div>
                                <div class="reviews__rating">
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star reviews__star--hide _icon-star"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__image">
                            <picture><source srcset="img/reviews/review-02.webp" type="image/webp"><img src="img/reviews/review-02.jpg" alt=""></picture>
                        </div>
                        <div class="reviews__wrap">
                            <div class="reviews__content">
                                <div class="reviews__top">
                                    <div class="reviews__bg">
                                        <svg viewBox="0 0 334 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M193.415 13.2162C197.368 18.4858 199.344 21.1206 200.459 21.9667C201.843 23.0163 202.088 23.1388 203.758 23.6156C205.104 24 207.023 24 210.86 24H302C313.201 24 318.802 24 323.08 26.1799C326.843 28.0973 329.903 31.1569 331.82 34.9202C334 39.1984 334 44.799 334 56V61C334 72.201 334 77.8016 331.82 82.0798C329.903 85.843 326.843 88.9027 323.08 90.8201C318.802 93 313.201 93 302 93H32C20.799 93 15.1984 93 10.9202 90.8201C7.15695 88.9027 4.09734 85.843 2.17987 82.0798C0 77.8016 0 72.201 0 61V56C0 44.799 0 39.1984 2.17987 34.9202C4.09734 31.1569 7.15695 28.0973 10.9202 26.1799C15.1984 24 20.799 24 32 24H123.14C126.977 24 128.896 24 130.242 23.6156C131.912 23.1388 132.157 23.0163 133.541 21.9667C134.656 21.1206 136.632 18.4858 140.585 13.2162C146.605 5.19164 156.196 0 167 0C177.804 0 187.395 5.19164 193.415 13.2162Z" fill="white" />
                                        </svg>

                                    </div>
                                    <div class="reviews__avatar">
                                        <div class="reviews__avatar--img">
                                            <picture><source srcset="img/reviews/avatar-02.webp" type="image/webp"><img src="img/reviews/avatar-02.png" alt=""></picture>
                                        </div>
                                    </div>
                                    <h3 class="reviews__title">Ирина Кравец</h3>
                                    <p class="reviews__text">“Спасибо Frank De Lux, теперь мне кажется, что я живу в квартире, потому что предметы
                                        выглядят роскошно.“</p>
                                </div>
                                <div class="reviews__rating">
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star reviews__star--hide _icon-star"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__image">
                            <picture><source srcset="img/reviews/review-03.webp" type="image/webp"><img src="img/reviews/review-03.jpg" alt=""></picture>
                        </div>
                        <div class="reviews__wrap">
                            <div class="reviews__content">
                                <div class="reviews__top">
                                    <div class="reviews__bg">
                                        <svg viewBox="0 0 334 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M193.415 13.2162C197.368 18.4858 199.344 21.1206 200.459 21.9667C201.843 23.0163 202.088 23.1388 203.758 23.6156C205.104 24 207.023 24 210.86 24H302C313.201 24 318.802 24 323.08 26.1799C326.843 28.0973 329.903 31.1569 331.82 34.9202C334 39.1984 334 44.799 334 56V61C334 72.201 334 77.8016 331.82 82.0798C329.903 85.843 326.843 88.9027 323.08 90.8201C318.802 93 313.201 93 302 93H32C20.799 93 15.1984 93 10.9202 90.8201C7.15695 88.9027 4.09734 85.843 2.17987 82.0798C0 77.8016 0 72.201 0 61V56C0 44.799 0 39.1984 2.17987 34.9202C4.09734 31.1569 7.15695 28.0973 10.9202 26.1799C15.1984 24 20.799 24 32 24H123.14C126.977 24 128.896 24 130.242 23.6156C131.912 23.1388 132.157 23.0163 133.541 21.9667C134.656 21.1206 136.632 18.4858 140.585 13.2162C146.605 5.19164 156.196 0 167 0C177.804 0 187.395 5.19164 193.415 13.2162Z" fill="white" />
                                        </svg>

                                    </div>
                                    <div class="reviews__avatar">
                                        <div class="reviews__avatar--img">
                                            <picture><source srcset="img/reviews/avatar-03.webp" type="image/webp"><img src="img/reviews/avatar-03.png" alt=""></picture>
                                        </div>
                                    </div>
                                    <h3 class="reviews__title">Марк Оскар</h3>
                                    <p class="reviews__text">“Очень доступно для моего кармана, который не слишком велик“</p>
                                </div>
                                <div class="reviews__rating">
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star reviews__star--hide _icon-star"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slide swiper-slide">
                        <div class="reviews__image">
                            <picture><source srcset="img/reviews/review-02.webp" type="image/webp"><img src="img/reviews/review-02.jpg" alt=""></picture>
                        </div>
                        <div class="reviews__wrap">
                            <div class="reviews__content">
                                <div class="reviews__top">
                                    <div class="reviews__bg">
                                        <svg viewBox="0 0 334 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M193.415 13.2162C197.368 18.4858 199.344 21.1206 200.459 21.9667C201.843 23.0163 202.088 23.1388 203.758 23.6156C205.104 24 207.023 24 210.86 24H302C313.201 24 318.802 24 323.08 26.1799C326.843 28.0973 329.903 31.1569 331.82 34.9202C334 39.1984 334 44.799 334 56V61C334 72.201 334 77.8016 331.82 82.0798C329.903 85.843 326.843 88.9027 323.08 90.8201C318.802 93 313.201 93 302 93H32C20.799 93 15.1984 93 10.9202 90.8201C7.15695 88.9027 4.09734 85.843 2.17987 82.0798C0 77.8016 0 72.201 0 61V56C0 44.799 0 39.1984 2.17987 34.9202C4.09734 31.1569 7.15695 28.0973 10.9202 26.1799C15.1984 24 20.799 24 32 24H123.14C126.977 24 128.896 24 130.242 23.6156C131.912 23.1388 132.157 23.0163 133.541 21.9667C134.656 21.1206 136.632 18.4858 140.585 13.2162C146.605 5.19164 156.196 0 167 0C177.804 0 187.395 5.19164 193.415 13.2162Z" fill="white" />
                                        </svg>

                                    </div>
                                    <div class="reviews__avatar">
                                        <div class="reviews__avatar--img">
                                            <picture><source srcset="img/reviews/avatar-02.webp" type="image/webp"><img src="img/reviews/avatar-02.png" alt=""></picture>
                                        </div>
                                    </div>
                                    <h3 class="reviews__title">Ирина Кравец</h3>
                                    <p class="reviews__text">“Спасибо Frank De Lux, теперь мне кажется, что я живу в квартире, потому что предметы
                                        выглядят роскошно.“</p>
                                </div>
                                <div class="reviews__rating">
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star _icon-star"></div>
                                    <div class="reviews__star reviews__star--hide _icon-star"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews__button--nav">
                    <button type="button" class="reviews__button swiper-button-prev _icon-arrow-1"></button>
                    <button type="button" class="reviews__button swiper-button-next _icon-arrow-1"></button>
                </div>
            </div>
        </div>
    </section>
    <section id="form" class="form">
        <div class="form__container">
            <h2 class="form__title--top">Оставить заявку</h2>
            <form action="" class="form__body">
                <div class="form__wrapper">
                    <h3 class="form__title">Заявка</h3>
                    <div class="form__fields">
                        <div class="form__item">
                            <input data-error="Поле обязательно для заполнения" data-required="name" data-validate class="form__input" name="name" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="form__item">
                            <input data-error="Поле обязательно для заполнения" data-required="phone" data-validate class="form__input phone-mask" name="tel" type="tel" placeholder="Ваш телефон">
                        </div>
                    </div>
                    <button type="submit" class="form__button--btn">Оставить заявку</button>
                </div>
            </form>
        </div>
    </section>

@endsection
