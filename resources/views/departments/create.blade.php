<!DOCTYPE html>
<html>
<head>
    <title>Add Department</title>
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
<body class="container mt-5">
    <h2 class="text-center mb-4 text-white">Add Department</h2>
    <div class="card p-4 shadow-sm">
        <form action="{{ route('departments.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Department ID:</label>
                <input type="text" name="department_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">College:</label>
                <select name="college_id" class="form-select" required>
                    @foreach($colleges as $college)
                        <option value="{{ $college->college_id }}">{{ $college->college_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Department Name:</label>
                <input type="text" name="department_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Department Code:</label>
                <input type="text" name="department_code" class="form-control" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back to Departments</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>