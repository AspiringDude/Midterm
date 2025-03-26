<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/eyyy.webp') }}') no-repeat center center fixed;
            background-size: cover;
            font-size: 18px;
            color: #ffffff;
        }
        .about-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            max-width: 800px;
            margin: auto;
        }
        .btn-secondary {
            background-color: #444;
            border: none;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #555;
        }
    </style>
</head>
<body class="bg-dark text-white text-center">
    <div class="container py-5">
        <div class="about-container">
            <h2>About This Application</h2>
            <p>This is a simple Laravel app for managing college records.</p>
            <p>It allows administrators to efficiently manage college and department data, ensuring a smooth and organized experience.</p>
            <p>Built with Laravel and Bootstrap, this system offers an intuitive and responsive interface for users.</p>
            
            <h3 class="mt-4">Meet the Developers</h3>
            <p><strong>Shane Edward Tampus</strong> - Lead Developer & System Architect</p>
            <p><strong>Cyril Arnoco</strong> - Frontend Developer & UI/UX Designer</p>
            <p>Together, they worked on this project to create a seamless and user-friendly experience for managing academic records.</p>
            
            <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
    </div>
</body>
</html>
