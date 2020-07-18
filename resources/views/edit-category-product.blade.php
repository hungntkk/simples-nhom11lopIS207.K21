@extends('admin')      
@section('content')

<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Cập nhật danh mục sản phẩm
        </header>
                 {{-- thông báo sau khi thêm danh mục thành công --}}
                <?php
                    $message = Session::get('message');
                    if($message)
                    {
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                ?>
        <div class="panel-body">
            {{-- Hàm hiển thị dữ liệu đã lấy trên db --}}
            @foreach($edit_category_product as $key => $edit_value)

                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-category-product/'.$edit_value->id)}}" method="post">{{-- form gửi đi sẽ đến đường dẫn update-category-product --}}
                        {{csrf_field() }}  {{-- để bảo mật thông tin --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="text" value = "{{$edit_value->category_name}}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả danh mục</label>
                        <textarea type="password" style = "resize: none" rows = "5" class="form-control" name="category_product_desc" id="exampleInputPassword1">{{$edit_value->category_desc}}</textarea>
                    </div>
                    <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
                </form>
                </div>
            @endforeach 
        </div>
    </section>

</div>
@endsection