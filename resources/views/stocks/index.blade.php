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
                            location.href = "/stocks";
                        }, 3000);
                    </script>
                </div>
            @endif
            <div class="card">
                <h5 class="card-header">All stocks</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Units</th>
                                <th>Type</th>
                                <th>Salon</th>
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
                                    <td class="text-muted">{{ $stock->salon->name }}</td>
                                    <td>
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
        </div>
        <!-- / Content -->
    @endsection
