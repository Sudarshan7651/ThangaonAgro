




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Vegetable</title>

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
        .btn-custom {
            background: #28a745;
            color: white;
        }
        .btn-custom:hover {
            background: #218838;
        }
    </style>


</head> 

<body>

    @include('superadmin.sidebar')

<div class="content">
<div class="container">
    <h1>All Traders</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($traders as $trader)
                <tr>
                    <td>{{ $trader->id }}</td>
                    <td>{{ $trader->businessName }}</td>
                    <td>{{ $trader->mobile }}</td>
                    <td>{{ $trader->email }}</td>
                    <td>
                        <a href="{{ route('superadmin.traders.edit', $trader->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('superadmin.traders.delete', $trader->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
