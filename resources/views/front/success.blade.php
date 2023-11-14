@extends('layouts.app')
@section('meta_title', $seo->seo_title[app()->getLocale()] ?? '')
@section('meta_description', $seo->seo_description[app()->getLocale()] ?? '')
@section('content')
<section id="in" class="success">
  <div class="success__container">
    <div class="success__wrapper">
      <div class="success__content">
        <div class="success__icon _icon-done"></div>
        <h5 class="success__title">{{ __('Ваше замовлення успішно оформлене') }}</h5>
        <p class="success__text">{{ __("Ми отримали ваше повідомлення і незабаром зв'яжемося з вами") }}</p>
        <a href="{{ route('index') }}" class="success__link--btn-accent _icon-arrow-2">{{ __('продовжити покупки') }}</a>
      </div>
    </div>
  </div>
</section>
@endsection
