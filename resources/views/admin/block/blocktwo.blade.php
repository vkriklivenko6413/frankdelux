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
                            <form action="{{ route('admin.block.update.blockTwo', $blockTwo->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="tab-pane preview-tab-pane active" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Название блока
                                            </label>
                                            <input class="form-control" id="title" value="{{ $blockTwo->title['ru'] }}"
                                                   name="title_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Название блока
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $blockTwo->title['ro'] }}"
                                                   name="title_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Заголовок 1
                                            </label>
                                            <input class="form-control" id="title"
                                                   value="{{ $blockTwo->preview_title_1['ru'] }}"
                                                   name="preview_title_1_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Заголовок 1
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $blockTwo->preview_title_1['ro'] }}"
                                                   name="preview_title_1_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Текст 1
                                            </label>
                                            <textarea class="form-control" id="title"
                                                      name="description_1_ru"
                                                      type="text">{{ $blockTwo->description_1['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇲🇩 Текст 1
                                            </label>
                                            <textarea class="form-control" id="title"
                                                      name="description_1_ro"
                                                      type="text">{{ $blockTwo->description_1['ro'] }}</textarea>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Заголовок 2
                                            </label>
                                            <input class="form-control" id="title"
                                                   value="{{ $blockTwo->preview_title_2['ru'] }}"
                                                   name="preview_title_2_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Заголовок 2
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $blockTwo->preview_title_2['ro'] }}"
                                                   name="preview_title_2_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Текст 2
                                            </label>
                                            <textarea class="form-control" id="title"
                                                      name="description_2_ru"
                                                      type="text">{{ $blockTwo->description_2['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Текст 2
                                            </label>
                                            <textarea class="form-control" id="title_uk"
                                                      name="description_2_ro"
                                                      type="text">{{ $blockTwo->description_2['ro'] }}</textarea>
                                        </div>


                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Заголовок 3
                                            </label>
                                            <input class="form-control" id="title"
                                                   value="{{ $blockTwo->preview_title_3['ru'] }}"
                                                   name="preview_title_3_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Заголовок 3
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $blockTwo->preview_title_3['ro'] }}"
                                                   name="preview_title_3_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Текст 3
                                            </label>
                                            <textarea class="form-control" id="title"
                                                      name="description_3_ru"
                                                      type="text">{{ $blockTwo->description_3['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Текст 3
                                            </label>
                                            <textarea class="form-control" id="title_uk"
                                                      name="description_3_ro"
                                                      type="text">{{ $blockTwo->description_3['ro'] }}</textarea>
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
