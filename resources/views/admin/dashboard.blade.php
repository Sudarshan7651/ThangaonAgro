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

             <div class="chart-box p-3">
                     <canvas id="salesChart"></canvas>
            </div>


        <!-- Recent Orders -->
        <h3 class="mt-5 mb-3">Recent Orders</h3>

        <div class="card p-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Customer</th>
                        <th>Vegetable</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1023</td>
                        <td>Rahul Sharma</td>
                        <td>Tomatoes</td>
                        <td>5 Kg</td>
                        <td><span class="badge bg-success">Delivered</span></td>
                        <td>2025-11-28</td>
                    </tr>
                    <tr>
                        <td>1024</td>
                        <td>Meera Raj</td>
                        <td>Potatoes</td>
                        <td>3 Kg</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>2025-11-29</td>
                    </tr>
                    <tr>
                        <td>1025</td>
                        <td>Varun Kumar</td>
                        <td>Carrots</td>
                        <td>2 Kg</td>
                        <td><span class="badge bg-danger">Cancelled</span></td>
                        <td>2025-11-29</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('salesChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [{
                label: 'Sales (Orders)',
                data: [30, 45, 50, 60, 55, 70, 80, 75, 90],
                borderWidth: 3,
                borderColor: '#4e73df',
                tension: 0.4,
                fill: false
            },
            {
                label: 'Revenue (₹)',
                data: [15000, 22000, 28000, 30000, 35000, 42000, 45000, 47000, 52000],
                borderWidth: 3,
                borderColor: '#1cc88a',
                tension: 0.4,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { 
                legend: { position: 'bottom' }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>



</body>
</html>
