<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f7f7f7;
        }

        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-outline input {
            border-radius: 10px;
        }

        .form-outline label {
            margin-left: 10px;
        }

        .header-title {
            font-weight: 700;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-6">
                    <div class="login-container">
                        <h2 class="header-title text-center">Login</h2>
                        <form action="{{ route('auth') }}" method="POST">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example13">Username</label>
                                <input type="text" name="username" id="form1Example13" class="form-control form-control-lg" />

                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form1Example23">Password</label>
                                <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />

                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>