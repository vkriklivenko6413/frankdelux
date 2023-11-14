@extends('admin.layouts.layout')

@section('title')
    {{ Str::ucfirst(trans('messages.general.defenders')) }}
@endsection

@section('content')

    @include('admin.layouts.alerts._success')

    <div class="card mb-3">
        <div class="card-body">
            <div class="row flex-between-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">
                        Карточка товара
                    </h5>
                </div>
                <div class="col-auto">
                    <a href="{{ route('admin.card.create') }}" class="btn btn-success me-1 mb-1">
                        Создать
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0">Список</h5>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            @if ($cards->isNotEmpty())

                <table class="table table-bordered table-striped fs--1 mb-0">
{{--                    <table class="table data-table table-bordered table-striped fs--1 mb-0">--}}

                    <thead class="bg-200 text-900">
                    <tr>
                        <th class="sort" data-sort="id">{{ __('ID') }}</th>
                        <th class="sort" data-sort="title">
                            Название
                        </th>

                        <th class="sort">
                            #
                        </th>
                        <th class="sort">
                            #
                        </th>

                    </tr>
                    </thead>
                    <tbody class="list" style="vertical-align: middle">
                    @foreach($cards as $card)
                        <tr>
                            <td class="id">{{ $card->id }}</td>
                            <td class="title">{{ $card->title['uk'] }}</td>

                            <td>

                                <a href="{{ route('admin.card.edit', $card->id) }}" class="btn p-0 info-btn"
                                   style="margin-right: 5px"
                                   type="submit">

                                    <span class="far fa-edit"></span>
                                </a>

                                <a href="{{ route('admin.card.copy', $card->id) }}" class="btn p-0 danger-btn"
                                   style="margin-right: 5px"
                                   type="submit">

                                    <span class="far fa-copy"></span>
                                </a>

                                <a href="{{ route('admin.card.delete', $card->id) }}" class="btn p-0 delete-btn"
                                   type="submit">
                                    <svg class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true"
                                         focusable="false" data-prefix="far" data-icon="trash-alt" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                              d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path>
                                    </svg><!-- <span class="far fa-trash-alt"></span> Font Awesome fontawesome.com -->
                                </a>

                            </td>
                            <td>
                                <a href="{{ route('admin.card.moveUp', $card->id) }}" class="btn p-0 info-btn" type="submit">
                                    ️⬆️
                                </a>
                                <a href="{{ route('admin.card.moveDown', $card->id) }}" class="btn p-0 info-btn" type="submit">
                                    ⬇️
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $('.toggleStatus').click(function (e) {
            if ($(this).hasClass('pending'))
                return false;

            $(this).addClass('pending');

            let id = $(this).data('id');
            let elem = $(this);

            $.ajax({
                url: '{{ route('admin.card.active','') }}/' + id,
                type: 'get',
                success: function (response) {
                    elem.removeClass('pending');
                    const status = response['active'];

                    if (status) {
                        console.info('All is okay:', response);
                    } else {

                    }
                }
            });
        });
    </script>

    <script>
        $('.toggleStatusDisable').click(function (e) {
            if ($(this).hasClass('pending'))
                return false;

            $(this).addClass('pending');

            let id = $(this).data('id');
            let elem = $(this);

            $.ajax({
                url: '{{ route('admin.card.disable','') }}/' + id,
                type: 'get',
                success: function (response) {
                    elem.removeClass('pending');
                    const status = response['active'];

                    if (status) {
                        console.info('All is okay:', response);
                    } else {

                    }
                }
            });
        });
    </script>
@endsection
