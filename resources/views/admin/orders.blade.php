<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders - Veggie Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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
        .status-badge {
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 0.85rem;
        }
        .pending { background: #ffc107; color: #000; }
        .delivered { background: #28a745; color: #fff; }
        .cancelled { background: #dc3545; color: #fff; }

      

    </style>
</head>

<body>
  @include('admin.layouts.sidepannel')

    <!-- Main Content -->
    <div class="content">

        <h2 class="mb-4">Orders List</h2>

        <div class="card p-3">

<div class="table-responsive">
    <form action="{{ route('orders') }}" method="GET" class="mb-3 d-flex align-items-center gap-2">
    <label for="vegetable_filter" class="fw-bold">Filter</label>
    <select name="vegetable" id="vegetable_filter" class="form-select w-auto">
        <option value="">All Vegetables</option>
        @foreach($vegetables as $veg)
            <option value="{{ $veg->name }}" {{ request('vegetable') == $veg->name ? 'selected' : '' }}>
                {{ $veg->name }}
            </option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Filter</button>
</form>

<table class="table table-hover align-middle" >
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Business Name</th>
            <th>Contact</th>
            <th>Delivery Location</th>
            <th>Status</th>
            <th>Action</th>
            <th>Details</th>
            <th>invoice</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $order->businessname }}</td>
            <td>{{ $order->contact }} <span>--></span> <a href="https://wa.me/91{{ $order->contact }}" target="_blank">
    <i class="fa-brands fa-whatsapp" style="font-size: 30px; color: green;"></i>
</a></td> 
            <td>{{ $order->delivery_location }}</td>
            <td>{{ $order->status }}</td>
            <td><a class="btn btn-sm btn-primary mt-2" href="{{ route('confirmOrder', $order->id)}}" onclick="return confirm('Are you sure you want to confirm this order?')">Confirm</a>
            <a class="btn btn-sm btn-danger mt-2" href="{{ route('cancelOrder', $order->id)}}">Cancel</a>
           </td>
            <td><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#details{{ $order->id }}">View Details</button>
           </td>
            <td>

                @if($order->status === 'confirmed')
                    <a class="btn btn-sm btn-primary" href="{{ route('invoice', $order->id)}}">View Invoice</a>
                @else
                    <button class="btn btn-sm btn-secondary" disabled>Not Available</button>
                @endif
            </td>
    


<!-- MODAL -->
<!-- MODAL -->
<div class="modal fade" id="details{{ $order->id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">

            <!-- Header -->
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title">Order Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body">

                @php
                    $veg = $vegetables->where('vegetable_id', $order->vegetable_id)->first();
                @endphp

                <div class="row">

                    <!-- Left Side -->
                    <div class="col-md-6 mb-3">
                        <h5 class="fw-bold mb-3">Customer Information</h5><hr>
                        <p class="mb-2"><strong>Business Name:</strong> {{ $order->businessname }}</p>
                        <p class="mb-2"><strong>Contact:</strong> {{ $order->contact }}</p>
                        <p class="mb-2"><strong>Delivery Location:</strong> {{ $order->delivery_location }}</p>
                        <p class="mb-2"><strong>Status:</strong> {{ $order->status }}</p>
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-6 mb-3">
                        <h5 class="fw-bold mb-3">Vegetable Details</h5><hr>
                        @if($veg)
                            <div class="mb-3">
                                <img src="{{ asset('images/' . $veg->image) }}" 
                                     class="img-fluid rounded shadow-sm"
                                     style="max-width: 300px;">
                            </div>
                            <h6 class="fw-bold">{{ $veg->name }}</h6>
                            <p class="mb-2"><strong>Quantity:</strong> {{ $veg->quantity }} Kg</p>
                            <p class="mb-2"><strong>Price:</strong> ₹{{ $veg->price }}</p>

                            <a class="btn btn-primary btn-sm" href="{{ route('edit', $veg->vegetable_id) }}">
                                Edit
                            </a>

                        @else
                            <p class="text-danger">Vegetable details not found.</p>
                        @endif
                    </div>

                </div>

            </div>

            <!-- Footer -->
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
            </div>

        </div>
    </div>
</div>


        </tr>
        @endforeach
    </tbody>
</table>
</div>


        </div>

    </div>
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
