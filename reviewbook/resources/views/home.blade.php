<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2>Welcome to Our Website</h2>
                    </div>
                    <div class="card-body">
                        <p class="lead">This is the home page of our application.</p>
                        <p>Click the button below to register:</p>
                        <a href="{{ route('register') }}" class="btn btn-primary">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
