@extends('layouts.app')
@section('content')

<div class="vh-100 jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="vh-100 container py-5">
        <div class="logo_laravel">
            <img width="20%" src="../../logo.jpg" alt="">
        </div>
        <h1 class="display-5 fw-bold">
            Welcome to Cars Dealership
        </h1>

        <p class="col-md-8 fs-4">Gestionale per macchine, brand e optional</p>
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-lg" type="button">Dashboard</a>
    </div>
</div>

@endsection