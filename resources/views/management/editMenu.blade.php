@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <h4>
                    <i class="fa-solid fa-utensils"></i>
                    Chỉnh sửa
                </h4>
                <hr>
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="/management/menu/{{ $menu->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Tên món</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $menu->name }}">
                        <label for="price">Giá</label>
                        <div class="input-group mb-3">
                            <input type="text" name="price" id="price" class="form-control" value="{{ $menu->price }}">
                            <div class="input-group-prepend">
                                <span class="input-group-text">đồng</span>
                            </div>
                        </div>
                        <label for="menuImage">Ảnh</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Tải lên hình ảnh</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" id="inputGroupFile01" class="custom-file-input">
                                <label class="custom-file-label" for="inputGroupFile01">Chọn ảnh</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection