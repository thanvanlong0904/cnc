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
            @if (session()->has('edit_banner'))
            <div class="alert alert-success">
                {{ session()->get('edit_banner') }}
            </div>
            @endif
            @if (session()->has('add_erorr'))
            <div class="alert alert-danger">
                {{ session()->get('add_erorr') }}
            </div>
            @endif
            <div id="header-book" CLASS="text-center py-2">
                <h4 class="mb-0">SỬA BANNER BANNER</h4>
            </div>
            <form class="row g-3" action="{{route('banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
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

                                    <div class="col-md-12">
                                        <label for="inputEmail4" class="form-label">Tên Banner</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{$banner->name}}" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="inputCity" name="desc" value="{{$banner->desc}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">ảnh</label>
                                        <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St" name="file">
                                    </div>
                                    <img src="{{asset($banner->image)}}" width="100px" alt="" class="my-3">
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Chi tiết banner</label>
                                        <textarea name="detail" id="editor2" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{$banner->detail}}</textarea>
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
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Tên Banner</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="name_en" value="{{$banner->name_en}}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="inputCity" name="desc_en" value="{{$banner->desc_en}}" required>
                                    </div>

                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Chi tiết banner</label>
                                        <textarea name="detail_en" id="editor1" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{$banner->detail_en}}</textarea>
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
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Tên Banner</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="name_ja" value="{{$banner->nam_ja}}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="inputCity" name="desc_ja" value="{{$banner->desc_ja}}" required>
                                    </div>

                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Chi tiết banner</label>
                                        <textarea name="detail_ja" id="editor3" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{$banner->detail_ja}}</textarea>
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
    CKEDITOR.replace('editor3', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
    CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
</script>
@endsection