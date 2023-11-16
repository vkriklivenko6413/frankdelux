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
                <form action="{{ route('admin.card.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-pane preview-tab-pane active" role="tabpanel">
                        <div class="row">
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
                                <input class="form-control" id="title_uk" value="{{ old('title_uk') }}"
                                       name="title_uk" type="text">
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
                                          name="description_uk" type="text"> {{ old('description_uk') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="title_uk">
                                    Фото главное
                                </label>
                                <input class="form-control" id="title_uk" value="{{ old('title_uk') }}"
                                       name="preview_photo" type="file">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="title_uk">
                                    Фото галерея
                                </label>
                                <input class="form-control" id="title_uk" multiple value="{{ old('photos') }}"
                                       name="photos[]" type="file">
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

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message1', {});

        CKEDITOR.replace('message2', {});
    </script>

@endsection
