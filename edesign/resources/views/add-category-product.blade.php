@extends('admin')      
@section('content')

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm danh mục sản phẩm
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
                <form role="form" action = "/save-category-product" method="post">{{-- form gửi đi sẽ đến đường dẫn save-category-product --}}
                    {{csrf_field() }}  {{-- để bảo mật thông tin --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                    <textarea type="password" style = "resize: none" rows = "5" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Lựa chọn hiển thị</label>
                     <select name="category_product_status" class="form-control input-sm m-bot15">
                        
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                    </select>
                </div>
                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
            </form>
            </div>

        </div>
    </section>

</div>
@endsection