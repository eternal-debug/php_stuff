@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <class class="list-group">
                <a href="/management/category" class="list-group-item list-group-item-action">
                    <i class="fa-solid fa-bars"></i>
                    Danh mục
                </a>
                    <a href="/management/menu" class="list-group-item list-group-item-action">
                    <i class="fa-solid fa-utensils"></i>
                    Menu
                </a>
                    <a href="/management/room" class="list-group-item list-group-item-action">
                    <i class="fa-solid fa-door-open"></i>
                    Phòng
                </a>
                    <a href="/management/user" class="list-group-item list-group-item-action">
                    <i class="fa-solid fa-user"></i>
                    Tài khoản
                </a>
                </class>
            </div>
            <div class="col-md-8">
                <h4>
                    <i class="fa-solid fa-bars"></i>
                    Chỉnh sửa danh mục
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
                <form action="/management/category/{{ $category->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Tên danh mục</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" placeholder="Nhập tên danh mục...">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection