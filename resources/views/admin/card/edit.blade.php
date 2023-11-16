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
                @if(! empty($errors->all()))
                    <ul style="color: red">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form action="{{ route('admin.card.change', $card->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-pane preview-tab-pane active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="title_ru">
                                    🇷🇺 Название*
                                </label>
                                <input class="form-control" id="title" value="{{ $card->title['ru'] }}"
                                       name="title[ru]" type="text">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_uk">
                                    🇲🇩 Название
                                </label>
                                <input class="form-control" id="title_uk" value="{{ $card->title['ro'] }}"
                                       name="title[ro]" type="text">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_ru">
                                    🇷🇺 Описание*
                                </label>
                                <textarea class="form-control" id="message2"
                                          name="description[ru]" type="text">{!! $card->description['ru'] !!}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_uk">
                                    🇲🇩 Описание
                                </label>
                                <textarea class="form-control" id="message1"
                                          name="description[ro]" type="text"> {!! $card->description['ro'] !!}</textarea>
                            </div>


                            <div class="mb-3">
                                <label class="form-label" for="title_uk">
                                    Фото главное
                                </label>

                                <input class="form-control" id="title_uk" value="{{ old('title_uk') }}"
                                       name="preview_photo" type="file">

                                <img
                                    src="{{ asset('storage/card/') }}/{{$card->preview_photo}}"
                                    alt=""
                                    style="width: 150px"
                                >
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="title_uk">
                                    Фото галерея
                                </label>


                                <input class="form-control" id="title_uk" multiple value="{{ old('photos') }}"
                                       name="photos[]" type="file">
                                <br><br>

                                <div
                                    style="display: grid; grid-template-columns: repeat(5, minmax(0, 1fr)); grid-gap: 20px"
                                >
                                    @foreach($card->galleries as $photo)
                                        <div>
                                            <img src="{{ asset('storage/card/') }}/{{$photo->photo}}" alt=""
                                                 style="width: 150px">

                                            <button
                                                onclick="removeImage(this)"
                                                data-name="{{ $photo->photo }}"
                                                class="btn btn-danger"
                                                style="margin-top: 10px"
                                            >
                                                Удалить
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div id="remove-images">

                            </div>

                            <div class="row mt-4">
                                <div class="navigation-buttons">
                                    <button class="btn btn-success me-1 mb-1">
                                        Изменить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>




        const removeGroup = (element) => {
            const groupId = element.getAttribute('data-group-id');
            const groupToRemove = document.getElementById(`field-group-${groupId}`);
            groupToRemove.parentNode.removeChild(groupToRemove);
        }

        const removeImage = (element) => {
            const fileName = element.dataset.name;

            element.parentNode.remove();

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'remove_images[]';
            input.value = fileName;

            document
                .getElementById('remove-images')
                .appendChild(input)
        }
    </script>

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('message1', {});

        CKEDITOR.replace('message2', {});
    </script>
@endsection
