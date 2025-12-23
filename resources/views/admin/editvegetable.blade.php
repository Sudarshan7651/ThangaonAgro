<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vegetable - Veggie Admin</title>

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
        .veg-img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
   @include('admin.layouts.sidepannel')

    <!-- Main Content -->
    <div class="content">

        <h2 class="mb-4">Edit Vegetable</h2>

        <div class="card p-4">
            <form action="{{ route('changeupdateAdminVegetable', $vegetable->vegetable_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Vegetable Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $vegetable->name }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price (₹)</label>
                    <input type="number" name="price" class="form-control" step="0.01" value="{{ $vegetable->price }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity (Kg)</label>
                    <input type="number" name="quantity" class="form-control" value="{{ $vegetable->quantity }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    @if($vegetable->image)
                    <div>
                        <img src="{{ asset('images/' . $vegetable->image) }}" alt="{{ $vegetable->name }}" class="veg-img">
                    </div>
                    @else
                    <p class="text-muted">No image</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload New Image (optional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>

                <div class="d-flex gap-2">
                    <button class="btn btn-custom px-4" type="submit">Update Vegetable</button>
                    <a href="{{ route('vegetableslist') }}" class="btn btn-secondary px-4">Cancel</a>
                </div>
            </form>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
