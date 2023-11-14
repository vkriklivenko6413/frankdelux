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
                                    🇺🇦 Название
                                </label>
                                <input class="form-control" id="title_uk" value="{{ old('title_uk') }}"
                                       name="title_uk" type="text">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_ru">
                                    🇷🇺 Описание*
                                </label>
                                <textarea class="form-control" id="title_uk"
                                          name="description_ru" type="text"> {{ old('description_ru') }}</textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="title_uk">
                                    🇺🇦 Описание
                                </label>
                                <textarea class="form-control" id="title_uk"
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

    <script>
        let fieldGroupCount = 5; // Начальное количество групп полей

        // Создайте шаблон группы полей, который вы хотите использовать
        const fieldGroupTemplate = `
    <div class="field-group" id="field-group-{count}">
        <label class="form-label" for="card_description_ru_{count}">🇷🇺 Название:</label>
        <input class="form-control" id="card_description_ru_{count}" name="card_description_title_ru[]" type="text">


        <label class="form-label" for="card_description_uk_{count}">🇺🇦 Название:</label>
        <input class="form-control" id="card_description_uk_{count}" name="card_description_title_uk[]" type="text">

        <label class="form-label" for="size_{count}">Размеры (мм, см, кг)</label>
        <input class="form-control" id="size_{count}" name="size[]" type="text">

        <label class="form-label" for="card_description_title_uk_{count}">🇷🇺 Описание размеров</label>
        <input class="form-control" id="card_description_title_uk_{count}" name="card_description_ru[]" type="text">

        <label class="form-label" for="card_description_title_ru_{count}">🇺🇦 Описание размеров</label>
        <input class="form-control" id="card_description_title_ru_{count}" name="card_description_uk[]" type="text">
        <br>
        <button type="button" class="remove-field-group btn btn-danger" data-group-id="{count}">Удалить группу</button>
        <hr> <!-- Разделитель между группами полей -->
    </div>
`;

        document.getElementById('add-field-group').addEventListener('click', function () {
            fieldGroupCount++;

            // Создайте новую группу полей на основе шаблона
            const newFieldGroup = document.createElement('div');
            newFieldGroup.className = 'row'; // Это для Bootstrap, чтобы соблюсти структуру столбцов
            newFieldGroup.innerHTML = fieldGroupTemplate.replace(/{count}/g, fieldGroupCount);

            // Найти контейнер для добавления новой группы полей
            const childFieldsContainer = document.getElementById('child-fields');

            // Добавьте новую группу полей в конец контейнера
            childFieldsContainer.appendChild(newFieldGroup);

            // Обработка события для удаления группы полей
            const removeButtons = document.querySelectorAll('.remove-field-group');
            removeButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const groupId = this.getAttribute('data-group-id');
                    const groupToRemove = document.getElementById(`field-group-${groupId}`);
                    groupToRemove.parentNode.removeChild(groupToRemove);
                });
            });

            // Переместите кнопку "Добавить группу полей" под новую группу
            childFieldsContainer.appendChild(document.getElementById('add-field-group'));
        });


    </script>
@endsection
