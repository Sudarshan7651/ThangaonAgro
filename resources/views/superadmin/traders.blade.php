

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traders Management - ThangaonAgro</title>

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
            margin-left: 250px; /* Matches desktop sidebar width */
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
                padding-top: 80px; /* Space for mobile toggle */
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
        }
        
        .btn-edit {
            background-color: #e8f5e9;
            color: var(--primary);
            border: 1px solid rgba(25, 135, 84, 0.2);
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

    </style>
</head> 

<body>

    @include('superadmin.sidebar')

    <div class="content">
        <div class="container-fluid">
            
            <div class="page-title">
                <span>Manage Traders</span>
                <span class="badge bg-success-subtle text-success fs-6 fw-normal px-3 py-2 rounded-pill">{{ count($traders) }} Registered</span>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4 border-0 shadow-sm" role="alert">
                    <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="custom-card">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col" width="5%">ID</th>
                                <th scope="col" width="25%">Trader / Business Name</th>
                                <th scope="col" width="20%">Mobile</th>
                                <th scope="col" width="35%">Address</th>
                                <th scope="col" width="15%" class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($traders as $trader)
                                <tr>
                                    <td><span class="fw-bold text-muted">#{{ $trader->id }}</span></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; color: var(--primary);">
                                                <i class="fas fa-user-tie"></i>
                                            </div>
                                            <div>
                                                <span class="fw-bold d-block text-dark">{{ $trader->businessName }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $trader->mobile }}</td>
                                    <td><span class="text-muted"><i class="fas fa-map-marker-alt me-1 opacity-50"></i> {{ $trader->address }}</span></td>
                                    <td class="text-end">
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('superadmin.traders.edit', $trader->id) }}" class="btn-action btn-edit" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('superadmin.traders.delete', $trader->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-action btn-delete" onclick="return confirm('Are you sure you want to delete this trader permanently?')" title="Delete">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="fas fa-users-slash fa-3x mb-3 opacity-25"></i>
                                            <p>No registered traders found.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
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
