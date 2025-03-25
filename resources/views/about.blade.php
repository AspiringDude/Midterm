<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 18px;
        }
    </style>
</head>
<body class="bg-dark text-white text-center">
    <div class="container py-5">
        <h2>About This Application</h2>
        <p>This is a simple Laravel app for managing college records.</p>
        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back</a>
    </div>
</body>
</html>
