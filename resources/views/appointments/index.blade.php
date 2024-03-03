@extends('layouts.general')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <h5 class="card-header">My Appointments</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Appointment Time</th>
                                <th>Appointment Date</th>
                                <th>Salon</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($appointments as $appointments)
                                <tr id="row_{{ $appointments->id }}">
                                    <td class="text-muted">{{ $appointments->id }}</td>
                                    <td class="text-muted">{{ $appointments->name }}</td>
                                    <td class="text-muted">{{ $appointments->surname }}</td>
                                    <td class="text-muted">{{ $appointments->email }}</td>
                                    <td class="text-muted">{{ $appointments->phone_number }}</td>
                                    <td class="text-muted">{{ $appointments->time }}</td>
                                    <td class="text-muted">{{ $appointments->date }}</td>
                                    <td class="text-muted">{{ $appointments->salon->name }}</td>
                                    <td>
                                        <div class="row">

                                            <a href="https://wa.me/{{ $appointments->phone_number }}?text=Hi, %20{{ $appointments->name }}%20your%20appointment%20at%20{{$appointments->salon->name}}%20with%20{{$appointments->user->name}}%20has%20been%20approved.%20You%20can%20come%20through."
                                                target="_blank">
                                                <p><span class="text-secondary">Accept
                                                </p>
                                            </a>
                                            <a href="https://wa.me/{{ $appointments->phone_number }}?text=Hi, %20{{ $appointments->name }}%20your%20appointment%20at%20{{$appointments->salon->name}}%20with%20{{$appointments->user->name}}%20has%20been%20declined.%20Please%20contact%20Alvion%20on%20+263780854288%20.%20Thank%20you."
                                                target="_blank">
                                                <p><span class="text-danger">Decline
                                                </p>
                                            </a>

                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
