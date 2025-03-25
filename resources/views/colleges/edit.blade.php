<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/ey2.jpg') }}') no-repeat center center fixed;
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
        }
    </style>
</head>
<body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="card bg-transparent border-light shadow-lg p-4">
            <div class="card-header bg-gradient text-center text-light" style="background: linear-gradient(135deg, #007bff, #6610f2);">
                <h2>Edit College</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('colleges.update', $college->college_id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">College ID:</label>

                        <input type="text" name="college_id" value="{{ $college->college_id }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">College Name:</label>
                        <input type="text" name="college_name" value="{{ $college->college_name }}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">College Code:</label>
                        <input type="text" name="college_code" value="{{ $college->college_code }}" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('colleges.index') }}" class="btn btn-secondary">Back to Colleges</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
