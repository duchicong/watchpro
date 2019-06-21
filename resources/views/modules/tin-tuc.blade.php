
<?php 
  $data = DB::table('blogs')
  ->where('trang_thai',1)
  ->Where('danh_muc_id',2)
  ->limit(8)
  ->orderBy('created_at', 'desc')
  ->get(); 
?>

<div class="col-lg-12 no-padding">
  <ol>
  @foreach($data as $row)
    <li><a href="{!!url('/tin-tuc/'.$row->slug)!!}" title="{!!$row->chu_de!!}">{!!$row->chu_de!!}</a></li>
  @endforeach
  </ol>
</div>
