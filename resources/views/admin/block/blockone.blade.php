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
                                aria-controls="nav-questionnaire" aria-selected="true">Блок 1
                        </button>
                    </div>
                </div>
                <div class="card-body bg-light">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-questionnaire" role="tabpanel">
                            <form action="{{ route('admin.block.update.blockOne', $blockOne->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="tab-pane preview-tab-pane active" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Название*
                                            </label>
                                            <input class="form-control" id="title" value="{{ $blockOne->title['ru'] }}"
                                                   name="title_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Название
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $blockOne->title['ro'] }}"
                                                   name="title_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Описание
                                            </label>
                                            <input class="form-control" id="title"
                                                   value="{{ $blockOne->description['ru'] }}"
                                                   name="description_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Описание
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $blockOne->description['ro'] }}"
                                                   name="description_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Кнопка
                                            </label>
                                            <textarea class="form-control" id="message2"
                                                      name="button_ru"
                                                      type="text"> {{ $blockOne->button['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Кнопка
                                            </label>
                                            <textarea class="form-control" id="message1"
                                                      name="button_ro"
                                                      type="text"> {{ $blockOne->button['ro'] }}</textarea>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="title_uk">
                                                Фото главное
                                            </label>
                                            <input class="form-control" id="title_uk" value="{{ old('title_uk') }}"
                                                   name="photo" type="file">

                                            <img
                                                src="{{ asset('storage/block/') }}/{{$blockOne->photo}}"
                                                alt=""
                                                style="width: 150px"
                                            >
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
            </div>
        </div>
    </div>

    <script>
        let enter = document.querySelector('.key')
        enter.addEventListener('click', handleClick)

        function handleClick(event) {
            area.value =
                area.value.substring(0, area.selectionStart) +
                "\n" +
                area.value.substring(area.selectionEnd, area.value.length);
        }
    </script>

@endsection
