@extends('layouts.admin')

@push('js')
<script src="{{ asset('js/handle_datatables.js') }}" defer></script>
@endpush

@section('content')
<div class="container-fluid">
    <h1>Users</h1>
    <table id="users-table" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection