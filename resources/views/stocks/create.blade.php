@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Add Stock') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('stocks.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-start">{{ __('Type') }}</label>

                            <div class="col-md-8">
                                <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="name" autofocus>

                                @error('type')
                                    <span class="invalid-feedback" type="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="units" class="col-md-4 col-form-label text-md-start">{{ __('Units') }}</label>

                            <div class="col-md-8">
                                <input id="units" type="text" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}" required autocomplete="name" autofocus>

                                @error('units')
                                    <span class="invalid-feedback" units="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="units" class="col-md-4 col-form-label text-md-start">{{ __('Salon') }}</label>

                            <div class="col-md-8">
                                <select name="salon_id" class="form-control form-control-line"
                                required>
                                <option selected style="display:none">Select Salon</option>
                                @foreach ($salons as $salon)
                                    <option value="{{ $salon->id }}">{{ $salon->name }}
                                    </option>
                                @endforeach
                            </select>
                            </div>
                        </div>




                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
