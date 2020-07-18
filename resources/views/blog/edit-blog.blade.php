@extends('admin')      
@section('content')

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Cập nhật bài viết
        </header>
        <div class="panel-body">

            {{-- thông báo sau khi thêm danh mục thành công --}}
            <?php
                $message = Session::get('message');
                if($message)
                {
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
            ?>

            <div class="position-center">
                @foreach($edit_blog as $key => $pro)
                <form role="form" action = "{{URL::to('/update-blog/'.$pro->blog_id)}}" method="post" enctype="multipart/form-data">{{-- phải có cái này mới gửi ảnh qua đc --}}{{-- form gửi đi sẽ đến đường dẫn save-category-product --}}
                    {{csrf_field() }}  {{-- để bảo mật  thông tin --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên bài viết</label>
                    <input type="text" name="blog_name" class="form-control" id="exampleInputEmail1" value="{{$pro->blog_name}}">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh minh họa</label>
                    <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1">
                    <img src="{{URL::to('uploads/blog/'.$pro->blog_image)}}" height="160" width="100">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung chính</label>
                    <textarea rows = "5" class="form-control" name="blog_quote" id="exampleInputPassword1" >{{$pro->blog_quote}}</textarea>
                </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung 1</label>
                    <textarea  rows = "5" class="form-control" name="blog_content1" id="exampleInputPassword1" >{{$pro->blog_content1}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung 2</label>
                    <textarea rows = "5" class="form-control" name="blog_content2" id="exampleInputPassword1" >{{$pro->blog_content2}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung 3</label>
                    <textarea rows = "5" class="form-control" name="blog_content3" id="exampleInputPassword1" >{{$pro->blog_content3}}</textarea>
                </div>
                <button type="submit" name="edit_product" class="btn btn-info">Cập nhật sản phẩm</button>
            </form>
            @endforeach
            </div>

        </div>
    </section>

</div>
@endsection