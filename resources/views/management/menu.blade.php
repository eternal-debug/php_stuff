@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('management.inc.sidebar')
            <div class="col-md-8">
                <h4>
                    <i class="fa-solid fa-utensils"></i>
                    Menu
                    <a href="/management/menu/create" class="btn btn-success btn-sm float-right">
                        <i class="fa-solid fa-plus"></i>
                        Thêm món mới
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
                            <th scope="col">Tên món</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Ảnh</th>
                            <!-- <th scope="col">Danh mục</th> -->
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <th scope="row">{{ $menu->id }}</th>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->price }}</td>
                                <td>
                                    <img src="{{ asset('menu_images') }}/{{ $menu->image }}" alt="{{ $menu->name }}" width="100px" class="img-thumbnail">
                                </td>
                                <td>
                                    <a href="/management/menu/{{ $menu->id }}/edit" class="btn btn-warning">Sửa</a>
                                </td>
                                <td>
                                    <form action="/management/menu/{{ $menu->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Xóa" class="btn btn-danger">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection