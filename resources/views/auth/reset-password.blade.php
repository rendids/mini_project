<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center">Reset Password</h2>
          <form action="{{ route('password.update') }}" method="post">
            @csrf
            <input type="hidden" name="token" value="" id="token">
            <input type="hidden" name="email" value="" id="email">
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password">
              <label for="password_confirmation">Password konfirmasi</label>
              <input type="password" class="form-control" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-success btn-block">Reset Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    var tkn = document.getElementById("token");
    var mail = document.getElementById("email");
    tkn.value ="{{ request()->token }}";
    mail.value="{{ request()->email }}";
</script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
