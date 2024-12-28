@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <h4>
                    <i class="fa-solid fa-bars"></i>
                    Danh mục
                    <a href="/management/category/create" class="btn btn-success btn-sm float-right">
                        <i class="fas fa-plus"></i>
                        Tạo danh mục
                    </a>
                </h4>
                <hr>
                @if(Session()->has('status'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">X</button>
                        {{ Session()->get('status') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th> 
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($categories) < 1) 
                            <tr>
                                <td colspan="4">Không có dữ liệu</td>
                            </tr>
                        @else
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="/management/category/{{ $category->id }}/edit" class="btn btn-warning">Sửa</a>
                                    </td>
                                    <td>
                                        <form action="/management/category/{{ $category->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Xóa" class="btn btn-danger"></input>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection