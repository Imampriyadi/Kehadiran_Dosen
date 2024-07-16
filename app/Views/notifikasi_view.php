<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        :root {
            --background-color: #343a40;
            --text-color: #e9ecef;
            --card-background: #f9f9f9;
            --card-border: 5px solid #000000;
            /* Changed to black */
            --card-border-radius: 20px;
            --card-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            font-family: 'Comic Sans MS', cursive, sans-serif;
        }

        .card {
            background-color: var(--card-background);
            border: var(--card-border);
            border-radius: var(--card-border-radius);
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .alert {
            background-color: rgba(0, 123, 255, 0.2);
            border-left: 5px solid #007bff;
        }

        .btn-custom {
            background-color: #000000;
            /* Changed to black */
            color: white;
        }

        .btn-custom:hover {
            background-color: #333333;
            /* Darker shade for hover */
        }

        h3 {
            color: #000000;
            /* Changed to black */
        }

        .header-icon {
            font-size: 2rem;
            color: #000000;
            /* Changed to black */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <i class="fas fa-bell header-icon"></i>
                <h3 class="ml-3">notification</h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Message sent!</h4>
                    <p><?= $message; ?></p>
                </div>
                <a href="/dosen" class="btn btn-custom"><i class="fas fa-arrow-left"></i> Return to Lecturer Data</a>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Set background and text color from localStorage
            if (localStorage.getItem('bgColor')) {
                var bgColor = localStorage.getItem('bgColor');
                document.documentElement.style.setProperty('--background-color', bgColor);
                $("body").css("background-color", bgColor);
                $(".card").css("background-color", "var(--card-background)"); // Semi-transparent
            }

            if (localStorage.getItem('textColor')) {
                var textColor = localStorage.getItem('textColor');
                document.documentElement.style.setProperty('--text-color', textColor);
                $("body, .card").css("color", textColor);
            }
        });
    </script>
</body>

</html>