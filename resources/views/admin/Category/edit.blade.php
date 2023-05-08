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
                <h4 class="mb-0">CẬP NHẬT DANH MỤC</h4>
            </div>
            <div id="content-book" class="mt-3">
                <form class="row g-3" action="{{route('category.update',$categorys->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Tên danh mục tiếng việt</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{$categorys->name}}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Tên danh mục tiếng anh</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name_en" value="{{$categorys->name_en}}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Tên danh mục tiếng nhật</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name_ja" value="{{$categorys->name_ja}}" required>
                    </div>
                    <div class="input-group mb-3">
                        
                        <input type="file" class="form-control" id="inputGroupFile01" name="file" >
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary px-5">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
      
    </div>

</div>
@endsection