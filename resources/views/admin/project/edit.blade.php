@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">
    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="title_uz">Заголовок [Uzbek]</label>
                            <input type="text" id="title_uz" value="{{ $project->title_uz }}" class="form-control" name="title_uz">
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
                            <input type="text" id="title_ru" value="{{ $project->title_ru }}" class="form-control" name="title_ru">
                            @if($errors->has('title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_ru') }}
                            </div>
                            @endif
                        </div>
                     </div><br>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="sub_content_uz">Sub Content UZ</label>
                            <textarea name="sub_content_uz" class="form-control" id="sub_content_uz" cols="30" rows="5">{{ $project->sub_content_uz }}</textarea>
                            @if($errors->has('sub_content_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('sub_content_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="sub_content_ru">Sub Content RU</label>
                            <textarea name="sub_content_ru" class="form-control" id="sub_content_ru" cols="30" rows="5">{{ $project->sub_content_ru }}</textarea>
                            @if($errors->has('sub_content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('sub_content_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>


                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-3">
                            <label for="statistic_uz">Статистика [Uzbek]</label>
                            <textarea name="statistic_uz" class="my-editor" id="statistic_uz" cols="30" rows="10">{{ $project->statistic_uz }}</textarea>
                            @if($errors->has('statistic_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('statistic_uz') }}
                            </div>
                            @endif
                        </div>
                
                        <div class="col-md-3">
                            <label for="statistic_ru">Статистика [Russian]</label>
                            <textarea name="statistic_ru" class="my-editor" id="statistic_ru" cols="30" rows="10">{{ $project->statistic_ru }}</textarea>
                            @if($errors->has('statistic_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('statistic_ru') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-6">

                    <div class="dropdown-divider" style="margin-top: 40px"></div>
                     <div class="row">
                        <div class="col-md-6">
                            <label for="gallery">Галерея</label>
                            <input type="file" id="gallery" class="form-control">
                            <button type="button" id="save_gallery" class="btn btn-primary btn-block" style="margin-top: 20px">Сохранить изображении</button>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Изображения</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="galleries_data"></tbody>
                            </table>
                        </div>
                    </div>
                     </div>
                    </div>

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="content_uz">Контент [Uzbek]</label>
                            <textarea name="content_uz" class="my-editor" id="content_uz" cols="30" rows="10">{{ $project->content_uz }}</textarea>
                            @if($errors->has('content_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_uz') }}
                            </div>
                            @endif
                        </div>
                    
                        <div class="col-md-6">
                            <label for="content_ru">Контент [Russian]</label>
                            <textarea name="content_ru" class="my-editor" id="content_ru" cols="30" rows="10">{{ $project->content_ru }}</textarea>
                            @if($errors->has('content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('content_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    

                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label for="image">Изображения</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if($errors->first('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                    <img src="{{ asset($project->image) }}" style="margin-top: 15px;" width="150" height="150">

                    <hr>

                    <input type="hidden" name="galleries" id="galleries">
                    <button class="btn btn-success btn-block">Обновить</button>
                </div>
            </div>
        </div>
    </div>
    </form>

</div>
</div>
@endsection

@section('custom_js')
   <script> 

    // Gallery save, delete
    $(document).ready(function() {

        var galleryData = {!! $project->gallaries->toJson(JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT) !!};
            renderGallery()

        $('#save_gallery').on('click', function() {
            var image = $('#gallery').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var formdata = new FormData();
            formdata.append('file', $("#gallery")[0].files[0]);

            $.ajax({
                type: 'POST',
                url: '{{ route('file_uploadproject') }}',
                cache : false,
                contentType: false,
                processData: false,
                data: formdata,
                beforeSend: function () {
                    $(this).val("<i class='fa fa-spinner fa-pulse'></i>");
                },
                success: function (data) {
                    galleryData.push({'id' : Math.round((new Date()).getTime() / 1000), 'image' : data});
                    renderGallery();
                    $(this).val("Сохранить изображении")
                },
                error: function (err) {
                    console.error(err)
                    $(this).val("Сохранить изображении")
                }
            });
        })

        function renderGallery() {
            $("#galleries_data").html('')
            for(var gallery of galleryData) {
                $("#galleries_data").append("" +
                    "<tr>" +
                    "<td><img src='" + gallery.image + " ' width='50' height='50'/></td>" +
                    "<td>" +
                    "<button type='button' data-path=\""+ gallery.image +"\" data-id=\""+ gallery.id +"\" class='btn btn danger btn-icon remove_image'>" +
                    "<i class='fa fa-trash text-dark'></i>" +
                    "</button>" +
                    "</td>" +
                    "</tr>");
            }
            $("#galleries").val('');
            $('#galleries').val(JSON.stringify(galleryData))
            $('#gallery').attr('type', 'text');
            $('#gallery').attr('type', 'file')
        }

        $(document).on('click', "button.remove_image", function () {
            let dataPath = $(this).data('path');
            let dataId = $(this).data('id');

            console.log(dataPath)

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let formdata = new FormData();
            formdata.append('file_path', dataPath);

            $.ajax({
                type: 'POST',
                url: '{{ route('file_deleteproject') }}',
                cache : false,
                contentType: false,
                processData: false,
                data: formdata,
                success: function (data) {
                    galleryData = galleryData.filter(function (query) {
                        return query.id !== dataId
                    });
                    renderGallery()
                },
                error: function (err) {
                    console.error(err)
                }
            });
        });
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.11/tinymce.min.js"></script>
<script>
    var editor_config = {
        path_absolute : "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };

    tinymce.init(editor_config);
</script>

@endsection