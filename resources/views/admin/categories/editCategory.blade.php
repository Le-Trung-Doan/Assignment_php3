@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tạo mới sản phẩm</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" name="name" value="{{$model->name}}" class="form-control" placeholder="">
{{--                                    @error('name')--}}
{{--                                    <span class="text-danger">{{$message}}</span>--}}
{{--                                    @enderror--}}
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <br>
                                <a href="{{route('product.index')}}" class="btn btn-danger">Hủy</a>
                                &nbsp;
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
