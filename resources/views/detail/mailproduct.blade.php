Thông tin đặt hàng của khách hàng: <strong>{{$data['hoten']}}</strong><br/>
Số điện thoại: <strong>{{$data['sdt']}}</strong><br/>
Địa chỉ: <strong>{{$data['address']}}</strong><br/>
Nội dung: <br/>{{$data['mesage']}}<br/>
===================================<br/>
Thông tin đặt hàng của quý khách:
<table>
	<tr style="background-color: #f23718;color:#fff;font-size: 14px;font-weight: 600;text-transform: uppercase;border:2px solid #f23718;">
		<th style="text-align: center;">STT</th>
		<th>Ảnh</th>
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Giá</th>
		<th>Thành tiền</th>
	</tr>
	<?php $stt=0; ?>
	@foreach($info as $row)
	<?php $stt++; $soluong = $row->soluong; $total = $row->total; ?>
	<tr style="text-align: center;border-bottom: 1px solid #f23718;">
		<td style="text-align: center;">{{$stt}}</td>
		<td><img src="{{ url('public/uploads/products/'.$row->anh) }}" alt="{!! $row->ten_san_pham !!}" height="80px" width="50px"></td>
		<td>{!! $row->ten_san_pham !!}</td>
		<td>{!! $row->soluong_sub !!}</td>
		<td>
			{{ ($row->khuyen_mai) ? number_format($row->khuyen_mai,0) : number_format($row->gia_tien,0) }}
		</td>
		<td>
			{{ number_format($row->subtotal,0) }}
		</td>
	</tr>
	@endforeach
	<tr style="background-color: #f23718;color:#fff;font-size: 14px;font-weight: 600;border:2px solid #f23718;">
		<td colspan="3">({{$stt}}) Sản phẩm</td>
		<td style="text-align: center;">{!! $soluong !!}</td>
		<td>Tổng giá trị</td>
		<td>{!! number_format($total) !!}đ</td>
	</tr>
</table>