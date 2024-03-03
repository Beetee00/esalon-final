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
                                        <a href="{{ route('appointments.show', $appointments->id) }}"><span
                                                class="btn btn-sm btn-rounded btn-success">View</span></a>
                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('appointments.destroy', $appointments->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-rounded"
                                                style="background-color: #7B014C">Delete</button>
                                        </form>

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
