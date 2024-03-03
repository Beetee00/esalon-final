@extends('layouts.admin')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="card">
                <h5 class="card-header">All Salons</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($salons as $salon)
                                <tr id="row_{{ $salon->id }}">
                                    <td class="text-muted">{{ $salon->id }}</td>
                                    <td class="text-muted">{{ $salon->name }}</td>
                                    <td class="text-muted">{{ $salon->address }}</td>
                                    <td>

                                        <a href="{{ route('salons.show', $salon->id) }}"><span
                                                class="btn btn-sm btn-rounded btn-success">View</span></a>
                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('salons.destroy', $salon->id) }}">
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
        </div>
        <!-- / Content -->
    @endsection
