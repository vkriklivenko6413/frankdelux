@extends('admin.layouts.layout')



@section('content')
    @include('admin.layouts.alerts._success')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Создание карточки</h5>
                </div>
            </div>
        </div>

        <div class="card-body bg-light">
            <div class="tab-content">
                <form action="{{ route('admin.review.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-pane preview-tab-pane active" role="tabpanel">
                        <div class="row">

                            <div class="col-md-12">
                                <label class="form-label" for="title_ru">
                                    🇷🇺 Рейтинг*
                                </label>
                                <select class="form-control" id="title"
                                        name="rating" type="text">
                                    <option value="5">5</option>
                                    <option value="4">4</option>
                                    <option value="3">3</option>
                                    <option value="2">2</option>
                                    <option value="1">1</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_ru">
                                    🇷🇺 Название*
                                </label>
                                <input class="form-control" id="title" value="{{ old('title_ru') }}"
                                       name="title_ru" type="text">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_uk">
                                    🇲🇩 Название
                                </label>
                                <input class="form-control" id="title_uk" value="{{ old('title_ro') }}"
                                       name="title_ro" type="text">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_ru">
                                    🇷🇺 Описание*
                                </label>
                                <textarea class="form-control" id="message2"
                                          name="description_ru" type="text"> {{ old('description_ru') }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_uk">
                                    🇲🇩 Описание
                                </label>
                                <textarea class="form-control" id="message1"
                                          name="description_ro" type="text"> {{ old('description_ro') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="title_uk">
                                    Аватар
                                </label>
                                <input class="form-control" id="title_uk" value="{{ old('title_uk') }}"
                                       name="avatar" type="file">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="title_uk">
                                    Фото
                                </label>
                                <input class="form-control" id="title_uk" multiple value="{{ old('photos') }}"
                                       name="photo" type="file">
                            </div>

                            <div class="row mt-4">
                                <div class="navigation-buttons">
                                    <a class="btn btn-danger me-1 mb-1" href="#">
                                        {{ Str::ucfirst(trans('messages.general.back')) }}
                                    </a>
                                    <button class="btn btn-success me-1 mb-1">
                                        Создать
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
