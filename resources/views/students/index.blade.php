@extends('layout')

@section('content')
<h2>All Students</h2>

<form method="GET" action="{{ route('students.index') }}" class="mb-3 d-flex">
    <input type="text" name="search" class="form-control me-2"
           placeholder="Search students..."
           value="{{ request('search') }}">
    <button type="submit" class="btn btn-info">Search</button>
</form>

<a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add Student</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Class</th>
      <th>Photo</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($students as $student)
    <tr>
      <td>{{ $student->name }}</td>
      <td>{{ $student->email }}</td>
      <td>{{ $student->class }}</td>
      <td>
        @if ($student->photo)
          <img src="{{ asset('storage/'.$student->photo) }}" width="60">
        @endif
      </td>
      <td>
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
          @csrf @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </form>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" class="text-center">No students found</td>
    </tr>
    @endforelse
  </tbody>
</table>

<!--Pagination Link -->
{{ $students->appends(['search' => request('search')])->links() }}
@endsection
