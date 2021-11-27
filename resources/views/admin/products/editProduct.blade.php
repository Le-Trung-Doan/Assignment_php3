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
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Tên sản phẩm</label>
                                    <input type="text" name="name" value="{{$products->name}}" class="form-control" placeholder="">
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh</label>
                                    <input type="file" name="image" class="form-control" placeholder="">
                                    @error('image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Số lượng:</label>
                                    <input type="text" name="quantity" value="{{$products->quantity}}" class="form-control" placeholder="">
                                    @error('quantity')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Gía</label>
                                    <input type="text" name="price" value="{{$products->price}}" class="form-control" placeholder="">
                                    @error('price')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Danh mục</label>
                                    <select name="cate_id"  class="form-control">
                                        @foreach ($categories as $item)
                                            <option @if($products->cate_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Thương hiệu</label>
                                    <select name="brand_id" class="form-control">
                                        @foreach ($brands as $item)
                                            <option @if($products->brand_id == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Gíá sale</label>
                                    <input type="text" name="price_sale" value="{{$products->price_sale}}" class="form-control" placeholder="">
                                    @error('price_sale')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="">Mô tả:</label>
                                    <textarea name="description" rows="10" class="form-control">{{$products->description}}</textarea>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
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
