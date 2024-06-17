<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Login Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Styling for modal overlay */
        .modal-overlay {
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4); /* Semi-transparent black background */
            backdrop-filter: blur(5px); /* Blur effect on background */
            display: none; /* Initially hidden */
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            max-height: 80vh; /* Limit height to 80% of viewport height */
            overflow-y: auto; /* Enable vertical scrolling if content exceeds height */
            text-align: center; /* Center align content inside the modal */
        }

        .modal-content h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .modal-content .input-group {
            margin-bottom: 15px;
        }

        .modal-content .input-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .modal-content .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .modal-content .input-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .modal-content .form-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .modal-content .form-group .form-check {
            display: flex;
            align-items: center;
        }

        .modal-content .form-group .form-check input {
            margin-right: 5px;
        }

        .modal-content .form-group a {
            color: #007bff;
            text-decoration: none;
        }

        .modal-content .form-group a:hover {
            text-decoration: underline;
        }

        .modal-content .login-btn, .modal-content .cancel-btn {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .modal-content .login-btn {
            background-color: #007bff;
            color: #fff;
        }

        .modal-content .login-btn:hover {
            background-color: #0056b3;
        }

        .modal-content .cancel-btn {
            background-color: #ccc;
            color: #333;
        }

        .modal-content .cancel-btn:hover {
            background-color: #aaa;
        }

        .modal-content .switch-login {
            text-align: center;
            margin-top: 20px;
        }

        .modal-content .switch-login a {
            color: #007bff;
            text-decoration: none;
        }

        .modal-content .switch-login a:hover {
            text-decoration: underline;
        }

        .social-login-buttons {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        .social-login-buttons .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            color: #fff;
        }

        .social-login-buttons .btn-google {
            background-color: #db4437;
        }

        .social-login-buttons .btn-facebook {
            background-color: #3b5998;
        }

        .social-login-buttons .btn i {
            margin-right: 10px;
        }

        .social-login-buttons .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="modal-overlay" id="modalOverlay">
        <div class="modal-content">
            <h2>Login</h2>
            <div class="social-login-buttons">
                <button class="btn btn-google">
                    <i class="fa fa-google"></i> Sign in with Google
                </button>
                <button class="btn btn-facebook">
                    <i class="fa fa-facebook"></i> Sign in with Facebook
                </button>
                <!-- Add more social login buttons as needed -->
            </div>
            <form method="POST" action="">
                <div class="input-group">
                    <label for="email">E-Mail Address *</label>
                    <input type="email" id="email" name="email" required autocomplete="email" autofocus>
                </div>

                <div class="input-group">
                    <label for="password">Password *</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                    <a href="#">Forgot Your Password?</a>
                </div>

                <button type="submit" class="login-btn">Sign In</button>
                <button type="button" class="cancel-btn" onclick="closeModal()">Cancel</button>
            </form>
            <div class="switch-login">
                <a href="{{ route('registration') }}">Or Create An Account</a>
            </div>
        </div>
    </div>

    <script>
        // Show modal on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('modalOverlay').style.display = 'flex';
        });

        // Function to close modal
        function closeModal() {
            document.getElementById('modalOverlay').style.display = 'none';
            window.location.href = "{{ url('/home') }}"; 
        }
    </script>
</body>
</html>
