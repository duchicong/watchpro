
@extends('Admin.admin')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm sản phẩm</title>
	<link rel="stylesheet" href="public/assets/css/stylesheet.css">
</head>
<body>
<div class="container">
    <h2>Form Nhập Thông Tin</h2>
	    <form action="" method="post">
	        <label for="fname">Tên sản phẩm</label>
	        <input type="text" required id="name" name="name" placeholder="Nhập tên sản phẩm">
	 
	        <label for="price">Giá sản phẩm</label>
	        <input type="text" required id="price" name="price" placeholder="Nhập giá sản phẩm">
	 
	        <label for="status">Trạng Thái</label>
	        <select name="status" class="form-control">
	        	<option value="0">Ẩn</option>
	        	<option value="1">Hiện</option>
	        </select>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
	        <input type="submit" class="btn btn primary" value="Lưu Lại">
	    </form>
</div>
</body>
</html>
@endsection
