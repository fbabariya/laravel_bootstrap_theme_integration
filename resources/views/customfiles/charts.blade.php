
@extends('customfiles.mainlayout')
@section('title', 'charts')
@section('content')

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Direct
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Social
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-info"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>



</div>




<script>
// Get the canvas element for the area chart
var ctxArea = document.getElementById('myAreaChart').getContext('2d');

// Create a new area chart instance
var myAreaChart = new Chart(ctxArea, {
type: 'line', // Specify the type of chart (line chart in this case)
data: {
labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
datasets: [{
label: 'Earnings Overview',
data: [10000, 20000, 30000, 40000, 50000, 60000, 70000], // Example data
backgroundColor: 'rgba(78, 115, 223, 0.05)',
borderColor: 'rgba(78, 115, 223, 1)',
pointRadius: 3,
pointBackgroundColor: 'rgba(78, 115, 223, 1)',
pointBorderColor: 'rgba(78, 115, 223, 1)',
pointHoverRadius: 3,
pointHoverBackgroundColor: 'rgba(78, 115, 223, 1)',
pointHoverBorderColor: 'rgba(78, 115, 223, 1)',
pointHitRadius: 10,
pointBorderWidth: 2,
lineTension: 0.3,
}]
},
options: {
maintainAspectRatio: false, // Adjust as needed
responsive: true,
scales: {
x: {
grid: {
display: false
}
},
y: {
grid: {
display: true,
color: 'rgba(0, 0, 0, .125)',
zeroLineColor: 'rgba(0, 0, 0, .125)'
},
ticks: {
callback: function(value, index, values) {
    return '$' + value;
}
}
}
},
plugins: {
legend: {
display: false
}
}
}
});

</script>
<script>

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Roboto';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
type: 'doughnut',
data: {
labels: ["Direct", "Referral", "Social"],
datasets: [{
data: [55, 30, 15],
backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
hoverBorderColor: "rgba(234, 236, 244, 1)",
}],
},
options: {
maintainAspectRatio: false,
tooltips: {
backgroundColor: "rgb(255,255,255)",
bodyFontColor: "#858796",
borderColor: '#dddfeb',
borderWidth: 1,
xPadding: 15,
yPadding: 15,
displayColors: false,
caretPadding: 10,
},
legend: {
display: false
},
cutoutPercentage: 80,
},
});



</div>

</script>

@endsection