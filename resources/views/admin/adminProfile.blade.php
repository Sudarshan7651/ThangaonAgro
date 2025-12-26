<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - Veggie Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f8f9fa;
            min-height: 100vh;
        }

        .content {
            padding: 20px;
        }

        /* Profile Card */
        .profile-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            background: #fff;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .profile-header {
            background: #2c3e50;
            padding: 40px 30px;
            text-align: center;
            color: white;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2.5rem;
            color: #2c3e50;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .profile-name {
            font-size: 1.6rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .profile-role {
            font-size: 0.9rem;
            opacity: 0.85;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Info Section */
        .info-section {
            padding: 30px;
        }

        .info-row {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-right: 15px;
            background: #f8f9fa;
            color: #495057;
        }

        .info-label {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 3px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .info-value {
            font-size: 1rem;
            font-weight: 600;
            color: #212529;
        }

        .info-value.not-provided {
            color: #999;
            font-style: italic;
            font-weight: 400;
        }

        /* Edit Button */
        .btn-edit {
            padding: 4px 12px;
            font-size: 0.8rem;
            border-radius: 6px;
            border: 1px solid #e9ecef;
            background: white;
            color: #495057;
            transition: all 0.2s;
        }

        .btn-edit:hover {
            background: #f8f9fa;
            border-color: #2c3e50;
            color: #2c3e50;
        }

        .btn-edit.btn-add {
            background: #28a745;
            color: white;
            border-color: #28a745;
        }

        .btn-edit.btn-add:hover {
            background: #218838;
            border-color: #218838;
        }

        /* Stats Cards */
        .stat-card {
            border: 1px solid #e9ecef;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            background: white;
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .stat-icon {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #495057;
        }

        /* Stat Icon Colors */
        .stat-icon.purple { color: #9C27B0; }
        .stat-icon.blue { color: #2196F3; }
        .stat-icon.green { color: #28a745; }
        .stat-icon.orange { color: #FF9800; }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #212529;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Page Title */
        .page-title {
            color: #212529;
            margin-bottom: 1.5rem;
        }

        .section-title {
            color: #212529;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        /* Modal */
        .modal-content {
            border-radius: 12px;
            border: none;
        }

        .modal-header {
            background: #2c3e50;
            color: white;
            border-radius: 12px 12px 0 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .content { padding: 15px; }
            .profile-avatar { width: 80px; height: 80px; font-size: 2rem; }
            .profile-name { font-size: 1.3rem; }
            .stat-value { font-size: 1.75rem; }
        }
    </style>
</head>

<body>
  @include('admin.layouts.sidepannel')

    <!-- Main Content -->
    <div class="content">

        <h2 class="fw-bold page-title">
            <i class="fas fa-user-circle me-2"></i>My Profile
        </h2>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Profile Card -->
        <div class="profile-card">
            <div class="profile-header">
                <div class="profile-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <h1 class="profile-name">{{ $user->businessName }}</h1>
                <p class="profile-role">
                    <i class="fas fa-shield-alt me-2"></i>{{ ucfirst($user->role) }}
                </p>
            </div>

            <div class="info-section">
                <div class="info-row">
                    <div class="info-icon">
                        <i class="fas fa-id-card"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="info-label">User ID</div>
                        <div class="info-value">#{{ $user->id }}</div>
                    </div>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="info-label">Business Name</div>
                        <div class="info-value">{{ $user->businessName }}</div>
                    </div>
                    <button class="btn btn-edit" data-bs-toggle="modal" data-bs-target="#editModal" onclick="setEditField('businessName', '{{ $user->businessName }}')">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="info-label">Email Address</div>
                        <div class="info-value {{ !$user->email ? 'not-provided' : '' }}">
                            {{ $user->email ?? 'Not provided' }}
                        </div>
                    </div>
                    <button class="btn btn-edit {{ !$user->email ? 'btn-add' : '' }}" data-bs-toggle="modal" data-bs-target="#editModal" onclick="setEditField('email', '{{ $user->email ?? '' }}')">
                        <i class="fas {{ !$user->email ? 'fa-plus' : 'fa-edit' }}"></i> {{ !$user->email ? 'Add' : 'Edit' }}
                    </button>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="info-label">Mobile Number</div>
                        <div class="info-value {{ !$user->mobile ? 'not-provided' : '' }}">
                            {{ $user->mobile ?? 'Not provided' }}
                        </div>
                    </div>
                    <button class="btn btn-edit {{ !$user->mobile ? 'btn-add' : '' }}" data-bs-toggle="modal" data-bs-target="#editModal" onclick="setEditField('mobile', '{{ $user->mobile ?? '' }}')">
                        <i class="fas {{ !$user->mobile ? 'fa-plus' : 'fa-edit' }}"></i> {{ !$user->mobile ? 'Add' : 'Edit' }}
                    </button>
                </div>

                <div class="info-row">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="info-label">Address</div>
                        <div class="info-value {{ !$user->address ? 'not-provided' : '' }}">
                            {{ $user->address ?? 'Not provided' }}
                        </div>
                    </div>
                    <button class="btn btn-edit {{ !$user->address ? 'btn-add' : '' }}" data-bs-toggle="modal" data-bs-target="#editModal" onclick="setEditField('address', '{{ $user->address ?? '' }}')">
                        <i class="fas {{ !$user->address ? 'fa-plus' : 'fa-edit' }}"></i> {{ !$user->address ? 'Add' : 'Edit' }}
                    </button>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <h4 class="fw-bold section-title">
            <i class="fas fa-chart-line me-2"></i>Account Statistics
        </h4>

        <div class="row g-3">
            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon purple">
                        <i class="fas fa-carrot"></i>
                    </div>
                    <div class="stat-value">{{ $totalVegetables }}</div>
                    <div class="stat-label">Vegetables</div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon blue">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="stat-value">{{ $totalOrders }}</div>
                    <div class="stat-label">Total Orders</div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon green">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <div class="stat-value">{{ $confirmedOrders }}</div>
                    <div class="stat-label">Confirmed</div>
                </div>
            </div>

            <div class="col-md-3 col-6">
                <div class="stat-card">
                    <div class="stat-icon orange">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-value">{{ $pendingOrders }}</div>
                    <div class="stat-label">Pending</div>
                </div>
            </div>
        </div>

    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>Edit Profile Information
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('updateProfile') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" name="field" id="editField">
                        
                        <div class="mb-3">
                            <label for="editValue" class="form-label fw-bold" id="editLabel">Value</label>
                            <input type="text" class="form-control" name="value" id="editValue" required>
                            <small class="text-muted" id="editHint"></small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function setEditField(field, currentValue) {
            document.getElementById('editField').value = field;
            document.getElementById('editValue').value = currentValue;
            
            const labels = {
                'businessName': 'Business Name',
                'email': 'Email Address',
                'mobile': 'Mobile Number',
                'address': 'Address'
            };
            
            const hints = {
                'businessName': 'Enter your business name',
                'email': 'Enter a valid email address',
                'mobile': 'Enter your mobile number (10 digits)',
                'address': 'Enter your complete address'
            };
            
            document.getElementById('editLabel').textContent = labels[field] || 'Value';
            document.getElementById('editHint').textContent = hints[field] || '';
            
            // Set input type
            if (field === 'email') {
                document.getElementById('editValue').type = 'email';
            } else if (field === 'mobile') {
                document.getElementById('editValue').type = 'tel';
            } else {
                document.getElementById('editValue').type = 'text';
            }
        }
    </script>
</body>
</html>
