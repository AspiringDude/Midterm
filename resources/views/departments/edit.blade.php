<!DOCTYPE html>
<html>
<head>
    <title>Edit Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/ey2.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-dark text-white d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="card bg-transparent border-light shadow-lg p-4">
            <div class="card-header text-center text-light" style="background: linear-gradient(135deg, #007bff, #6610f2); border-radius: 10px;">
                <h2 class="fw-bold">Edit Department</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('departments.update', $department->department_id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">Department ID:</label>
                        <input type="text" name="department_id" value="{{ $department->department_id }}" class="form-control bg-dark text-white border-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">College:</label>
                        <select name="college_id" class="form-select bg-dark text-white border-light" required>
                            @foreach($colleges as $college)
                                <option value="{{ $college->college_id }}" {{ $college->college_id == $department->college_id ? 'selected' : '' }}>
                                    {{ $college->college_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">Department Name:</label>
                        <input type="text" name="department_name" value="{{ $department->department_name }}" class="form-control bg-dark text-white border-light" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-white">Department Code:</label>
                        <input type="text" name="department_code" value="{{ $department->department_code }}" class="form-control bg-dark text-white border-light" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('departments.index') }}" class="btn btn-outline-light">Back to Departments</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
