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
    <h1>Edit Trader</h1>

    <form action="{{ route('superadmin.traders.update', $trader->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $trader->name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mobile</label>
            <input type="text" name="mobile" value="{{ $trader->mobile }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" value="{{ $trader->email }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update Trader</button>
    </form>
</div>

</div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
