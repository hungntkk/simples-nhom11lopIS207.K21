@extends('admin')      
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Danh sách đơn hàng
    </div>
    <div class="table-responsive">
           <?php
                $message = Session::get('message');
                if($message)
                {
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Mã đơn hàng</th>
            <th>Giá trị</th>
            <th>Trạng thái</th>
            <th>Tên khách hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Email</th>
            {{-- <th style="width:30px;"></th> --}}
          </tr>
        </thead>
        <tbody>
          {{-- hàm foreach để lấy dữ liệu --}}
          @foreach($details_order as $key => $order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$order->payment_id}}</td>
            <td>{{$order->payment_fee}}</td>
            <td>{{$order->payment_status}}</td>
            <td>{{$order->shipping_name}}</td>
            <td>{{$order->shipping_address}}</td>
            <td>{{$order->shipping_phone}}</td>
            <td>{{$order->shipping_email}}</td>
            <td><span class="text-ellipsis">
              
              <?php
                if($order->payment_status==1){
              ?>
                <a href="{{URL::to('/active-order/'.$order->payment_id)}}"><span style="color:red;"><strong>Đang chờ xét</strong></span></a>{{-- Chuyển sang trang unactive với ID của danh mục --}}
              <?php
                }else{
              ?>
                <a href="{{URL::to('/unactive-order/'.$order->payment_id)}}"><span style="color:green;"><strong>Đã duyệt đơn</strong></span></a>
              <?php
                }
              ?>              
              
            </span></td>
           
            <td>
              <a href="{{URL::to('/details-of-order/'.$order->payment_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              <a href="{{URL::to('/delete-order/'.$order->payment_id)}}" onclick="return confirm('bạn có chắc muốn xóa mục này?')" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>

@endsection