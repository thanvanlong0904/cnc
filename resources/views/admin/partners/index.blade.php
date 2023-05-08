@extends('layouts.admin')

@section('admin')

<div id="add-book">
    <div class="row">
        <div class="col-5 shadow py-4">
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
                <h4 class="mb-0">THÊM MỚI ĐỐI TÁC</h4>
            </div>
            <div id="content-book" class="mt-3">
                <form class="row g-3" action="{{route('partner.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Tên đối tác</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{old('name')}}" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile01" name="file" required>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary px-5">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-7 ">

            <div class="shadow py-4" style="height:100% ;">
                @if (session()->has('delete'))
                <div class="alert alert-success">
                    {{ session()->get('delete') }}
                </div>
                @endif
                <div id="header-book" CLASS="text-center py-2 ">
                    <h4 class="mb-0">DANH SÁCH ĐỐI TÁC</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên đối tác</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                         $t = 1;
                       ?>
                       @foreach($list_partner as $item)
                        <tr>
                            <th scope="row">{{$t++}}</th>
                            <td>{{$item->name}}</td>
                            <td><img width="80px" src="{{asset($item->img)}}" alt=""></td>
                           
                            <td><a href="" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                             
                                <a href="{{route('partner.delete',$item->id)}}" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                              
                            </td>    
                        </tr>
                     @endforeach


                    </tbody>
                </table>
                {{ $list_partner->links() }}
            </div>

        </div>
    </div>

</div>
@endsection