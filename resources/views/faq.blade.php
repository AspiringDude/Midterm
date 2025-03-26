<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('{{ asset('images/eyyy.webp') }}') no-repeat center center fixed;
            background-size: cover;
            font-size: 18px;
            color: #ffffff;
        }
        .accordion-button {
            background-color: #333; 
            color: white;
        }
        .accordion-button:not(.collapsed) {
            background-color: #444;
            color: white;
        }
        .accordion-body {
            background-color: #222;
            color: white;
        }
        .btn-secondary {
            background-color: #444;
            border: none;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #555;
        }
        .faq-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            max-width: 800px;
            margin: auto;
        }
    </style>
</head>
<body class="container mt-5 text-center">
    <div class="faq-container">
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

            <!-- Question 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question3">
                        Who can use this system?
                    </button>
                </h2>
                <div id="question3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        This system is designed for administrators, faculty members, and staff involved in managing colleges and departments.
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question4">
                        Is my data secure?
                    </button>
                </h2>
                <div id="question4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, the system follows best security practices to ensure your data is protected.
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Home Button -->
        <div class="mt-4">
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
