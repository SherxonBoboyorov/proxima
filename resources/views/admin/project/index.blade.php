@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Все Проект</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

             <a href="{{ route('project.create')}}" class="btn bg-success mb-2">Добавить Проект +</a>

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
                            <th>Изображение</th>
                            <th>Заголовок [Uzbek]</th>
                            <th>Заголовок [Russian]</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>
                                <img src="{{ asset($project->image) }}" alt="" width="35" height="35">
                            </td>
                            <td>{{ $project->title_ru }}</td>
                            <td>{{ $project->title_uz }}</td>
                            <td>
                                <a href="{{ route('project.edit', $project->id) }}" class="btn btn-primary btn-icon">
                                    <i class="fa fa-edit">Изменить</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('project.destroy', $project->id) }}" method="POST">
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
                {!! $projects->links() !!}
            </div>
        </div>
    </div>
</div>
@endsection
