@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row text-center">
                            <div class="col-sm-4">
                            <a href="/management">
                                <h3>Quản lý</h3>
                                <img width="100px" src="{{asset('images/database-management.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/cashier">
                                <h3>Thanh toán</h3>
                                <img width="100px" src="{{asset('images/cash-machine.png')}}" alt="">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/report">
                                <h3>Thống kê</h3>
                                <img width="100px" src="{{asset('images/report.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
