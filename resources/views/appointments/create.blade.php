
@extends('layouts.general')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Add New Appointment') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif

                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row m-1">
                        <label for="image" class="form-label">Customer Name
                        </label>
                        <div class="col">
                            <input type="text" name="name" placeholder="Name" class="form-control"
                                required>
                        </div>

                    </div>

                    <div class="row m-1">
                         <label for="image" class="form-label">Customer Lastname </label>

                        <div class="col">
                            <input type="text" name="surname" placeholder="Last Name"
                                class="form-control" required>
                        </div>

                    </div>
                    <div class="form-group m-3">
                        <label for="image" class="form-label">Customer Email </label>

                        <input type="email" name="email" placeholder="Email address"
                            class="form-control" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="image" class="form-label">Customer Contact </label>

                        <input type="text" name="phone_number" placeholder="Enter your phone number"
                            class="form-control" required>
                    </div>
                    <div class="form-group m-3">
                        <label for="image" class="form-label">Appointment Date </label>

                        <input type="date" name="date" placeholder="Pick date"
                            class="form-control" required>
                    </div>
                    <div class="row m-1">
                        <label for="image" class="form-label">Prefered Time </label>

                        <div class="col-md-12">
                            <select name="time" class="form-control form-control-line" required>
                                <option selected style="display:none">Select Prefered Time</option>

                                <option value="08:00 - 09:00">8 am to 9 am
                                </option>
                                <option value="10:00 - 11:00">10 am to 11 am
                                </option>
                                <option value="12:00 - 13:00">12 pm to 13 pm
                                </option>
                                <option value="14:00 - 15:00">14 pm to 15 pm
                                </option>
                                <option value="16:00 - 17:00">16 pm to 17 pm
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="image" class="form-label">Chose Salon </label>

                        <div class="col-md-12">
                            <select name="salon_id" class="form-control form-control-line" required>
                                <option selected style="display:none">Select Salon</option>
                                @foreach ($salons as $salon)
                                    <option value="{{ $salon->id }}">{{ $salon->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row m-1">
                        <label for="image" class="form-label">Hairdresser </label>

                        <div class="col-md-12">
                            <select name="user_id" class="form-control form-control-line" required>
                                <option selected style="display:none">Select Hair dresser</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row m-1">
                        <label for="image" class="form-label">Select Hairstyle
                        </label>
                        <div class="col-md-12">
                            <select name="style" class="form-control form-control-line" required>

                                    <option value="Fade">Fade
                                    </option>
                                    <option value="Carrot">Carrot
                                    </option>
                            </select>
                        </div>
                    </div>


                    <div class="row m-1">
                        <div class="mb-3">
                            <label for="style_image" class="form-label">Style Image
                            </label>
                            <div class="custom-file">
                                <input type="file" class="form-control" name="style_image">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-block text-center text-light w-100"
                        style="background-color:#32435F"> Book Customer</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
