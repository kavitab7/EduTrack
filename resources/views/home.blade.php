@extends('layout')

@section('content')
<div class="home-banner text-white text-center d-flex flex-column justify-content-center align-items-center">
    <h1 class="display-4 fw-bold">Welcome to Student Management System</h1>
    <p class="lead">Easily manage student records, upload photos, and search your database.</p>
    <a href="{{ route('students.index') }}" class="btn btn-lg btn-light mt-3">View Students</a>
</div>

<style>
.home-banner {
   background: linear-gradient(3deg, #b7b7b7 0%, #0dcaf0 100%);
    height: 100vh; 
    border-radius: 10px;
    padding: 0 15px;
}
</style>
@endsection
