<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Trader - SuperAdmin</title>

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
            margin-left: 250px;
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
        }

        /* Card Styling */
        .custom-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: none;
            overflow: hidden;
            padding: 40px;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Form Controls */
        .form-floating > .form-control {
            border-radius: 12px;
            border: 1px solid #dee2e6;
        }

        .form-floating > .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
        }

        .form-floating > label {
            color: #999;
        }

        /* Buttons */
        .btn-update {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-update:hover {
            background-color: var(--primary-dark);
            color: white;
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.3);
            transform: translateY(-2px);
        }

        .btn-cancel {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #6c757d;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-cancel:hover {
            color: #343a40;
            text-decoration: underline;
        }

        /* Responsive Mobile Styles */
        @media (max-width: 768px) {
            .content {
                margin-left: 0;
                padding: 20px;
                padding-top: 80px;
            }
        }
    </style>
</head> 

<body>

    @include('superadmin.sidebar')

    <div class="content">
        <div class="container-fluid">
            
            <h1 class="page-title text-center mb-5 border-0">Edit Trader Profile</h1>

            <div class="custom-card">
                <form action="{{ route('superadmin.traders.update', $trader->id) }}" method="POST">
                    @csrf
                    
                    <div class="mb-4">
                        <div class="form-floating">
                            <input type="text" name="name" value="{{ $trader->name }}" class="form-control" id="traderName" placeholder="Name" required>
                            <label for="traderName">Trader Name</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form-floating">
                            <input type="text" name="mobile" value="{{ $trader->mobile }}" class="form-control" id="traderMobile" placeholder="Mobile" required>
                            <label for="traderMobile">Mobile Number</label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="form-floating">
                            <input type="email" name="password" value="{{ $trader->password }}" class="form-control" id="traderPassword" placeholder="Password">
                            <label for="traderPassword">Password</label>
                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <button type="submit" class="btn-update">
                            <i class="fas fa-save me-2"></i> Update Trader
                        </button>
                        <a href="{{ route('superadmin.traders') }}" class="btn-cancel">Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
