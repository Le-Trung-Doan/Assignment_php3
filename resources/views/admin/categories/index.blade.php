@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Từ khóa</label>
                                    <input type="text" class="form-control" name="keyword" value="{{$keyword}}" placeholder="Tìm theo tên danh muc">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                        <th>STT</th>
                        <th>Name</th>
                        <th>
                            <a href="{{route('category.add')}}">Add new</a>
                        </th>
                        </thead>
                        <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $item->id])}}">Edit</a>
                                    <a href="{{route('category.remove', ['id' => $item->id])}}">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
