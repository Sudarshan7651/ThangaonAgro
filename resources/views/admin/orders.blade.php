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
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $order->businessname }}</td>
            <td>{{ $order->contact }} <span>--></span> <a href="https://wa.me/{{ $order->contact }}" target="_blank">
    <i class="fa-brands fa-whatsapp" style="font-size: 30px; color: green;"></i>
</a></td>
            <td>{{ $order->delivery_location }}</td>
            <td>{{ $order->status }}</td>
            <td><a class="btn btn-sm btn-primary" href="{{ route('confirmOrder', $order->id)}}">Confirm</a>
            <a class="btn btn-sm btn-danger" href="{{ route('cancelOrder', $order->id)}}">Cancel</a>
           </td>
            <td><button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#details{{ $order->id }}">View Details</button>
           </td>


<!-- MODAL -->
<div class="modal fade" id="details{{ $order->id }}">
    <div class="modal-dialog modal-lg">
     
        <div class="modal-content p-3" style="display: flex;flex-direction: row;">
                
        <div class="orderinfo" style="width:50%">
            @php
                $veg = $vegetables->where('vegetable_id', $order->vegetable_id)->first();
            @endphp

            <h4 class="mb-3">Order Details</h4>

            <p><strong>Business Name:</strong> {{ $order->businessname }}</p>
            <p><strong>Contact:</strong> {{ $order->contact }}</p>
            <p><strong>Delivery Location:</strong> {{ $order->delivery_location }}</p>
            <p><strong>Status:</strong> {{ $order->status }}</p>
        </div>
        <div class="vegdetails"  style="width:50%">
            <h5 class="mt-4 mb-3">Vegetable Details</h5>

            @if($veg)
            <h5 class="fw-bold">{{ $veg->name }}</h5>
            <img src="{{ asset('images/' . $veg->image) }}" width="200" height="200" class="mb-2">
            <p><strong>Quantity:</strong> {{ $veg->quantity }} Kg</p>
            <p><strong>Price:</strong> {{ $veg->price }}</p>
            @else
            <p class="text-danger">Vegetable details not found.</p>
            @endif
             <a class="btn btn-sm btn-primary" href="{{ route('edit', $veg->vegetable_id)}}">Edit</a>
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
    Cancel
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
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
