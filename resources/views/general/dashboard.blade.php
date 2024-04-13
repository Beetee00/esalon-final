@extends('layouts.general')

@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row justify-content-center">

                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder">Customer Feedback</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">0</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder"> My Requests</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">{{$my_requests}}</h1>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="row ">
                            <div class="col-md-6 ">
                               <span class="text-muted fw-bolder"> My Appointments</span>
                            </div>
                            <div class="col-md-6">
                                <h1 class="fw-light">{{$my_appointments}}</h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card h-100">
                    <h5 class="card-header">My Appointments</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Phone Number</th>
                                    <th>Appointment Time</th>
                                    <th>Appointment Date</th>
                                    <th>Hair style</th>
                                    <th>Image</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($appointments as $appointments)
                                    <tr id="row_{{ $appointments->id }}">
                                        <td class="text-muted">{{ $appointments->id }}</td>
                                        <td class="text-muted">{{ $appointments->name }}</td>
                                        <td class="text-muted">{{ $appointments->surname }}</td>

                                        <td class="text-muted">{{ $appointments->phone_number }}</td>
                                        <td class="text-muted">{{ $appointments->time }}</td>
                                        <td class="text-muted">{{ $appointments->date }}</td>

                                        <td class="text-muted">{{ $appointments->style }}</td>
                                        <td><img src="/images/uploads/{{ $appointments->style_image }}" alt=""
                                                srcset="" style="width:50px;height:50px"></td>
                                        <td>

                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                    href="{{route('stock_requests.create')}}"><i
                                                        class="bx bx-edit-alt me-1"></i> Request Stock</a>
                                                        <a class="dropdown-item"
                                                        href="https://wa.me/{{ $appointments->phone_number }}?text=Hi, %20{{ $appointments->name }}%20your%20appointment%20at%20{{$appointments->salon->name}}%20with%20{{$appointments->user->name}}%20has%20been%20approved.%20Click%20this%20Link%20to%20make%20a%20payment%20https://www.paynow.co.zw/Payment/Link/?q=c2VhcmNoPW5nb25pZHphc2hlbnlhY2hvdG8lNDBnbWFpbC5jb20mYW1vdW50PTQwMDAwLjAwJnJlZmVyZW5jZT0mbD0x"><i
                                                            class="bx bx-edit-alt me-1"></i> Accept Appointment</a>
                                                            <a class="dropdown-item"
                                                            href="https://wa.me/{{ $appointments->phone_number }}?text=Hi, %20{{ $appointments->name }}%20your%20appointment%20at%20{{$appointments->salon->name}}%20with%20{{$appointments->user->name}}%20has%20been%20declined.%20Please%20contact%20Alvion%20on%20+263780854288%20.%20Thank%20you."><i
                                                                class="bx bx-edit-alt me-1"></i> Reject Appointment</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('appointments.show', $appointments->id) }}"><i
                                                            class="bx bx-edit-alt me-1"></i> View Appointment</a>
                                                    <a class="dropdown-item"><i class="bx bx-edit-alt me-1"></i>
                                                        <form style="display:inline-block" method="POST"
                                                            action="{{ route('appointments.destroy', $appointments->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-sm btn-rounded btn-danger">Delete
                                                                Appointment</button>
                                                        </form>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card h-100">
                    <h5 class="card-header">Customer Feedbacks</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Customer Image</th>
                                    <th>Message</th>
                                    <th>Rated</th>



                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($feedbacks as $feedbacks)
                                    <tr id="row_{{ $feedbacks->id }}">
                                        <td class="text-muted">{{ $feedbacks->id }}</td>
                                        <td class="text-muted">{{ $feedbacks->name }}</td>
                                        <td ><img src="/images/uploads/{{ $feedbacks->customer_image }}" alt=""
                                            srcset="" style="width:50px;height:50px"></td>
                                            <td class="text-muted">{{ $feedbacks->message }}</td>
                                            <td class="text-muted">{{ $feedbacks->rated }}</td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
