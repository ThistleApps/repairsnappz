@extends('layouts.admin.adminbase')

@section('css')
    <link href="{{ asset('css/coreui-chartjs.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
        <div class="fade-in">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-header">Users</div>
                        <div class="card-body">Add and Edit Users</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-header">Roles</div>
                        <div class="card-body">Add and Edit Roles</div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-header">Permissions</div>
                        <div class="card-body">Review Permissions</div>
                    </div>
                </div>

            </div>


            @endsection

            @section('javascript')

@endsection
