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
            @if (session()->has('add_user'))
            <div class="alert alert-success">
                {{ session()->get('add_user') }}
            </div>
        @endif
        @if (session()->has('add_erorr'))
            <div class="alert alert-danger">
                {{ session()->get('add_erorr') }}
            </div>
        @endif
            <div id="header-book" CLASS="text-center py-2">
                <h4 class="mb-0">CẬP NHẬT THÀNH VIÊN</h4>
            </div>
            <div id="content-book" class="mt-3">
                <form class="row g-3" action="{{route('user.update',$users->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="inputEmail4" class="form-label">Tên admin</label>
                        <input type="text" class="form-control" id="inputEmail4" name="name" value="{{$users->name}}">
                    </div>

                    <div class="col-md-12">
                        <label for="inputCity" class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputCity" name="email" value="{{$users->email}}">
                    </div>
                    <div class="col-md-12">
                        <label for="inputState" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control" id="inputCity" name="pass" value="{{$users->password}}">
                    </div>
                    @if($users->status ==0)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="check" id="flexRadioDefault1" value="1" @if($users->status == 1) checked @endif >
                        <label class="form-check-label" for="flexRadioDefault1">
                            Quản trị viên
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="check" id="flexRadioDefault2" value="0" @if($users->status == 0) checked @endif>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Thành viên
                        </label>
                    </div>
                    @endif
                    @if($users->status ==1)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="check" id="flexRadioDefault1" value="1" @if(Auth::user()->status == 1) checked @endif >
                        <label class="form-check-label" for="flexRadioDefault1">
                            Quản trị viên
                        </label>
                    </div>
                   
                    @endif
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary px-5">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-7 ">
            <div class="shadow py-4" style="height:100% ;">
                <div id="header-book" CLASS="text-center py-2 ">
                    <h4 class="mb-0">DANH SÁCH ADMIN</h4>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                           $t=1;
                        @endphp
                        @foreach($list_user as $item)
                        <tr>
                            <th scope="row">{{$t++}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            @if(Auth::user()->status == 1)
                            <td><a href="{{route('user.edit',$item->id)}}" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>

                            </td>
                            @else
                            <td>Quản trị</td>
                            @endif
                        </tr>
                        @endforeach
                        

                    </tbody>
                </table>
               
                </table>
            </div>

        </div>
    </div>

</div>
@endsection