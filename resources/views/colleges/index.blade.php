<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colleges</title>
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
<body class="bg-dark text-white">
    <div class="container py-5">
        <div class="card bg-transparent border-light shadow-lg">
            <div class="card-header bg-gradient text-center text-light" style="background: linear-gradient(135deg, #007bff, #6610f2);">
                <h2>Colleges</h2>
            </div>
            <div class="card-body">
                <table class="table table-dark table-hover table-bordered">
                    <thead class="table-primary text-dark">
                        <tr>
                            <th>College ID</th>
                            <th>College Name</th>
                            <th>College Code</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($colleges as $college)
                        <tr>
                            <td>{{ $college->college_id }}</td>
                            <td>{{ $college->college_name }}</td>
                            <td>{{ $college->college_code }}</td>
                            <td>
                                <a href="{{ route('colleges.edit', $college->college_id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('colleges.destroy', $college->college_id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('colleges.create') }}" class="btn btn-success">Add New College</a>
                    <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
