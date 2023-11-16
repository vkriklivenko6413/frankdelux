@extends('layouts.app')
@section('content')

    <section id="main" class="main">
        <div class="main__container">
            <div class="main__wrapper">
                <div class="main__content">
                    <h1 class="main__title">{{ $blockOne->title[app()->getLocale()] }}</h1>
                    <p class="main__text">{{ $blockOne->description[app()->getLocale()] }}</p>
                    <a href="#form" class="main__link--btn">{{ $blockOne->button[app()->getLocale()] }}</a>
                </div>
            </div>
        </div>
        <div class="main__bg">
            <picture>
                <source srcset="{{ asset('storage/block/') }}/{{ $blockOne->photo }}" type="image/webp">
                <img src="{{ asset('storage/block/') }}/{{ $blockOne->photo }}" alt=""></picture>
        </div>
    </section>
    <section id="advantages" class="advantages">
        <div class="advantages__container">
            <h2 class="advantages__title-top">{{ $blockTwo->title[app()->getLocale()] }}</h2>
            <div class="advantages__wrapper">
                <div class="advantages__item">
                    <h3 class="advantages__title">{{ $blockTwo->preview_title_1[app()->getLocale()] }}</h3>
                    <p class="advantages__text">{{ $blockTwo->description_1[app()->getLocale()] }}</p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__title">{{ $blockTwo->preview_title_2[app()->getLocale()] }}</h3>
                    <p class="advantages__text">{{ $blockTwo->description_2[app()->getLocale()] }}</p>
                </div>
                <div class="advantages__item">
                    <h3 class="advantages__title">{{ $blockTwo->preview_title_3[app()->getLocale()] }}</h3>
                    <p class="advantages__text">{{ $blockTwo->description_3[app()->getLocale()] }}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="about">
        <div class="about__container">
            <div class="about__wrapper">
                <div class="about__image--wrap">
                    <div class="about__image">
                        <picture>
                            <source srcset="{{ asset('storage/block') }}/{{ $blockThree->photo }}" type="image/webp">
                            <img src="{{ asset('storage/block') }}/{{ $blockThree->photo }}" alt=""></picture>
                    </div>
                </div>
                <div class="about__content">
                    <h2 class="about__title">{{ $blockThree->title[app()->getLocale()] }}</h2>
                    <p class="about__text">{{ $blockThree->description[app()->getLocale()] }}</p>
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
                                <picture>
                                    <source srcset="storage/card/{{ $card->preview_photo }}" type="image/webp">
                                    <img src="storage/card/{{ $card->preview_photo }}" alt=""></picture>
                            </div>
                            <div class="categories__content">
                                <h3 class="categories__title">{{ $card->title[app()->getLocale()] }}</h3>
                                <ul class="categories__list">
                                    {!! $card->description[App::currentLocale()] !!}

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
                    <h2 class="block__title">{{ $blockFour->title[app()->getLocale()] }}</h2>
                    <a href="#form" class="block__link--btn">{{ $blockFour->button[app()->getLocale()]}}</a>
                </div>
            </div>
        </div>
        <div class="block__bg">
            <picture>
                <source srcset="{{ asset('storage/block/') }}/{{ $blockFour->photo }}" type="image/webp">
                <img src="{{ asset('storage/block/') }}/{{ $blockFour->photo }}" alt=""></picture>
        </div>
    </section>
    <section id="reviews" class="reviews">
        <div class="reviews__container">
            <h2 class="reviews__title--top">Отзывы наших клиентов</h2>
            <div class="reviews__slider swiper">
                <div class="reviews__wrapper swiper-wrapper">
                    @foreach($reviews as $review)
                        <div class="reviews__slide swiper-slide">
                            <div class="reviews__image">
                                <picture>
                                    <source srcset="{{ asset('storage/block/') }}/{{ $review->photo }}" type="image/webp">
                                    <img src="{{ asset('storage/block/') }}/{{ $review->photo }}" alt=""></picture>
                            </div>
                            <div class="reviews__wrap">
                                <div class="reviews__content">
                                    <div class="reviews__top">
                                        <div class="reviews__bg">
                                            <svg viewBox="0 0 334 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M193.415 13.2162C197.368 18.4858 199.344 21.1206 200.459 21.9667C201.843 23.0163 202.088 23.1388 203.758 23.6156C205.104 24 207.023 24 210.86 24H302C313.201 24 318.802 24 323.08 26.1799C326.843 28.0973 329.903 31.1569 331.82 34.9202C334 39.1984 334 44.799 334 56V61C334 72.201 334 77.8016 331.82 82.0798C329.903 85.843 326.843 88.9027 323.08 90.8201C318.802 93 313.201 93 302 93H32C20.799 93 15.1984 93 10.9202 90.8201C7.15695 88.9027 4.09734 85.843 2.17987 82.0798C0 77.8016 0 72.201 0 61V56C0 44.799 0 39.1984 2.17987 34.9202C4.09734 31.1569 7.15695 28.0973 10.9202 26.1799C15.1984 24 20.799 24 32 24H123.14C126.977 24 128.896 24 130.242 23.6156C131.912 23.1388 132.157 23.0163 133.541 21.9667C134.656 21.1206 136.632 18.4858 140.585 13.2162C146.605 5.19164 156.196 0 167 0C177.804 0 187.395 5.19164 193.415 13.2162Z"
                                                      fill="white"/>
                                            </svg>

                                        </div>
                                        <div class="reviews__avatar">
                                            <div class="reviews__avatar--img">
                                                <picture>
                                                    <source srcset="{{ asset('storage/block/') }}/{{ $review->avatar }}" type="image/webp">
                                                    <img src="{{ asset('storage/block/') }}/{{ $review->avatar }}" alt=""></picture>
                                            </div>
                                        </div>
                                        <h3 class="reviews__title">{{ $review->name[app()->getLocale()] }}</h3>
                                        <p class="reviews__text">{{$review->description[app()->getLocale()]}}</p>
                                    </div>
                                    <div class="reviews__rating">
                                            <?php
                                            $rating = $review->rating; // Предполагаем, что $review->rating содержит значение от 1 до 5

                                            // Отображаем звезды в зависимости от значения рейтинга
                                            for ($i = 1; $i <= 5; $i++) {
                                                $starClass = ($i <= $rating) ? '_icon-star' : 'reviews__star--hide _icon-star';
                                                echo '<div class="reviews__star ' . $starClass . '"></div>';
                                            }
                                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
                            <input data-error="Поле обязательно для заполнения" data-required="name" data-validate
                                   class="form__input" name="name" type="text" placeholder="Ваше имя">
                        </div>
                        <div class="form__item">
                            <input data-error="Поле обязательно для заполнения" data-required="phone" data-validate
                                   class="form__input phone-mask" name="tel" type="tel" placeholder="Ваш телефон">
                        </div>
                    </div>
                    <button type="submit" class="form__button--btn">Оставить заявку</button>
                </div>
            </form>
        </div>
    </section>

@endsection
