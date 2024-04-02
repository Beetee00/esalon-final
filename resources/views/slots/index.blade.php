@extends('layouts.admin')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container flex-grow-1 container-p-y">

            <div class="card">
                <h5 class="card-header">Available Slots <span> <a href="{{ route('slots.create')}}" class="btn bg-danger" style="color: white"> New Slot</a></span></h5>

                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($slots as $slot)
                                <tr id="row_{{ $slot->id }}">
                                    <td class="text-muted">{{ $slot->id }}</td>
                                    <td class="text-muted">{{ $slot->time }}</td>
                                    <td class="text-muted">{{ $slot->status }}</td>

                                    <td>
                                        <a href="{{ route('slots.show', $slot->id) }}"><span
                                                class="btn btn-sm btn-rounded btn-success">View</span></a>
                                        <form style="display:inline-block" method="POST"
                                            action="{{ route('slots.destroy', $slot->id) }}">
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
