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
                                aria-controls="nav-questionnaire" aria-selected="true">Настройки
                        </button>
                    </div>
                </div>
                <div class="card-body bg-light">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="nav-questionnaire" role="tabpanel">

                            <form action="{{ route('admin.menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-pane preview-tab-pane active" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Меню 1*
                                            </label>
                                            <input class="form-control" id="title" value="{{ $menu->menu_1['ru'] }}"
                                                   name="menu_1_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Меню 1
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $menu->menu_1['ro'] }}"
                                                   name="menu_1_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Меню 2
                                            </label>
                                            <input class="form-control" id="title"
                                                   value="{{ $menu->menu_2['ru'] }}"
                                                   name="menu_2_ru" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Меню 2
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $menu->menu_2['ro'] }}"
                                                   name="menu_2_ro" type="text">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Меню 3
                                            </label>
                                            <textarea class="form-control" id="message2"
                                                      name="menu_3_ru"
                                                      type="text">{{ $menu->menu_3['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Меню 3
                                            </label>
                                            <textarea class="form-control" id="message1"
                                                      name="menu_3_ro"
                                                      type="text">{{ $menu->menu_3['ro'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Меню 4
                                            </label>
                                            <textarea class="form-control" id="message2"
                                                      name="menu_4_ru"
                                                      type="text">{{ $menu->menu_4['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Меню 4
                                            </label>
                                            <textarea class="form-control" id="message1"
                                                      name="menu_4_ro"
                                                      type="text">{{ $menu->menu_4['ro'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Меню 5
                                            </label>
                                            <textarea class="form-control" id="message2"
                                                      name="menu_5_ru"
                                                      type="text">{{ $menu->menu_5['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Меню 5
                                            </label>
                                            <textarea class="form-control" id="message1"
                                                      name="menu_5_ro"
                                                      type="text">{{ $menu->menu_5['ro'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_ru">
                                                🇷🇺 Меню 6
                                            </label>
                                            <textarea class="form-control" id="message2"
                                                      name="menu_6_ru"
                                                      type="text">{{ $menu->menu_6['ru'] }}</textarea>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="title_uk">
                                                🇲🇩 Меню 6
                                            </label>
                                            <textarea class="form-control" id="message1"
                                                      name="menu_6_ro"
                                                      type="text">{{ $menu->menu_6['ro'] }}</textarea>
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
