<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ride Sharing System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card welcome-card">
                    <div class="card-body text-center p-5">
                        <h1 class="mb-4">🚗 Ride Sharing Rwanda</h1>
                        <p class="mb-4">Share rides, save costs, and travel together!</p>
                        <div class="d-grid gap-3">
                            <a href="registration.php" class="btn btn-primary btn-lg">Register</a>
                            <a href="login.php" class="btn btn-outline-primary btn-lg">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>