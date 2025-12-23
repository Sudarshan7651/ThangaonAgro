<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetables List - Veggie Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f8f9fa;
        }
        /* Mobile adjustment for sidebar is handled in sidepannel.blade.php */

        .content {
           /* margin-left handled by sidepannel globally */
            padding: 20px;
        }

        /* Card Polish */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            background: #fff;
        }

        /* Table Aesthetics */
        .table thead th {
            background-color: #f8f9fc;
            color: #495057;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.95rem;
            border-bottom: 2px solid #eaecf4;
            white-space: nowrap;
        }
        
        .table td {
            vertical-align: middle;
            font-size: 0.95rem;
            border-color: #f1f1f4;
        }

        /* Quantity Badge */
        .quantity-badge {
            font-size: 1.1rem;
            font-weight: 700;
            padding: 8px 12px;
            min-width: 80px;
            display: inline-block;
            text-align: center;
        }

        /* Action Buttons */
        .btn-action {
            width: 32px;
            height: 32px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            margin: 0 2px;
            transition: all 0.2s;
        }
        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 3px 5px rgba(0,0,0,0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .content { padding: 15px; }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    @include('admin.layouts.sidepannel')

    <!-- Main Content -->
    <div class="content">

        <h2 class="fw-bold text-dark mb-4">Vegetables List</h2>  

        <div class="card p-4">

            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Vegetable Name</th>
                            <th>Price (₹)</th>
                            <th>Quantity (Kg)</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($vegetables as $index => $veg)
                        <tr>
                            <td class="text-muted fw-bold">{{$index + 1}}</td>
                            <td><span class="fw-bold text-dark">{{$veg->name}}</span></td>
                            <td>{{$veg->price}}</td>
                            <td><span class="badge bg-light text-dark border quantity-badge">{{$veg->quantity}} Kg</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-action btn-primary text-white" href="{{ route('edit', $veg->vegetable_id)}}" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('deletevegetableAdmin', $veg->vegetable_id)}}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this vegetable?');"> 
                                         @csrf @method('PUT') 
                                         <button type="submit" class="btn btn-action btn-danger text-white" title="Delete">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>