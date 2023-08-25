@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Изменить Офис</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <form action="{{ route('office.update', $office->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title_uz">Заголовок [Uzbek]</label>
                                <input type="text" id="title_uz" value="{{ $office->title_uz }}" class="form-control" name="title_uz">
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
                                <input type="text" id="title_ru" value="{{ $office->title_ru }}" class="form-control" name="title_ru">
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


                        <div class="row" style="margin-top: 10px">
                            <div class="col-md-6">
                                <label for="phone_number">Phone </label>
                                <input type="text" id="phone_number" value="{{ $office->phone_number }}"  class="form-control" name="phone_number">
                                @if($errors->has('phone_number'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('phone_number') }}

                                    </div>
                                @endif
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="text" id="email" value="{{ $office->email }}" class="form-control" name="email">
                                @if($errors->has('email'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                        </div>



                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Обновить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection

