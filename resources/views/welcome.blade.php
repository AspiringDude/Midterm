<!DOCTYPE html>
<html>
<head>
    <title>College Department System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/eyyy.webp') }}') no-repeat center center fixed;
            background-size: cover;
            font-size: 18px;
            color: white;
        }
        h2 {
            font-size: 36px;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.6);
            margin-bottom: 20px;
        }
        .card {
            background: rgba(0, 0, 0, 0.7);
            color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .list-group-item {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            font-size: 20px;
            transition: all 0.3s ease-in-out;
        }
        .list-group-item:hover {
            background: rgba(255, 255, 255, 0.5);
            color: black;
            transform: scale(1.05);
        }
        .btn-custom {
            font-size: 18px;
            padding: 12px 24px;
            border-radius: 8px;
            transition: 0.3s;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }
    </style>
</head>
<body class="container d-flex flex-column align-items-center justify-content-center min-vh-100 text-center">
    <div class="card w-50">
        <h2>Department Selection System</h2>
        <div class="list-group">
            <a href="{{ route('colleges.index') }}" class="list-group-item list-group-item-action">Manage Colleges</a>
            <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-action">Manage Departments</a>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('about') }}" class="btn btn-info btn-custom me-2">About</a>
            <a href="{{ route('faq') }}" class="btn btn-warning btn-custom">FAQ</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>