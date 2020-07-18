@extends('admin')      
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        Liệt kê sản phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
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
            <th>Tên nài viết</th>
            <th>Hình minh họa</th>
            <th>Nội dung chính</th>
            <th>Nội dung 1</th>
            <th>Nội dung 2</th>
            <th>Nội dung 3</th>
            <th>Tình trạng</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          {{-- hàm foreach để lấy dữ liệu --}}
          @foreach($all_blog as $key => $blo)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$blo ->blog_name}}</td>
            <td><img src = "uploads/blog/{{$blo ->blog_image}}" height="160" width="100"></td>
            <td>{{$blo ->blog_quote}}</td>
            <td>{{$blo ->blog_content1}}</td>
            <td>{{$blo ->blog_content2}}</td>
            <td>{{$blo ->blog_content3}}</td>
            <td><span class="text-ellipsis">
              
              <?php
                if($blo->blog_status==0){
              ?>
                <a href="{{URL::to('/unactive-blog/'.$blo->blog_id)}}"><span style="color:red;"><strong>Ẩn</strong></span></a>{{-- Chuyển sang trang unactive với ID của danh mục --}}
              <?php
                }else{
              ?>
                <a href="{{URL::to('/active-blog/'.$blo->blog_id)}}"><span style="color:green;"><strong>Hiện</strong></span></a>
              <?php
                }
              ?>              
              
            </span></td>
           
            <td>
              <a href="{{URL::to('/edit-blog/'.$blo->blog_id)}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i>
              <a href="{{URL::to('/delete-blog/'.$blo->blog_id)}}" onclick="return confirm('bạn có chắc muốn xóa mục này?')" class="active styling-edit" ui-toggle-class="">
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