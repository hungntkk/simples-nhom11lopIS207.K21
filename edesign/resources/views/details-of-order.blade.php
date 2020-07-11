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
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            {{-- <th style="width:30px;"></th> --}}
          </tr>
        </thead>
        <tbody>
          {{-- hàm foreach để lấy dữ liệu --}}
          @foreach($details_of_payment as $key => $deta)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$deta->payment_id}}</td>
            <td>{{$deta->product_id}}</td>
            <td>{{$deta->product_name}}</td>
            <td>{{$deta->order_qty}}</td>
            {{-- <td><span class="text-ellipsis">
              
              <?php
                if($order->payment_status==1){
              ?>
                <a href="{{URL::to('/active-order/'.$order->payment_id)}}"><span style="color:red;"><strong>Đang chờ xét</strong></span></a>Chuyển sang trang unactive với ID của danh mục
              <?php
                }else{
              ?>
                <a href="{{URL::to('/unactive-order/'.$order->payment_id)}}"><span style="color:green;"><strong>Đã duyệt đơn</strong></span></a>
              <?php
                }
              ?>              
              
            </span></td> --}}
           
            {{-- <td>
              <a href="{{URL::to('/edit-order/'.$order->payment_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              <a href="{{URL::to('/delete-order/'.$order->payment_id)}}" onclick="return confirm('bạn có chắc muốn xóa mục này?')" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i>
              </a>
            </td> --}}
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