<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar in Teal Container</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #e0e0e0;
            padding: 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Custom container for the teal bar */
        .teal-container {
            background-color: #26a69a;
            border-radius: 50px;
            padding: 1rem 0;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            overflow: visible;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .navbar {
            background: transparent !important;
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
            font-size: 1.3rem;
            color: white;
        }

        .navbar-brand img {
            height: 50px;
            /* 👈 Bigger logo */
            width: auto;
            object-fit: contain;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            font-size: 1rem;
            padding: 0.5rem 0.75rem;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #b2f2e7;
        }

        .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            background-color: #ffffff;
            min-width: 160px;
            font-size: 0.95rem;
        }

        .dropdown-item {
            padding: 12px 20px;
            color: #333;
            transition: background-color 0.2s ease;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #0d6efd;
        }

        .btn-outline-light {
            border-color: white;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1.25rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-outline-light:hover {
            background-color: white;
            color: #26a69a;
            transform: scale(1.02);
        }

        .btn-primary {
            background-color: #e7397f;
            border-color: #e7397f;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1.25rem;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d82c71;
            border-color: #d82c71;
            transform: scale(1.02);
        }
    </style>
</head>

<body>

    <!-- Teal Container -->
    <div class="teal-container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset(Vite::asset('resources/images/vish.png')) }}" alt="Logo" style="height: 60px; width: auto;" />
                    <span class="fw-bold">Vish<span style="color: #b2f2e7;">Mall</span></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav me-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('welcome') }}">Home Town</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lets Explore It</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Items</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Various Fish</a></li>
                                <li><a class="dropdown-item" href="#">Fishing Tools</a></li>
                                <li><a class="dropdown-item" href="#">Aquarium</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                    </ul>

                    <div class="d-flex">
                        <a href="{{ route('komentar') }}" class="btn btn-primary">Contact us</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div>
        @yield('content')
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
