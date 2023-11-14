@extends('admin.layouts.layout')
@section('content')
    @include('admin.layouts.alerts._success')
    <div class="row g-0">
        <div class="col-lg-12 pe-lg-2">
            <div class="card mb-12">
                <div class="card-header">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-questionnaire-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-questionnaire" type="button" role="tab"
                                aria-controls="nav-questionnaire" aria-selected="true">SEO Главная
                        </button>
                    </div>
                </div>
                <div class="card-body bg-light">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-questionnaire" role="tabpanel">
                            <form action="{{ route('admin.seo.lading.update', $seo->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 SEO Title*
                                            </label>
                                            <input class="form-control" id="title" value="{{ $seo->seo_title['ru'] }}"
                                                   name="seo_title_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇺🇦 Seo Title
                                            </label>
                                            <input class="form-control" id="title_uk" value="{{ $seo->seo_title['uk'] }}"
                                                   name="seo_title_uk" type="text">
                                        </div>


                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Seo Description*
                                            </label>
                                            <input class="form-control" id="title"
                                                   value="{{ $seo->seo_description['ru'] }}"
                                                   name="seo_description_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇺🇦 Seo Description
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $seo->seo_description['uk'] }}"
                                                   name="seo_description_uk" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Seo Text*
                                            </label>
                                            <textarea class="form-control" id="title_uk"
                                                      name="seo_text_ru" type="text">{!! $seo->seo_text['ru'] !!}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇺🇦 Seo Text
                                            </label>
                                            <textarea class="form-control" id="title_uk"
                                                      name="seo_text_uk" type="text">{!! $seo->seo_text['uk'] !!}</textarea>
                                        </div>

                                        <div>
                                            <br>
                                            <button class="btn btn-success" type="submit">Зберегти</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
