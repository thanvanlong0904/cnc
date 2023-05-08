<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Số điện thoại khách hàng: <span style="text-transform: uppercase ; font-weight: bold">{{$phone}}</span></p>
<p>Email : <span style="text-transform: uppercase ; font-weight: bold">{{$email}}</span></p>
<p>Địa chỉ : <span style="text-transform: uppercase; font-weight: bold">{{$add}}</span></p>
<p>Ghi chú : <span style="text-transform: uppercase ; font-weight: bold">{{$note}}</span></p>
<p>Ảnh sản phẩm cần báo giá:</p>
@foreach($images as $item)
<img src="{{asset($item)}}" alt="">
@endforeach
</body>
</html>
