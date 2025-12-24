<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Vegetable - ThangaonAgro Admin</title>

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

        /* Content Area (Sidebar is handled by sidepannel partial) */
        .content {
            padding: 40px;
        }

        /* Page Title */
        .page-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 30px;
            font-size: 1.8rem;
            border-left: 5px solid var(--primary);
            padding-left: 15px;
        }

        /* Card Styling */
        .custom-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: none;
            overflow: hidden;
        }

        .card-body {
            padding: 40px;
        }

        /* Form Styling */
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #dee2e6;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
        }

        /* Image Preview */
        .img-preview-container {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 15px;
            border: 1px dashed #dee2e6;
            display: inline-block;
        }

        .veg-img {
            width: 120px;
            height: 120px;
            border-radius: 12px;
            object-fit: cover;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        /* Buttons */
        .btn-update {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-update:hover {
            background-color: var(--primary-dark);
            color: white;
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.3);
            transform: translateY(-2px);
        }

        .btn-cancel {
            background-color: #f1f3f5;
            color: #495057;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            border: none;
        }

        .btn-cancel:hover {
            background-color: #e9ecef;
            color: #212529;
        }

    </style>
</head>

<body>

    <!-- Sidebar -->
    @include('admin.layouts.sidepannel')


    <!-- Main Content -->
    <div class="content">

        <h2 class="page-title">Edit Vegetable</h2>

        <div class="row">
            <div class="col-lg-8">
                <div class="custom-card">
                    <div class="card-body">
                        <form action="{{ route('changeupdateAdminVegetable', $vegetable->vegetable_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row g-4">
                                <!-- Name -->
                                <div class="col-12">
                                    <label class="form-label">Vegetable Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $vegetable->name }}" placeholder="e.g. Fresh Carrot" required>
                                </div>

                                <!-- Price & Quantity -->
                                <div class="col-md-6">
                                    <label class="form-label">Price (₹)</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light border-end-0 text-muted">₹</span>
                                        <input type="number" name="price" class="form-control border-start-0 ps-0" step="0.01" value="{{ $vegetable->price }}" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Quantity</label>
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control border-end-0" value="{{ $vegetable->quantity }}" required>
                                        <span class="input-group-text bg-light border-start-0 text-muted">Kg</span>
                                    </div>
                                </div>

                                <!-- Current Image -->
                                <div class="col-12 container-fluid">
                                    <label class="form-label d-block">Current Image</label>
                                    @if($vegetable->image)
                                        <div class="img-preview-container">
                                            <img src="{{ asset('images/' . $vegetable->image) }}" alt="{{ $vegetable->name }}" class="veg-img">
                                        </div>
                                    @else
                                        <div class="alert alert-secondary d-inline-block p-3 m-0 rounded-3">
                                            <i class="fas fa-image me-2"></i> No image uploaded
                                        </div>
                                    @endif
                                </div>

                                <!-- Upload New Image -->
                                <div class="col-12">
                                    <label class="form-label">Upload New Image <span class="text-muted fw-normal">(Optional)</span></label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                    <small class="text-muted mt-1 d-block"><i class="fas fa-info-circle me-1"></i> Recommended size: 500x500px </small>
                                </div>

                                <!-- Actions -->
                                <div class="col-12 mt-4 pt-3 border-top d-flex align-items-center gap-3">
                                    <button class="btn-update" type="submit">
                                        <i class="fas fa-save me-2"></i> Update Vegetable
                                    </button>
                                    <a href="{{ route('vegetableslist') }}" class="btn-cancel">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>