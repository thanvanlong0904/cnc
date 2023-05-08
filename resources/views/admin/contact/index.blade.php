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
   
            <div id="header-book" CLASS="text-center py-2">
                <h4 class="mb-0">SỬA THÔNG TIN LIÊN HỆ</h4>
            </div>
            <div id="content-book" class="mt-3">
                <form class="row g-3" action="{{route('contact.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Phone</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="phone" value="0{{$list_contact->Phone}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Zalo</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="zalo" value="0{{$list_contact->zalo}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon3">Email</span>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="email" value="{{$list_contact->Email}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text mb-2" id="basic-addon3">Địa chỉ </span>
                        
                        <textarea id="editor2" name="address" rows="4" cols="50">
                           {{$list_contact->adress}}
                        </textarea>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text mb-2" id="basic-addon3">Văn phòng</span>
                         <textarea id="editor3" name="address1" rows="4" cols="50">
                           {{$list_contact->adress1}}
                        </textarea>
                    </div>
                   

                    <div class="col-12 text-center">
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
    })
</script>
@endsection