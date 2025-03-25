<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5 text-center">
    <h2 class="mb-4">Frequently Asked Questions</h2>
    
    <div class="accordion" id="faqAccordion">
        <!-- Question 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question1">
                    What is this system for?
                </button>
            </h2>
            <div id="question1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    This system helps in managing colleges and departments efficiently.
                </div>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question2">
                    How do I add a new department?
                </button>
            </h2>
            <div id="question2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Click on "Manage Departments" and use the "Add Department" button.
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Home Button -->
    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
    </div>

    <!-- Bootstrap JS (Make sure this is included for accordion to work) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
