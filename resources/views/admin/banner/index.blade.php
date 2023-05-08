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
                <h4 class="mb-3">DANH SÁCH BANNER</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên banner</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $t=1;
                    @endphp
                    @foreach($list_banner as $item)
                    <tr>
                        <th scope="row">{{$t++}}</th>
                        <td><a href="">{{$item->name}}</a></td>
                        <td> <img width="80px" height="80px" src="{{asset($item->image)}}" alt=""></td>
                        <td><span style="-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;display: -webkit-box;height:100%">{{$item->desc}}</span></td>
                        <td><a href="{{route('banner.edit',$item->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="{{route('banner.delete',$item->id)}}" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list_banner->links() }}
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
            @if (session()->has('add_banner'))
            <div class="alert alert-success">
                {{ session()->get('add_banner') }}
            </div>
            @endif
            @if (session()->has('add_erorr'))
            <div class="alert alert-danger">
                {{ session()->get('add_erorr') }}
            </div>
            @endif
            <div id="header-book" CLASS="text-center py-2">
                <h4 class="mb-0">THÊM MỚI BANNER</h4>
            </div>
            <form class="row g-3" action="{{route('banner.create')}}" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{old('name')}}" required>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="inputCity" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="inputCity" name="desc" value="{{old('desc')}}" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">ảnh</label>
                                        <input type="file" class="form-control" id="inputAddress" placeholder="1234 Main St" name="file" required>
                                    </div>
                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Chi tiết banner</label>
                                        <textarea name="detail" id="editor2" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
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
                                        <input type="text" class="form-control" id="inputEmail4" name="name_en" value="{{old('name')}}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="inputCity" name="desc_en" value="{{old('desc')}}" required>
                                    </div>

                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Chi tiết banner</label>
                                        <textarea name="detail_en" id="editor1" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
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
                                        <input type="text" class="form-control" id="inputEmail4" name="name_ja" value="{{old('name')}}" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control" id="inputCity" name="desc_ja" value="{{old('desc')}}" required>
                                    </div>

                                    <div class="content-textarea">
                                        <label for="inputAddress" class="form-label">Chi tiết banner</label>
                                        <textarea name="detail_ja" id="editor3" cols="90" rows="110" class="ckeditor" style="height:500px ; " required>{{old('detail')}}</textarea>
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
    CKEDITOR.replace('editor3', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    });
     CKEDITOR.replace('editor1', {
        filebrowserBrowseUrl: "{{asset('/ckfinder/ckfinder.html')}}",
        filebrowserUploadUrl: "{{asset('/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}"
    })
</script>
@endsection