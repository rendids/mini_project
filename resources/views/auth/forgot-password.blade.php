<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }

        .card {
            width: 350px;
            margin: 0 auto;
        }

        .fa-lock {
            color: #4285f4;
        }

        .btn-primary {
            padding: 8px 16px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h3><i class="fas fa-lock fa-4x"></i></h3>
                <h2 class="text-center">Forgot Password?</h2>
                <p>You can reset your password here.</p>
                <form class="form" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-addon d-flex align-items-center justify-content-center">
                                <i class="fas fa-envelope color-blue"></i>
                            </span>
                            <input id="emailInput" placeholder="Email address" name="email" class="form-control" type="email" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
