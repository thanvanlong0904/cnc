<?

use App\Models\CategoryProduct;
?>
@extends('layouts.admin')

@section('admin')

<div id="add-book">
    <div class="col-12 mb-5 shadow">

        <div class=" py-4 mx-3" style="height:100% ;">
            @if (session()->has('delete'))
            <div class="alert alert-success">
                {{ session()->get('delete') }}
            </div>
            @endif
            <div id="header-book" CLASS="text-center py-2 ">
                <h4 class="mb-3">DANH SÁCH SẢN PHẨM</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Danh Mục</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $t = 1;
                    ?>
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$t++}}</th>
                        <td> <a href="{{$product->getUrl()}}">{{$product->name}}</a></td>
                        <td><img width="80px" src="{{asset($product->img)}}" alt=""></td>
                        <td>{{App\Models\CategoryProduct::find($product->category_id)->name}}</td>
                        <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{route('product.delete',$product->id)}}" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>

    </div>
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
                <h4 class="mb-0">THÊM MỚI SẢN PHẨM</h4>
            </div>
            <form class="row g-3" action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
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

                                    <div class="col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{old('name')}}" required>
                                    </div>
                                    <label for="">Danh mục sản phẩm</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="category">
                                        @foreach($categorys as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01">Ảnh đại diện</label>
                                        <input type="file" class="form-control" id="inputGroupFile01" name="file" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupFile01">Ảnh tiêu chuẩn cnc</label>
                                        <input type="file" class="form-control" id="inputGroupFile01" name="file1" required>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Mô tả sản phẩm</label>
                                        <textarea name="desc" id="editor2" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="desc" class="form-label">Thông số kĩ thuật</label>
                                        <textarea name="parameter" id="editor1" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
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
                                    <div class="col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="name_en" value="{{old('name')}}" required>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Mô tả sản phẩm</label>
                                        <textarea name="desc_en" id="editor3" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="desc" class="form-label">Thông số kĩ thuật</label>
                                        <textarea name="parameter_en" id="editor4" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
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
                                    <div class="col-md-12 mb-3">
                                        <label for="inputEmail4" class="form-label">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="inputEmail4" name="name_ja" value="{{old('name')}}" required>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Mô tả sản phẩm</label>
                                        <textarea name="desc_ja" id="editor5" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="desc" class="form-label">Thông số kĩ thuật</label>
                                        <textarea name="parameter_ja" id="editor6" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5">Thêm mới</button>
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