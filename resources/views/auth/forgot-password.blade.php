<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc, #6a11cb);
            color: #fff;
            padding-top: 100px;
        }

        .card {
            width: 450px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .fa-lock {
            color: #4285f4;
        }

        .btn-primary {
            padding: 10px 20px;
            font-size: 16px;
        }

        .input-group-addon {
            background-color: #4285f4;
            border: none;
            padding: 10px;
        }

        .input-group-addon i {
            color: white;
        }

        #emailInput {
            border-radius: 0;
        }

        .form-control:focus {
            border-color: #4285f4;
            box-shadow: none;
        }

        h2 {
            color: #4285f4;
            font-family: 'Roboto', sans-serif; /* Change 'Roboto' to your desired font */

        }

        p {
            color: #7c838d;
        }

        .btn-primary.hover-animate:hover {
            background-color: #2962ff;
            color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body text-center">
                <h3><i class="fas fa-lock fa-2x"></i></h3>
                <h2 class="text-center">Forgot Password? </h2>

                <p>You can reset your password here.</p>
                <form class="form" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-addon d-flex align-items-center justify-content-center">
                                <i class="fas fa-envelope color-blue mx-2"></i>
                            </span>
                            <input id="emailInput" placeholder="Email address" name="email" class="form-control"
                                type="email" autocomplete="off">
                        </div>
                        @error('email')
                        <span class="text-danger mt-1" style="size: 16px">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-block hover-animate" type="submit">Kirim</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
