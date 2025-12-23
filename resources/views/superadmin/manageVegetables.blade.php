




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Manage Dashboard Vegetable</title>

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
    <h1>manageVegetables</h1>
    
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Admin Id</th>
                        <th>Vegetable Name</th>
                        <th>Price (₹)</th>
                        <th>Quantity (Kg)</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($vegetables as $index => $veg)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$veg->admin_id}}</td>
                        <td>{{$veg->name}}</td>
                        <td>{{$veg->price}}</td>
                        <td>{{$veg->quantity}} Kg</td>
                        <td>
                            <a class="btn btn-sm btn-primary mt-2" href="{{ route('edit', $veg->vegetable_id)}}">Edit</a>
                         <form action="{{ route('superadmin.deleteVegetable', $veg->vegetable_id)}}" method="POST" style="display:inline;">  @csrf @method('PUT') <button type="submit" class="btn btn-sm btn-danger mt-2">Delete</button>  </form>
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
