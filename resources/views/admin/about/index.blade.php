<?

use App\Models\CategoryProduct;
?>
@extends('layouts.admin')

@section('admin')

<div id="add-book">

    <div class="row">
        <div class="col-12 shadow py-4">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session()->has('sucess'))
            <div class="alert alert-success">
                {{ session()->get('sucess') }}
            </div>
            @endif
            @if (session()->has('add_erorr'))
            <div class="alert alert-danger">
                {{ session()->get('add_erorr') }}
            </div>
            @endif
            <div id="header-book" CLASS="text-center py-2">
                <h4 class="mb-0">SỬA GIỚI THIỆU</h4>
            </div>
            <form class="row g-3" action="{{route('about.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Tiếng Việt
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div id="content-book" class="mt-3">

                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Mô tả giới thiệu</label>
                                        <textarea name="desc" id="editor4" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{!!$about->desc!!}</textarea>
                                    </div>


                                    <div class="input-group mb-3 mt-3">
                                        <label class="input-group-text" for="inputGroupFile01">Ảnh đại diện</label>
                                        <input type="file" class="form-control" id="inputGroupFile01" name="file">

                                    </div>
                                    <img class="my-3" width="80px" src="{{asset($about->img)}}" alt="">
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">chi tiết giới thiệu</label>
                                        <textarea name="detail" id="editor2" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{!!$about->detail!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Tiếng Anh
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div id="content-book" class="mt-3">
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Mô tả giới thiệu</label>
                                        <textarea name="desc_en" id="editor1" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{!!$about->desc_en!!}</textarea>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">chi tiết giới thiệu</label>
                                        <textarea name="detail_en" id="editor3" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{!!$about->detail_en!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Tiếng Nhật
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <div id="content-book" class="mt-3">
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Mô tả giới thiệu</label>
                                        <textarea name="desc_ja" id="editor5" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{!!$about->desc_ja!!}</textarea>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">chi tiết giới thiệu</label>
                                        <textarea name="detail_ja" id="editor6" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{!!$about->detail_ja!!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5">Cập nhật</button>
                    </div>
            </form>
        </div>
    </div>

</div>

</div>
<script>
    CKEDITOR.replace('editor2', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
    CKEDITOR.replace('editor4', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
     CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
    CKEDITOR.replace('editor3', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
     CKEDITOR.replace('editor5', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
     CKEDITOR.replace('editor6', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
</script>
@endsection