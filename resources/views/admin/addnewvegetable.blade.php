<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Add Vegetable</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

        /* Form Polish */
        .form-label {
            font-weight: 600;
            color: #495057;
            font-size: 0.9rem;
        }
        .form-control {
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid #dee2e6;
        }
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        }

        .btn-custom {
            background: #28a745;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            transition: all 0.2s;
        }
        .btn-custom:hover {
            background: #218838;
            transform: translateY(-2px);
        }
    </style>
</head> 

<body>

    @include('admin.layouts.sidepannel')

    <!-- Main Content -->
    <div class="content">

        <h2 class="fw-bold text-dark mb-4">Add New Vegetable</h2>

        <div class="card p-4">
            <form action="{{ route('addnewvegetable') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Vegetable Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-carrot"></i></span>
                            <input type="text" name="name" class="form-control" required placeholder="e.g. Tomato">
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Price (₹)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light">₹</span>
                            <input type="number" name="price" class="form-control" required placeholder="0.00">
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity (Kg)</label>
                    <div class="input-group">
                        <input type="number" name="quantity" class="form-control" required placeholder="Available stock">
                        <span class="input-group-text bg-light">Kg</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Main Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Additional Images (Optional)</label>
                    <input type="file" name="images[]" class="form-control" multiple>
                    <div class="form-text text-muted">You can select multiple images to create a gallery.</div>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-custom px-4" type="submit">
                        <i class="fas fa-plus-circle me-2"></i>Add Vegetable
                    </button>
                </div>
            </form>

        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>