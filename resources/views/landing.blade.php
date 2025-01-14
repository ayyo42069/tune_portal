<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunePortal - Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">TunePortal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to TunePortal</h1>
            <p class="lead">Your one-stop platform for secure file exchange and user-friendly credit systems</p>
            <a href="{{ route('register') }}" class="btn btn-light btn-lg mt-3">Get Started</a>
        </div>
    </header>

    <section class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <h4>User Authentication</h4>
                    <p>Secure registration and login functionality with modern encryption methods.</p>
                </div>
                <div class="col-md-4">
                    <h4>File Exchange</h4>
                    <p>Easily upload, download, and process files with admin support.</p>
                </div>
                <div class="col-md-4">
                    <h4>Credits System</h4>
                    <p>Simulate transactions with a simple and flexible credits system.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p class="mb-0">© {{ date('Y') }} TunePortal. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
