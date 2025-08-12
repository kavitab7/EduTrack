@extends('layout')

@section('content')
<h2>Edit Student</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Please fix the following errors:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $student->name) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', $student->email) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Class</label>
        <input type="text" name="class" value="{{ old('class', $student->class) }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Photo</label><br>
        @if ($student->photo)
            <img src="{{ asset('storage/'.$student->photo) }}" width="80" class="mb-2">
        @endif
        <input type="file" name="photo" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
