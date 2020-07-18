@extends('admin')      
@section('content')

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm sản phẩm
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
                <form role="form" action = "/save-product" method="post" enctype="multipart/form-data">{{-- phải có cái này mới gửi ảnh qua đc --}}{{-- form gửi đi sẽ đến đường dẫn save-category-product --}}
                    {{csrf_field() }}  {{-- để bảo mật thông tin --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                    <input type="double" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Giá sản phẩm">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Màu sắc</label>
                    <input type="text" name="product_color" class="form-control" id="exampleInputEmail1" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Size</label>
                    <input type="text" name="product_size" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                    <textarea style = "resize: none" rows = "5" class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
                </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                    <textarea style = "resize: none" rows = "5" class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lựa chọn danh mục sản phẩm</label>
                     <select name="product_cate" class="form-control input-sm m-bot15">

                        @foreach($category as $key => $cate)
                            <option value="{{$cate->id}}">{{$cate->category_name}}</option>
                            
                        @endforeach
                    
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lựa chọn hiển thị</label>
                     <select name="product_status" class="form-control input-sm m-bot15">
                        
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
            </form>
            </div>

        </div>
    </section>

</div>
@endsection