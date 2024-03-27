@extends('layouts.admin')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder"> Total Salons</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">{{$salons}}</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder"> Total Stock</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">{{$stock}}</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder"> Total Users</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">{{$users}}</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder"> Appointments</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">{{$appointments}}</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Stock Request</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Requested By</th>
                                <th>Stock Requested</th>
                                <th>Salon</th>
                                <th>Date Requested</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($stock_requests as $stock_request)
                                <tr >
                                    <td class="text-muted">{{ $stock_request->user}}</td>
                                    <td class="text-muted">{{ $stock_request->stock->name }}</td>
                                    <td class="text-muted">{{ $stock_request->salon->name }}</td>
                                    <td class="text-muted">{{ $stock_request->date }}</td>
                                    <td>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
