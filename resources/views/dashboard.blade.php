@extends('layout')

@section('content')
<h1 class="mb-4">Dashboard</h1>

<div class="row">
  
    <div class="col-md-4">
        <div class="card text-white bg-info mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Students</h5>
                <h2>{{ $totalStudents }}</h2>
            </div>
        </div>
    </div>
</div>

<!-- Chart -->
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">Students Per Class</h5>
        <canvas id="studentsChart" height="100"></canvas>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('studentsChart').getContext('2d');
    const studentsChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_keys($studentsPerClass)) !!},
            datasets: [{
                label: 'Number of Students',
                data: {!! json_encode(array_values($studentsPerClass)) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection
