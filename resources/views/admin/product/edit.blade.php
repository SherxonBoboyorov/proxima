@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper ">

    <div class="container-fluid">
    <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title_uz">Имя продукта [Uzbek]</label>
                            <input type="text" name="title_uz" value="{{ $product->title_uz }}" id="title_uz" class="form-control">
                            @if($errors->first('title_uz'))
                                <span class="text-danger">{{ $errors->first('title_uz') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="title_ru">Имя продукта [Russian]</label>
                            <input type="text" name="title_ru" value="{{ $product->title_ru }}" id="title_ru" class="form-control">
                            @if($errors->first('title_ru'))
                                <span class="text-danger">{{ $errors->first('title_ru') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="sub_content_uz">Маленькое название [Uzbek]</label>
                            <textarea name="sub_content_uz" class="form-control" id="sub_content_uz" cols="10" rows="4">{{ $product->sub_content_uz }}</textarea>
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
                            <label for="sub_content_ru">Ммаленькое название [Russian]</label>
                            <textarea name="sub_content_ru" class="form-control" id="sub_content_ru" cols="10" rows="4">{{ $product->sub_content_ru }}</textarea>
                            @if($errors->has('sub_content_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('sub_content_ru') }}
                            </div>
                            @endif
                        </div>
                    </div><br>


                    <hr>
                    <div class="dropdown-divider"></div>
                    <div class="row" style="margin-top: 15px">

                        <div class="col-md-12">

                            <hr>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills nav-justified" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab">Oписание</a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link" data-toggle="tab" href="#settings-1" role="tab">Технические характеристики</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="home-1" role="tabpanel">
                                    <div class="row" style="margin-top: 15px">
                                        <div class="col-md-6">
                                            <label for="description_uz">Oписание [Uzbek]</label>
                                            <textarea name="description_uz" class="my-editor" id="description_uz" cols="10" rows="5" style="height: 150px;">{{ $product->description_uz }}</textarea>
                                            @if($errors->has('description_uz'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                {{ $errors->first('description_uz') }}
                                            </div>
                                            @endif
                                        </div>
                                
                                        <div class="col-md-6">
                                            <label for="description_ru">Oписание [Russian]</label>
                                            <textarea name="description_ru" class="my-editor" id="description_ru" cols="10" rows="5" style="height: 150px;">{{ $product->description_ru }}</textarea>
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
                                </div>
                            
                                <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                    <div class="row" style="margin-top: 15px">
                                        <div class="col-md-6">
                                            <label for="specifications_uz">Технические характеристики [Uzbek]</label>
                                            <textarea name="specifications_uz" class="my-editor" id="specifications_uz" cols="10" rows="5" style="height: 150px;">{{ $product->specifications_uz }}</textarea>
                                            @if($errors->has('specifications_uz'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                {{ $errors->first('specifications_uz') }}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="specifications_ru">Технические характеристики [Russian]</label>
                                            <textarea name="specifications_ru" class="my-editor" id="specifications_ru" cols="10" rows="5" style="height: 150px;">{{ $product->specifications_ru }}</textarea>
                                            @if($errors->has('specifications_ru'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                {{ $errors->first('specifications_ru') }}
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><br>
                    <hr>


                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_attribute">Атрибут</label>
                            <input type="text" autocomplete="off" id="input_attribute" class="form-control">

                            <label for="input_value_attribute" class="mt-3">Значения атрибута</label>
                            <input type="text" autocomplete="off" id="input_value_attribute" class="form-control mb-4">

                            <button type="button" id="save_attribute" class="btn btn-primary btn-block">Сохранить атрибут</button>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Атрибут</th>
                                        <th>Значения атрибута</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="attribute_data"></tbody>
                            </table>
                        </div>
                    </div>
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
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <label for="image">Изображения</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if($errors->first('image'))
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                    <img src="{{ asset($product->image) }}" style="margin-top: 15px;" width="150" height="150">

                    <hr>

                    <div class="row" style="margin-top: 15px">
                    <div class="col-md-6">
                        <label for="price_uz">Деньги [Uzbek]</label>
                        <input type="text" name="price_uz" value="{{ $product->price_uz }}" id="price_uz" class="form-control">
                        @if($errors->first('price_uz'))
                            <span class="text-danger">{{ $errors->first('price_uz') }}</span>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <label for="price_ru">Деньги [Uzbek]</label>
                        <input type="text" name="price_ru" value="{{ $product->price_ru }}" id="price_ru" class="form-control">
                        @if($errors->first('price_ru'))
                            <span class="text-danger">{{ $errors->first('price_ru') }}</span>
                        @endif
                    </div>
                    </div><br>

                    <hr>

                    <div class="row" style="margin-top: 6px">
                        <div class="col-md-6">
                         <label for="meta_title_uz">Meta Title UZ</label>
                          <textarea name="meta_title_uz" id="meta_title_uz" class="form-control" cols="30" rows="5">{{ $product->meta_title_uz }}</textarea>
                       </div> 
                    <br> 
                     <div class="col-md-6">
                       <label for="meta_title_ru">Meta Title RU</label>
                       <textarea name="meta_title_ru" id="meta_title_ru" class="form-control" cols="30" rows="5">{{ $product->meta_title_ru }}</textarea>
                    </div>
                </div>

                    <div class="row" style="margin-top: 6px">
                        <div class="col-md-6">
                    <label for="meta_description_uz">Meta Description UZ</label>
                    <textarea name="meta_description_uz" id="meta_description_uz" class="form-control" cols="30" rows="5">{{ $product->meta_description_uz }}</textarea>
                    </div>
                    <br>
                    <div class="col-md-6">

                    <label for="meta_description_ru">Meta Description RU</label>
                    <textarea name="meta_description_ru" id="meta_description_ru" class="form-control" cols="30" rows="5">{{ $product->meta_description_ru }}</textarea>
                </div>
            </div>

                    <hr>

                    <input type="hidden" name="attributes" id="attributes">
                    <input type="hidden" name="galleries" id="galleries">
                    <button class="btn btn-success btn-block">Сохранить</button>
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

    // Attribute save, delete
    $(document).ready(function() {

        var allAttributes = {!! $product->characters->toJson(JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT) !!};
        renderAttributes()

        $('#save_attribute').on('click', function() {
            var attribute = $('#input_attribute').val();
            var val_attribute = $('#input_value_attribute').val();
            allAttributes.push({'id' : Math.round((new Date()).getTime() / 1000), 'key' : attribute, 'value' : val_attribute})
            renderAttributes()
        })

        function renderAttributes() {
            $('#input_attribute').val('')
            $('#input_value_attribute').val('')
            $("#attribute_data").html('')
            for(var attr of allAttributes) {
                $("#attribute_data").append("" +
                    "<tr>" +
                    "<td>" + attr.key + "</td>" +
                    "<td>" + attr.value + "</td>" +
                    "<td>" +
                    "<button type='button' data-id=\""+ attr.id +"\" class='btn btn_danger btn-icon remove_attribute'>" +
                    "<i class='fa fa-trash text-dark'></i>" +
                    "</button>" +
                    "</td>" +
                    "</tr>");
            }
            $('#attributes').val();
            $('#attributes').val(JSON.stringify(allAttributes));
        }

        $(document).on('click', "button.remove_attribute", function () {
            let dataId = $(this).data('id');
            allAttributes = allAttributes.filter(function (query) {
                return query.id !== dataId
            });
            renderAttributes()
        });
    });

    // Gallery save, delete
    $(document).ready(function() {

        var galleryData = {!! $product->gallaries->toJson(JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT) !!};
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
                url: '{{ route('file_upload') }}',
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
                    "<button type='button' data-path=\""+ gallery.image +"\" data-id=\""+ gallery.id +"\" class='btn btn_danger btn-icon remove_image'>" +
                    "<i class='fa fa-trash'></i>" +
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
                url: '{{ route('file_delete') }}',
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
