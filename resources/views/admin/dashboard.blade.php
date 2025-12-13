<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f7f9fc;
        }
        .sidebar {
            height: 100vh;
            background: #1e1e2d;
            color: #fff;
            padding-top: 30px;
            position: fixed;
            width: 250px;
        }
        .sidebar a {
            color: #b8b8c7;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar a.active {
            background: #34344a;
            color: #fff;
        }
        .content {
            margin-left: 250px;
            padding: 30px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
        .stat-card {
            padding: 25px;
            text-align: center;
        }
        .chart-box {
            height: 300px;
            background: white;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidepannel')

    <div class="content">


        <!-- Statistics Row -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card stat-card">
                    <h6>Orders Recieved last Month</h6>
                    <h2>{{ $orders->count() }}</h2>
                </div><hr>
            </div>

            <div class="col-md-3">
                <div class="card stat-card">
                    <h6>Orders Confirmed Last Month</h6>
                    <h2>{{ $orders->where('status', 'confirmed')->count() }}</h2>
                </div><hr>
            </div>
            

            <div class="col-md-3">
                <div class="card stat-card">
                    <h6>Canceled Orders</h6>
                    <h2>{{ $orders->where('status', 'canceled')->count() }}</h2>
                </div>
            </div>
        </div>

        <!-- Revenue Chart -->
        <h3 class="mt-5 mb-3">Sales & Revenue</h3>
        <div class="charts" style="display:flex;gap:30px;">
             <div class="chart-box p-3">
                     <canvas id="salesChart"></canvas>
            </div>
            <div class="chart-box p-3">
                     <canvas id="mostSoldChart"></canvas>
            </div>
       </div>

        <!-- Recent Orders -->
<h3 class="mt-5 mb-3">Recent Orders</h3>

<div class="card p-3">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Business Name</th>
                    <th>Contact</th>
                    <th>Delivery Location</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recents as $recent)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $recent->businessname }}</td>
                        <td>{{ $recent->contact }}</td>
                        <td>{{ $recent->delivery_location }}</td>
                        <td>
                            @php
                                $badgeClass = '';
                                if($recent->status == 'confirmed') $badgeClass = 'bg-success';
                                elseif($recent->status == 'pending') $badgeClass = 'bg-info';
                                elseif($recent->status == 'canceled') $badgeClass = 'bg-danger';
                            @endphp
                            <span class="badge {{ $badgeClass }} p-2">{{ $recent->status }}</span>
                        </td>
                        <td>{{ $recent->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


    </div>
    <div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// ===== Sales & Revenue Chart =====
const salesCtx = document.getElementById('salesChart').getContext('2d');

const monthlySales = @json(array_values($monthlySales ?? [])); // <-- add this in controller if not yet
const monthlyRevenue = @json(array_values($monthlyRevenue ?? []));

const monthLabels = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

new Chart(salesCtx, {
    type: 'bar',
    data: {
        labels: monthLabels.slice(0, monthlyRevenue.length),
        datasets: [
            {
                label: 'Sales (Orders)',
                data: monthLabels,
                backgroundColor: 'rgba(78,115,223,0.4)',
                borderColor: '#4e73df',
                borderWidth: 2
            },
            {
                label: 'Revenue (₹)',
                data: monthlyRevenue,
                backgroundColor: 'rgba(28,200,138,0.4)',
                borderColor: '#1cc88a',
                borderWidth: 2
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { position: 'bottom' } },
        scales: { y: { beginAtZero: true } }
    }
});

// ===== Most Sold Vegetables Pie Chart =====
const pieCtx = document.getElementById('mostSoldChart').getContext('2d');

const vegNames = @json($mostSoldVegetables->pluck('name'));
const vegQuantity = @json($mostSoldVegetables->pluck('total_quantity'));

new Chart(pieCtx, {
    type: 'pie',
    data: {
        labels: vegNames,
        datasets: [{
            label: 'Most Sold Vegetables',
            data: vegQuantity,
            backgroundColor: [
                '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e',
                '#e74a3b', '#858796', '#fd7e14', '#6f42c1'
            ],
            borderColor: '#fff',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: { position: 'bottom' },
            tooltip: { enabled: true }
        }
    }
});
</script>



</body>
</html>
