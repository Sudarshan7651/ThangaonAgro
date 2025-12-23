<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            background: #f8f9fa;
        }
        /* Override default card to be cleaner */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.2s;
        }
        
        /* Stat Cards */
        .stat-card {
            padding: 25px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        .stat-card h6 {
            color: #888;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        .stat-card h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin: 10px 0 0;
        }
        .stat-icon {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 3rem;
            opacity: 0.1;
        }
        .stat-card.blue { border-left: 5px solid #4e73df; }
        .stat-card.green { border-left: 5px solid #1cc88a; }
        .stat-card.red { border-left: 5px solid #e74a3b; }

        /* Charts */
        .chart-box {
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 400px; /* Fixed height for consistency */
        }

        /* Table */
        .table thead th {
            border-top: none;
            background-color: #f8f9fc;
            color: #888;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
        }
        .badge {
            font-weight: 500;
            padding: 0.5em 0.8em;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    @include('admin.layouts.sidepannel')

    <div class="content p-4">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark">Dashboard Overview</h2>
             <span class="text-muted">{{ date('F j, Y') }}</span>
        </div>

        <!-- Statistics Row -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card stat-card blue">
                    <i class="fas fa-shopping-cart stat-icon text-primary"></i>
                    <h6>Orders Received</h6>
                    <h2>{{ $orders->count() }}</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card stat-card green">
                    <i class="fas fa-check-circle stat-icon text-success"></i>
                    <h6>Orders Confirmed</h6>
                    <h2>{{ $orders->where('status', 'confirmed')->count() }}</h2>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card stat-card red">
                    <i class="fas fa-times-circle stat-icon text-danger"></i>
                    <h6>Canceled Orders</h6>
                    <h2>{{ $orders->where('status', 'canceled')->count() }}</h2>
                </div>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="row g-4 mb-5">
            <div class="col-xl-8 col-lg-7">            
                <div class="chart-box">
                    <h5 class="fw-bold mb-4">Sales & Revenue</h5>
                    <div style="height: 300px;">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="chart-box">
                    <h5 class="fw-bold mb-4">Most Sold Vegetables</h5>
                    <div style="height: 300px; display: flex; justify-content: center;">
                        <canvas id="mostSoldChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
     
        <!-- Recent Orders -->
        <div class="card p-4">
            <h4 class="fw-bold mb-3">Recent Orders</h4>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Business Name</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($recents as $recent)
                            <tr>
                                <td class="fw-bold">#{{ $recent->id }}</td>
                                <td>{{ $recent->businessname }}</td>
                                <td>{{ $recent->contact }}</td>
                                <td>{{ Str::limit($recent->delivery_location, 20) }}</td>
                                <td>
                                    @php
                                        $badgeClass = 'bg-secondary';
                                        if($recent->status == 'confirmed') $badgeClass = 'bg-success';
                                        elseif($recent->status == 'pending') $badgeClass = 'bg-warning text-dark';
                                        elseif($recent->status == 'canceled') $badgeClass = 'bg-danger';
                                    @endphp
                                    <span class="badge rounded-pill {{ $badgeClass }}">{{ ucfirst($recent->status) }}</span>
                                </td>
                                <td>{{ $recent->created_at->format('M d, Y') }}</td>
                                <td>
                                    <!-- Optional: Add View button if detail page exists -->
                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">No recent orders found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// ===== Sales & Revenue Chart =====
const salesCtx = document.getElementById('salesChart').getContext('2d');

const monthlySales = @json(array_values($monthlySales ?? [])); 
const monthlyRevenue = @json(array_values($monthlyRevenue ?? []));

const monthLabels = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

new Chart(salesCtx, {
    type: 'line', // Changed to line for better trend visualization
    data: {
        labels: monthLabels.slice(0, monthlyRevenue.length),
        datasets: [
            {
                label: 'Revenue (₹)',
                data: monthlyRevenue,
                backgroundColor: 'rgba(28, 200, 138, 0.1)',
                borderColor: '#1cc88a',
                borderWidth: 2,
                tension: 0.4, // Smooth curves
                fill: true
            },
            {
                label: 'Orders',
                data: monthlySales, // Assuming you might have sales count data, otherwise reusing labels array was weird in original code. 
                // Note: Original code used 'monthLabels' for data?? That was likely a bug. 
                // I will assume monthlySales IS the data.
                backgroundColor: 'rgba(78, 115, 223, 0.1)',
                borderColor: '#4e73df',
                borderWidth: 2,
                tension: 0.4,
                fill: true,
                hidden: true // Hide by default as scale difference might be huge
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { 
            legend: { position: 'top' },
        },
        scales: { 
            y: { 
                beginAtZero: true,
                grid: { borderDash: [2, 4] } 
            },
            x: {
                grid: { display: false }
            }
        }
    }
});

// ===== Most Sold Vegetables Pie Chart =====
const pieCtx = document.getElementById('mostSoldChart').getContext('2d');

const vegNames = @json($mostSoldVegetables->pluck('name'));
const vegQuantity = @json($mostSoldVegetables->pluck('total_quantity'));

new Chart(pieCtx, {
    type: 'doughnut', // Changed to doughnut for modern look
    data: {
        labels: vegNames,
        datasets: [{
            data: vegQuantity,
            backgroundColor: [
                '#4e73df', '#1cc88a', '#36b9cc', '#f6c23e',
                '#e74a3b', '#858796', '#fd7e14', '#6f42c1'
            ],
            hoverOffset: 4,
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { position: 'bottom', labels: { usePointStyle: true } },
            tooltip: { enabled: true }
        },
        cutout: '70%'
    }
});
</script>

</body>
</html>
