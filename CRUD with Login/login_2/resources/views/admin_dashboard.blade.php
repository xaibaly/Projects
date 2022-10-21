@extends('layout')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('admin_sidebar')
        </div>
        <div class="col-9">
            @include('admin_dashboard_index')
            @include('admin_dashboard_show_users')
        </div>
    </div>
@endsection
