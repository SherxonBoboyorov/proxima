@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Показывать</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('feedback.update', $feedback->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <label for="name">ФИО</label>
                                <input type="text" id="name" value="{{ $feedback->name }}" class="form-control" name="name">
                            </div>
                        </div><br><br>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="phone">Телефонный номер</label>
                                <input type="text" id="phone" value="{{ $feedback->phone }}" class="form-control" name="phone">
                            </div>
                        </div><br><br>

                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection 
