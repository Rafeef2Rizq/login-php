

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f5f5f5;
    }

    .container {
      margin-top: 100px;
      border-radius: 5px;
      background-color: #fff;
      padding: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      position: relative;
      color: #333;
      text-align: center;
    }

    h2::before {
      content: "";
      position: absolute;
      top: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 30px;
      height: 30px;
      background-color: #007bff;
      border-radius: 50%;
      animation: bounce 2s ease infinite;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translate(-50%, 0);
      }

      50% {
        transform: translate(-50%, -15px);
      }
    }

    .animated-title {
      animation: slideDown 1s ease;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .form-group label {
      font-weight: bold;
      color: #555;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
    
        <h2 class="text-center animated-title">Sign Up</h2>
        <form method="post" action="includes/signup.php">
   
          <div class="form-group">
            <label for="username">User name</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" class="form-control" name="Cpassword" id="confirm-password" placeholder="Confirm your password">
          </div>
          <button type="submit" name="submit"  class="btn btn-primary btn-block">Sign Up</button>
          <a href="login.php" class="btn btn-danger btn-block">Login insted</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>

</html>