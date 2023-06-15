@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row my-2">
        <h1>Report</h1>
    </div>
    <div class="row my-1">
        <div class="card">
            <div class="card-body">
                <canvas id="chBar"></canvas>
            </div>
        </div>
    </div>



</div>

@endsection
<script>
    var colors = ['#007bff','#28a745','#333333','#c3e6cb','#dc3545','#6c757d'];
var chBar = document.getElementById("chBar");
if (chBar) {
  new Chart(chBar, {
  type: 'bar',
  data: {
    labels: ["S", "M", "T", "W", "T", "F", "S"],
    datasets: [{
      data: [589, 445, 483, 503, 689, 692, 634],
      backgroundColor: colors[0]
    },
    {
      data: [639, 465, 493, 478, 589, 632, 674],
      backgroundColor: colors[1]
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        barPercentage: 0.4,
        categoryPercentage: 0.5
      }]
    }
  }
  });
}

</script>
