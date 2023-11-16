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
                            <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="row">


                                        <div class="col-md-3">
                                            <label class="form-label" for="title_uk">
                                                Instagram
                                            </label>
                                            <input class="form-control" id="title_uk" value="{{ $setting->instagram }}"
                                                   name="instagram" type="text">
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label" for="title_uk">
                                                Facebook
                                            </label>
                                            <input class="form-control" id="title_uk" value="{{ $setting->viber }}"
                                                   name="viber" type="text">
                                        </div>


                                        <div class="col-md-3">
                                            <label class="form-label" for="title_uk">
                                                Phone
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                   value="{{ $setting->phone }}"
                                                   name="phone" type="text">
                                        </div>

                                        <div class="col-md-3">
                                            <label class="form-label" for="title_ru">
                                                Email
                                            </label>
                                            <input class="form-control" id="title_uk"
                                                      name="email" type="text" value="{{ $setting->email }}">
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
