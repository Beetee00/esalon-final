@extends('layouts.admin')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            @if (session('status'))
            <div class="justify-content-right alert alert-success" role="alert">
                {{ session('status') }}
                <script>
                    setTimeout(function() {
                        location.href = "/feedbacks";
                    }, 3000);
                </script>
            </div>
        @endif
            <div class="card">
                <h5 class="card-header">Customer Feedbacks</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Rated (out of 5)</th>
                                <th>Customer Name</th>
                                <th>Message</th>
                                <th>Phone Number</th>
                                <th>Attended By</th>
                                <th>Salon</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($feedbacks as $feedback)
                                <tr id="row_{{ $feedback->id }}">
                                    <td class="text-muted">{{ $feedback->rated }}</td>

                                    <td class="text-muted">{{ $feedback->name }}</td>
                                    <td class="text-muted">{{ $feedback->message }}</td>
                                    <td class="text-muted">{{ $feedback->phone_number }}</td>
                                    <td class="text-muted">{{ $feedback->user->name }}</td>
                                    <td class="text-muted">{{ $feedback->salon->name }}</td>


                                    <td>

                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('feedbacks.destroy', $feedback->id) }}">
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
