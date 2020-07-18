@extends('admin')      
@section('content')

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm bài viết mới
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
                <form role="form" action = "/save-blog" method="post" enctype="multipart/form-data">{{-- phải có cái này mới gửi ảnh qua đc --}}{{-- form gửi đi sẽ đến đường dẫn save-category-product --}}
                    {{csrf_field() }}  {{-- để bảo mật thông tin --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên bài viết</label>
                    <input type="text" name="blog_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh minh họa</label>
                    <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung chính</label>
                    <textarea style = "resize: none" rows = "5" class="form-control" name="blog_quote" id="exampleInputPassword1" placeholder="Nội dung chính của bài viết"></textarea>
                </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung chi tiết 1</label>
                    <textarea style = "resize: none" rows = "5" class="form-control" name="blog_content1" id="exampleInputPassword1" placeholder="Nội dung chi tiết 1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung chi tiết 2</label>
                    <textarea style = "resize: none" rows = "5" class="form-control" name="blog_content2" id="exampleInputPassword1" placeholder="Nội dung chi tiết 2"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung chi tiết 3</label>
                    <textarea style = "resize: none" rows = "5" class="form-control" name="blog_content3" id="exampleInputPassword1" placeholder="Nội dung chi tiết 3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lựa chọn hiển thị</label>
                     <select name="blog_status" class="form-control input-sm m-bot15">
                        
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <button type="submit" name="add_blog" class="btn btn-info">Thêm bài viết mới</button>
            </form>
            </div>

        </div>
    </section>

</div>
@endsection