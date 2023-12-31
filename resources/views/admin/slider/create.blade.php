@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Добавить Слайдер</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('slider.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title_uz">Заголовок [Uzbek]</label>
                                <input type="text" id="title_uz" class="form-control" name="title_uz">
                                @if($errors->has('title_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_uz') }}

                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="title_ru">Заголовок [Russian]</label>
                                <input type="text" id="title_ru" class="form-control" name="title_ru">
                                @if($errors->has('title_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_ru') }}
                                    </div>
                                @endif
                            </div>

                        </div><br><samp></samp>


                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_uz">Контент [Uzbek]</label>
                                <input type="text" id="description_uz" class="form-control" name="description_uz">
                                @if($errors->has('description_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_uz') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_ru">Контент [Russian]</label>
                                <input type="text" id="description_ru" class="form-control" name="description_ru">
                                @if($errors->has('description_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_ru') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="link">Link</label>
                            <input type="text" id="link" class="form-control" name="link">
                            @if($errors->has('link'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{ $errors->first('link') }}
                                </div>
                            @endif
                        </div>
                    </div>


                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="image">Изображение</label>
                                <input type="file" name="image" class="form-control-file">
                                @if($errors->has('image'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Сохранить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

