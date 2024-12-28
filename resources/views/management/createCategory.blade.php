@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <h4>
                    <i class="fa-solid fa-bars"></i>
                    Tạo mới
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
                <form action="/management/category" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên danh mục</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên danh mục...">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection