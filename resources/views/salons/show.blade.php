@extends('layouts.admin')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container flex-grow-1 container-p-y">

            <div class="card">
                <div class="card-header">
                    <h4>Welcome to {{$salon->name}}</h4>
                    <p>Below are the details for this Salon from the employees, stock available in the salon, the appointments specifically for the salon. </p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Located At {{$salon->address}}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Stock Available</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Units</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($stocks as $stock)
                                <tr id="row_{{ $stock->id }}">
                                    <td class="text-muted">{{ $stock->id }}</td>
                                    <td class="text-muted">{{ $stock->name }}</td>
                                    <td class="text-muted">{{ $stock->units }}</td>
                                    <td class="text-muted">{{ $stock->type }}</td>
                                    <td>
                                        <a href="{{ route('stocks.show', $stock->id) }}"><span
                                                class="btn btn-sm btn-rounded btn-success">View</span></a>
                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('stocks.destroy', $stock->id) }}">
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
            <div class="card">
                <h5 class="card-header">Employees </h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($users as $user)
                                <tr id="row_{{ $user->id }}">
                                    <td class="text-muted">{{ $user->id }}</td>
                                    <td class="text-muted">{{ $user->name }}</td>
                                    <td class="text-muted">{{ $user->email }}</td>
                                    <td class="text-muted">{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $user->id) }}"><span
                                                class="btn btn-sm btn-rounded btn-success">View</span></a>
                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('users.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-sm btn-rounded" style="background-color: #7B014C">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Appointments</h5>
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


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
