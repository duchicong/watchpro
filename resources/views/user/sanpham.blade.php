@extends('user.master')
@section('content')
<table class="table">
	<thead>
		<tr>
			<th>Tên Sản Phẩm</th>
			<th>Mô tả</th>
			<th>Trạng Thái</th>
			<th>Giá Sản Phẩm</th>
		</tr>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th>Còn Hàng</th>
			<th>Hết hàng</th>
			<th>
				<a href="" class="label label-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa')">Xóa</a>
				<a href="" class="label label-primary">Sửa</a>
			</th>
		</tr>
	</thead>
</table>
@endsection