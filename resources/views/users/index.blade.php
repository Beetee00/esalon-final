@extends('layouts.admin')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container flex-grow-1 container-p-y">

            <div class="card">
                <h5 class="card-header">All Users</h5>
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
        </div>
        <!-- / Content -->
    @endsection
