@extends('layouts.app')

@section('content')
    <section class="main main--h">
        <div class="main__container">
            <div class="main__wrapper">
                <div class="main__content">
                    <h1 class="main__title">{{ $card->title[app()->getLocale()] }}</h1>
                    <p class="main__text">Превратите свою комнату с Frank De Lux в более минималистичную и современную с легкостью и быстротой</p>
                    <a href="#form" class="main__link--btn">Оставить заявку</a>
                </div>
            </div>
        </div>
        <div class="main__bg">
            <picture><source srcset="/storage/card/{{ $card->preview_photo }}" type="image/webp"><img src="/storage/card/{{ $card->preview_photo }}" alt=""></picture>
        </div>
    </section>
    <section class="products">
        <div class="products__container">
            <div class="products__breadcrumb breadcrumb">
                <ul class="breadcrumb__list">
                    <li><a href="{{ route('index') }}" class="breadcrumb__link">Главная</a></li>
                    <li class="breadcrumb__active">{{ $card->title[app()->getLocale()] }}</li>
                </ul>
            </div>
            <div class="products__wrapper">
                <div class="products__body">
                    @foreach($card->galleries as $c)
                    <div class="products__image">
                        <picture><source srcset="/storage/card/{{ $c->photo }}" type="image/webp"><img src="/storage/card/{{ $c->photo }}" alt=""></picture>
                    </div>
                    @endforeach

                </div>
{{--                <ul class="products__pagination pagination">--}}
{{--                    <li class="pagination__button pagination__button--prev _icon-arrow-2"></li>--}}
{{--                    <li class="pagination__list pagination__list--active">--}}
{{--                        <a href="" class="pagination__link">1</a>--}}
{{--                    </li>--}}
{{--                    <li class="pagination__list">--}}
{{--                        <a href="" class="pagination__link">2</a>--}}
{{--                    </li>--}}
{{--                    <li class="pagination__list">--}}
{{--                        <a href="" class="pagination__link">3</a>--}}
{{--                    </li>--}}
{{--                    <li class="pagination__list pagination__dots"><span>.</span><span>.</span><span>.</span></li>--}}
{{--                    <li class="pagination__list">--}}
{{--                        <a href="" class="pagination__link">8</a>--}}
{{--                    </li>--}}
{{--                    <li class="pagination__button pagination__button--next _icon-arrow-2"></li>--}}
{{--                </ul>--}}
            </div>
            @php
                $currentPage = request()->get('page', 1);
                $perPage = 1; // Количество элементов на странице

                $items = $card->galleries->slice(($currentPage - 1) * $perPage, $perPage);
                $totalItems = $card->galleries->count();
                $lastPage = ceil($totalItems / $perPage);
            @endphp
            <div class="products__wrapper--mob products-mob">
                <div class="products-mob__body">
                    @foreach($card->galleries()->paginate(4) as $c)
                    <div class="products-mob__image">
                        <picture><source srcset="/storage/card/{{ $c->photo }}" type="image/webp"><img src="/storage/card/{{ $c->photo }}" alt=""></picture>
                    </div>
                    @endforeach
                </div>
                <div class="products-mob__pagination">
                    @if($currentPage > 1)
                        <a href="{{ url('product/'.$card->id.'?page=' . ($currentPage - 1)) }}" class="products-mob__button products-mob__button--prev _icon-arrow-1"></a>
                    @endif

                    @if($currentPage < $lastPage)
                        <a href="{{ url('product/'.$card->id.'?page=' . ($currentPage + 1)) }}" class="products-mob__button products-mob__button--next _icon-arrow-1"></a>
                    @endif
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
