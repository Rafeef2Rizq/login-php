<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University Main Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f5f5f5;
    }

    .navbar {
      background-color: #64a36f;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #fff;
    }

    .header {
      background-color: #64a36f;
      padding: 20px;
      color: #fff;
    }

    .footer {
      background-color: #64a36f;
      padding: 10px;
      color: #fff;
      text-align: center;
    }

    .container {
      margin-top: 50px;
      border-radius: 5px;
      background-color: #fff;
      padding: 40px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #64a36f;
      border-color: #64a36f;
    }

    .btn-primary:hover {
      background-color: #4c875d;
      border-color: #4c875d;
    }

    .session {
      background-color: rgba(99, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      display: flex;
      align-items: center;
    }

    .session .session-info {
      flex: 1;
    }

    .session .session-info h3 {
      margin-bottom: 10px;
      color: #333;
    }

    .session .session-info p {
      margin-bottom: 5px;
      color: #666;
    }

    .session .session-time {
      text-align: right;
    }

    .session .session-time span {
      font-size: 24px;
      font-weight: bold;
      color: #64a36f;
    }
  </style>
</head>
<body>


<header>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>
</header>
  <div class="container mt-2">
   <a href="includes/logout.php" class="btn btn-danger">Log out</a>
    <h2>Main Page</h2>
    <div class="session">
      <div class="session-info">
        <h3>Session Title 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="session-time">
        <span>10:00 AM</span>
      </div>
    </div>
    <div class="session">
      <div class="session-info">
        <h3>Session Title 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="session-time">
        <span>02:30 PM</span>
      </div>
    </div>

  </div>

  <footer class="footer">
    <p>&copy; 2023 University. All rights reserved.</p>
  </footer>