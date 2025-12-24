




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Vegetables - SuperAdmin</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary: #198754;
            --primary-dark: #146c43;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-light);
            color: #555;
        }

        /* Content Area */
        .content {
            margin-left: 250px;
            padding: 40px;
            transition: all 0.3s;
        }

        /* Page Title */
        .page-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
            font-size: 1.8rem;
            border-left: 5px solid var(--primary);
            padding-left: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* Card Styling */
        .custom-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: none;
            overflow: hidden;
            padding: 20px;
        }

        /* Table Styling */
        .table {
            vertical-align: middle;
        }

        .table thead th {
            font-weight: 600;
            color: #2c3e50;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 15px;
            border-bottom: 2px solid #e9ecef;
            background-color: #f8f9fa;
        }

        .table tbody td {
            font-size: 0.95rem;
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
        }

        /* Responsive Mobile Styles */
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
                padding: 20px;
                padding-top: 80px;
            }
        }

        /* Action Buttons */
        .btn-action {
            width: 35px;
            height: 35px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-size: 0.9rem;
            transition: all 0.2s;
            border: none;
        }
        
        .btn-edit {
            background-color: #e8f5e9;
            color: var(--primary);
            border: 1px solid rgba(25, 135, 84, 0.2);
            text-decoration: none;
        }

        .btn-edit:hover {
            background-color: var(--primary);
            color: #fff;
        }

        .btn-delete {
            background-color: #fee2e2;
            color: #dc3545;
            border: 1px solid rgba(220, 53, 69, 0.2);
        }

        .btn-delete:hover {
            background-color: #dc3545;
            color: #fff;
        }

        .badge-price {
            background-color: #fff3cd;
            color: #856404;
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: 500;
        }

        .badge-qty {
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 5px 10px;
            border-radius: 6px;
            font-weight: 500;
        }
    </style>
</head> 

<body>

    @include('superadmin.sidebar')

    <div class="content">
        <div class="container-fluid">
            
            <div class="page-title">
                <span>Manage Vegetables</span>
                <span class="badge bg-success-subtle text-success fs-6 fw-normal px-3 py-2 rounded-pill">{{ count($vegetables) }} Items</span>
            </div>

            <div class="custom-card">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Admin Id</th>
                                <th>Vegetable Name</th>
                                <th>Price (₹)</th>
                                <th>Quantity (Kg)</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($vegetables as $index => $veg)
                            <tr>
                                <td><span class="text-muted fw-bold">{{$index + 1}}</span></td>
                                <td><span class="badge bg-light text-dark border">{{$veg->admin_id}}</span></td>
                                <td><span class="fw-bold text-dark">{{$veg->name}}</span></td>
                                <td><span class="badge-price">₹ {{$veg->price}}</span></td>
                                <td><span class="badge-qty">{{$veg->quantity}} Kg</span></td>
                                <td class="text-end">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('edit', $veg->vegetable_id)}}" class="btn-action btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        <form action="{{ route('superadmin.deleteVegetable', $veg->vegetable_id)}}" method="POST" class="d-inline-block">  
                                            @csrf 
                                            @method('PUT') 
                                            <button type="submit" class="btn-action btn-delete" onclick="return confirm('Are you sure you want to delete this vegetable?')" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>  
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                       
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
