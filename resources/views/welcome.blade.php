<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/eyyy.webp') }}') no-repeat center center fixed;
            background-size: cover;
            font-size: 18px; /* Adjusted font size for the entire page */
        }
        h2 {
            font-size: 28px; /* Adjusted font size for the header */
        }
        table {
            font-size: 16px; /* Adjusted font size for the table */
        }
        th {
            font-size: 18px; /* Adjusted font size for table headings */
        }
        td {
            font-size: 16px; /* Adjusted font size for table data */
        }s
    </style>
</head>
<body class="container mt-5 text-center">
    <h2 class="mb-4 text-white">Department Selection System</h2>
    <div class="list-group w-50 mx-auto">
        <a href="{{ route('colleges.index') }}" class="list-group-item list-group-item-action">Manage Colleges</a>
        <a href="{{ route('departments.index') }}" class="list-group-item list-group-item-action">Manage Departments</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <div class="d-flex justify-content-center mt-4">
    <a href="{{ route('about') }}" class="btn btn-info">About</a>
</div>

<div class="d-flex justify-content-center mt-4">
    <a href="{{ route('about') }}" class="btn btn-info me-2">About</a>
    <a href="{{ route('faq') }}" class="btn btn-warning">FAQ</a>
</div>


</body>
</html>