<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Orders - SuperAdmin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f8f9fa;
        }

        .content {
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

        /* Status Badges */
        .status-badge {
            padding: 0.4em 0.8em;
            border-radius: 50rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .bg-pending { background-color: #fff3cd !important; color: #856404; }
        .bg-confirmed { background-color: #d4edda !important; color: #155724; }
        .bg-cancelled { background-color: #f8d7da !important; color: #721c24; }
        
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

        /* WhatsApp Link */
        .whatsapp-link {
            color: #25D366;
            transition: transform 0.2s; 
            display: inline-block;
        }
        .whatsapp-link:hover {
            transform: scale(1.2);
            color: #128c7e;
        }

        /* Trader Badge */
        .trader-badge {
            display: inline-block;
            padding: 0.25rem 0.6rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-left: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .content { padding: 15px; }
            .btn-text { display: none; }
        }
    </style>
</head>

<body>
  @include('superadmin.sidebar')

    <!-- Main Content -->
    <div class="content">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold text-dark mb-0">All Orders from All Traders</h2>
            <div class="badge bg-primary fs-6">Total: {{ $orders->count() }}</div>
        </div>

        <div class="card p-4">

            <!-- Filter Section -->
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                <form action="{{ route('superadmin.orders') }}" method="GET" class="d-flex align-items-center gap-2">
                    <div class="input-group">
                        <span class="input-group-text bg-light text-muted border-end-0"><i class="fas fa-filter"></i></span>
                        <select name="vegetable" id="vegetable_filter" class="form-select border-start-0 ps-0" style="max-width: 200px;" onchange="this.form.submit()">
                            <option value="">All Vegetables</option>
                            @foreach($vegetables as $veg)
                                <option value="{{ $veg->name }}" {{ request('vegetable') == $veg->name ? 'selected' : '' }}>
                                    {{ $veg->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary px-3 d-none d-md-inline-block">Filter</button>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Trader</th>
                            <th>Business Details</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Info</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="text-muted fw-bold">{{ $loop->iteration }}</td>
                            <td>
                                @if($order->trader)
                                    <div>
                                        <span class="fw-bold d-block text-dark">{{ $order->trader->businessName }}</span>
                                        <small class="text-muted">{{ $order->trader->name }}</small>
                                    </div>
                                @else
                                    <span class="text-muted small">N/A</span>
                                @endif
                            </td>
                            <td>
                                <span class="fw-bold d-block text-dark">{{ $order->businessname }}</span>
                                <small class="text-muted">Order ID: {{ $order->id }}</small>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    {{ $order->contact }} 
                                    <a href="https://wa.me/91{{ $order->contact }}" target="_blank" class="whatsapp-link" title="Chat on WhatsApp">
                                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                                    </a>
                                </div>
                            </td> 
                            <td><span class="text-truncate d-inline-block" style="max-width: 150px;">{{ $order->delivery_location }}</span></td>
                            <td>
                                @php
                                    $statusClass = 'bg-secondary text-white';
                                    if(strtolower($order->status) == 'confirmed') $statusClass = 'bg-confirmed';
                                    elseif(strtolower($order->status) == 'pending') $statusClass = 'bg-pending';
                                    elseif(strtolower($order->status) == 'canceled') $statusClass = 'bg-cancelled';
                                @endphp
                                <span class="status-badge {{ $statusClass }}">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-info rounded-pill" data-bs-toggle="modal" data-bs-target="#details{{ $order->id }}">
                                    <i class="fas fa-eye me-1"></i> Details
                                </button>
                            </td>
                            <td class="text-end">
                                <div class="d-inline-flex gap-1">
                                    @if($order->status === 'confirmed')
                                        <span class="badge bg-success">
                                            <i class="fas fa-check-circle"></i> Confirmed
                                        </span>
                                    @elseif($order->status === 'canceled')
                                        <span class="badge bg-danger">
                                            <i class="fas fa-times-circle"></i> Canceled
                                        </span>
                                    @else
                                        <span class="badge bg-warning text-dark">
                                            <i class="fas fa-clock"></i> Pending
                                        </span>
                                    @endif
                                </div>
                            </td>

                            <!-- MODAL -->
                            <div class="modal fade" id="details{{ $order->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content border-0 shadow-lg">

                                        <!-- Header -->
                                        <div class="modal-header bg-light">
                                            <h5 class="modal-title fw-bold text-dark">
                                                <i class="fas fa-receipt me-2 text-primary"></i>Order #{{ $order->id }} Details
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <!-- Body -->
                                        <div class="modal-body p-4">

                                            <div class="row g-4">
                                                <!-- Customer Info -->
                                                <div class="col-md-6 border-end">
                                                    <h6 class="text-uppercase text-muted fw-bold small mb-3">Customer Information</h6>
                                                    
                                                    <div class="mb-3">
                                                        <small class="text-muted d-block">Business Name</small>
                                                        <span class="fw-semibold fs-5">{{ $order->businessname }}</span>
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <small class="text-muted d-block">Contact</small>
                                                        <span class="fw-medium"><i class="fas fa-phone-alt me-2 text-muted"></i>{{ $order->contact }}</span>
                                                    </div>

                                                    <div class="mb-3">
                                                        <small class="text-muted d-block">Delivery Location</small>
                                                        <span class="fw-medium"><i class="fas fa-map-marker-alt me-2 text-muted"></i>{{ $order->delivery_location }}</span>
                                                    </div>

                                                    <div class="mb-3">
                                                        <small class="text-muted d-block">Order Status</small>
                                                        <span class="status-badge {{ $statusClass }}">{{ ucfirst($order->status) }}</span>
                                                    </div>

                                                    <div class="mb-0">
                                                        <small class="text-muted d-block">Trader</small>
                                                        @if($order->trader)
                                                            <span class="fw-semibold">{{ $order->trader->businessName }}</span>
                                                            <br><small class="text-muted">Owner: {{ $order->trader->name }}</small>
                                                        @else
                                                            <span class="text-muted">N/A</span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- Product Info -->
                                                <div class="col-md-6">
                                                    <h6 class="text-uppercase text-muted fw-bold small mb-3">Product Details</h6>
                                                    
                                                    @if($order->vegetable)
                                                        <div class="card bg-light border-0 p-3 mb-3">
                                                            <div class="d-flex align-items-center gap-3">
                                                                @if($order->vegetable->image)
                                                                    <img src="{{ asset('images/' . $order->vegetable->image) }}" class="rounded shadow-sm" style="width: 70px; height: 70px; object-fit: cover;">
                                                                @else
                                                                     <div class="bg-white rounded d-flex align-items-center justify-content-center text-muted" style="width: 70px; height: 70px; border:1px solid #ddd;">No Img</div>
                                                                @endif
                                                                <div>
                                                                    <h5 class="mb-1 fw-bold">{{ $order->vegetable->name }}</h5>
                                                                    <div class="text-success fw-bold">₹{{ $order->vegetable->price }} <small class="text-muted fw-normal">/ Unit</small></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="alert alert-light border d-flex justify-content-between align-items-center">
                                                            <span class="text-muted">Quantity Requested</span>
                                                            <span class="fw-bold fs-5">{{ $order->vegetable->quantity }} Kg</span> 
                                                        </div>
                                                    @else
                                                        <div class="alert alert-warning d-flex align-items-center">
                                                            <i class="fas fa-exclamation-triangle me-2"></i>
                                                            <div>
                                                                <strong>Vegetable Not Found</strong><br>
                                                                <small>The vegetable data might have been deleted.</small>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Footer -->
                                        <div class="modal-footer bg-light border-0">
                                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($orders->isEmpty())
                <div class="text-center py-5 text-muted">
                    <i class="fas fa-shopping-basket fa-3x mb-3 text-secondary opacity-50"></i>
                    <p class="fs-5">No orders found.</p>
                </div>
            @endif

        </div>

    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
