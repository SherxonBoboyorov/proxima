@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Все Офис</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <a href="{{ route('office.create')}}" class="btn bg-success mb-2">Добавить Офис +</a>

            <div class="card">
                <div class="card-body">

                    @if(session('message'))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ session('message') }}
                        </div>

                    @endif

                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Заголовок [Uzbek]</th>
                            <th>Заголовок [Russian]</th>
                            <th colspan="2" style="width: 2%; border-radius: 5px">Действий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($offices as $office)
                            <tr>
                                <td>{{ $office->id }}</td>
                                <td>{{ $office->title_ru }}</td>
                                <td>{{ $office->title_uz }}</td>
                                <td>
                                    <a href="{{ route('office.edit', $office->id) }}" class="btn btn-primary btn-icon">
                                        <i class="fa fa-edit">Изменить</i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('office.destroy', $office->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon">
                                            <i class="fa fa-trash">Удалить</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
@endsection
