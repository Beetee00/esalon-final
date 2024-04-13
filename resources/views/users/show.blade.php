@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30"> <img src="{{ asset('admin/assets/img/bg03.jpg')}}" class="rounded-circle"
                                width="120" height="120" />
                            <h4 class="card-title mt-4">{{ $user->name }}</h4>
                            <div class="row text-center justify-content-md-center">
                            </div>
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body"> <small class="text-muted">Email address </small>
                        <h6>{{ $user->email }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body"> <small class="text-muted fw-bolder">Stationed At </small>
                            <h6>{{ $user->salon->name}}</h6>
                        </div>

                    </div>
                </div>
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card">
                        <h5 class="card-header">My Appointments</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>

                                        <th>Customer</th>
                                        <th>Phone Number</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($appointments as $appointments)
                                        <tr id="row_{{ $appointments->id }}">

                                            <td class="text-muted">{{ $appointments->name .' '. $appointments->surname}}</td>


                                            <td class="text-muted">{{ $appointments->phone_number }}</td>
                                            <td class="text-muted">{{ $appointments->time }}</td>
                                            <td class="text-muted">{{ $appointments->date }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
