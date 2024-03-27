@extends('layouts.general')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Request Stock') }}</div>

                <div class="card-body">

                    <form action="{{ route('stock_requests.store') }}" method="POST">
                        @csrf

                        <div class="row m-1">
                            <div class="form-group m-3">
                                <input type="date" name="date" placeholder="Date requested"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="row m-1">

                            <div class="col-md-12 m-3">
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

                            <div class="col-md-12">
                                <div class="form-group m-3">
                                    <input type="text" name="user" placeholder="Hairdresser" value="{{$user->name}}"
                                        class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="row m-1">

                            <div class="col-md-12 m-3">
                                <select name="stock_id" class="form-control form-control-line" required>
                                    <option selected style="display:none">Chose stock you are requesting</option>
                                    @foreach ($stocks as $stock)
                                        <option value="{{ $stock->id }}">{{ $stock->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="row m-5">
                            <button type="submit" class="btn btn-block text-center text-light w-30"
                            style="background-color:#32435F"> Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
