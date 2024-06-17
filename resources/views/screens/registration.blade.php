<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Register Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Replace 'styles.css' with your actual CSS file path -->
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .card {
            border: none;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            position: relative; /* Ensure relative positioning for absolute positioning of cancel button */
        }

        .card-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-block {
            display: block;
            width: 100%;
            padding: 0.75rem;
            margin-top: 1rem;
        }

        .text-center {
            text-align: center;
            margin-top: 1rem;
        }

        /* Style for Cancel button */
        .cancel-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: transparent;
            color: #888;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .cancel-btn:hover {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- Cancel Button with X icon -->
                        <a type="button" class="close cancel-btn" aria-label="Close" href="{{ url('/home') }}" >
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h2 class="text-center mb-4">Register</h2>
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" type="text" class="form-control" name="first_name"
                                    value="{{ old('first_name') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" type="text" class="form-control" name="last_name"
                                    value="{{ old('last_name') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ url('/newlogin') }}">Already have an account? Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
