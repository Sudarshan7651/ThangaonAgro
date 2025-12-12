<!DOCTYPE html>
<html>
<head>
    <title>Invoice #{{ $order->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f8f9fa; }
        .invoice-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.10);
        }
        .invoice-title { font-size: 28px; font-weight: bold; }
        .table th { background: #e9ecef; }
        .total-box {
            background: #e9f7ef;
            padding: 15px;
            border-radius: 10px;
            font-size: 18px;
        }
        .footer-text {
            font-size: 12px;
            text-align: center;
            color: #888;
            margin-top: 30px;
        }

        .printbtn {
            margin-top: 20px;
        }

        @media print {
    .printbtn,.gobackbtn {
        display: none;
    }
}
    </style>
</head>

<body>


<div class="container mt-4 mb-5">
    <div class="container invoice-box">

     <h2 class="invoice-title " style="margin-left:40%">INVOICE</h2><hr>

        {{-- Header --}}
        <div class="d-flex justify-content-between">
            <div>
                <h5 class="mt-4">Customer Details</h5>
                <p class="mb-1"><strong>Business Name:</strong> {{ $order->businessname }}</p>
                <p class="mb-1"><strong>Contact:</strong> {{ $order->contact }}</p>
                <p class="mb-1"><strong>Delivery Location:</strong> {{ $order->delivery_location }}</p>
            </div>

            <div class="text-end">
                <h4>Your Veggie Supplier</h4>
                <p class="mb-0">{{ Auth::user()->businessName }}</p>
                <p class="mb-0">Mumbai • Pune • Nashik</p>
                <p class="mb-0">+91 {{ Auth::user()->mobile }}</p>
            </div>
        </div>
        <hr>
                
        <div class="d-flex justify-content-between mt-3">
                <p class="mb-1"><strong>Order ID:</strong> {{ $order->id }}</p>
                <p class="mb-1"><strong>Date:</strong> {{ $order->created_at->format('d M, Y') }}</p>
        </div>
       
        {{-- Item Table --}}
        <h5 class="mt-4">Order Details</h5>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>Vegetable</th>
                    <th>Quantity</th>
                    <th>Rate (₹)</th>
                    <th>Total (₹)</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $vegetable->name }}</td>
                        <td>{{ $vegetable->quantity }} Kg</td>
                        <td>{{ number_format($vegetable->price, 2) }}</td>
                        <td>{{ number_format($vegetable->price * $vegetable->quantity, 2) }}</td>
                    </tr>
            </tbody>
        </table>

        {{-- Grand Total --}}
        <div class="total-box mt-3">
                <strong>Grand Total: ₹{{ number_format($vegetable->price * $order->quantity, 2) }}</strong>
        </div>

        <div class="d-flex justify-content-between mt-3">
         <button class="printbtn btn btn-primary" onclick="window.print()">Print / Save as PDF</button>
        <button class="gobackbtn btn btn-danger" onclick="window.history.back()">Go Back</button>
        </div>

        {{-- Footer --}}
        <p class="footer-text mt-4">
            This is a computer-generated invoice.  
            Thank you for choosing our vegetable delivery service!
        </p>

    </div>
</div>
</body>
</html>
