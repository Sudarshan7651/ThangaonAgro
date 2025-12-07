<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Orders - Veggie Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>

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
        .status-badge {
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 0.85rem;
        }
        .pending { background: #ffc107; color: #000; }
        .delivered { background: #28a745; color: #fff; }
        .cancelled { background: #dc3545; color: #fff; }
    </style>
</head>

<body>
  @include('admin.layouts.sidepannel')

    <!-- Main Content -->
    <div class="content">

        <h2 class="mb-4">Special Orders</h2>

        <div class="card p-3">

<table class="table table-hover align-middle">
    <thead>
        <tr>
            <th>#Contract Farming ID</th>
            <th>Business Name</th>
            <th>Contact</th>
            <th>togrow</th>
            <th>duration</th>
            <th>monthlysupply</th>
        </tr>
    </thead>

    <tbody>
        @forelse ($contractfarmingorders as $contractfarmingorder)
            <tr>
                <td>{{ $contractfarmingorder->id }}</td>
                <td>{{ $contractfarmingorder->businessname }}</td>
                <td>{{ $contractfarmingorder->contact }}</td>
                <td>{{ $contractfarmingorder->togrow }}</td>
                <td>{{ $contractfarmingorder->duration }}</td>
                <td>{{ $contractfarmingorder->monthlysupply }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center text-muted">No Special Orders Available</td>
            </tr>
        @endforelse
    </tbody>

</table>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
