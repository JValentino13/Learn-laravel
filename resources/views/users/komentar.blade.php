  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Reset body styles — assume they're already set in app.blade.php */
        html,
        body {
            margin: 0;
            padding-top: 10px;
            padding-right: 25px;
            height: 100%;
            width: 100%;
            scroll-behavior: smooth;
        }

        .page-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .card {
            background: white;
            border-radius: 24px;
            padding: 3rem;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.5rem;
            display: block;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #1a1a1a;
            border: none;
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
            font-size: 1rem;
            color: #333;
        }

        .footer {
            margin-top: 2rem;
            font-size: 0.9rem;
            color: #666;
            text-align: center;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: #1a1a1a;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .back-to-top:hover {
            background: #333;
            transform: scale(1.1);
        }

        /* Floating Icons */
        .icon {
            position: absolute;
            width: 60px;
            height: 60px;
            opacity: 0.8;
            transition: transform 0.3s ease;
            pointer-events: none;
            /* Prevents icons from interfering with clicks */
        }

        .icon img {
            width: 100%;
            height: auto;
        }

        .icon:hover {
            transform: scale(1.2);
        }

        /* Positioning */
        .figma {
            scale: 3;
            top: 10%;
            left: 10%;
        }

        .xd {
            scale: 1.1;
            top: 20%;
            right: 20%;
        }

        .photoshop {
            scale: 2;
            bottom: 20%;
            left: 15%;
        }

        .sketch {
            scale: 4;
            bottom: 15%;
            right: 15%;
        }

        .illustrator {
            scale: 1.9;
            top: 15%;
            right: 10%;
        }

        .you {
            top: 25%;
            left: 25%;
        }

        .fiverr {
            scale: 2.4;
            top: 30%;
            right: 25%;
        }

        .comment-card {
            background: {{ ['#f8f9fa', '#e9ecef', '#f1f3f5', '#f6f7fb'][array_rand(['#f8f9fa', '#e9ecef', '#f1f3f5', '#f6f7fb'])] }};
            padding: 1rem 1.5rem;
            border-radius: 16px;
            max-width: 280px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            transform: rotate({{ rand(-2, 2) }}deg);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border-left: 4px solid #26a69a;
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }

        .icon {
            position: absolute;
            width: 60px;
            height: 60px;
            opacity: 0.85;
            transition: transform 0.4s ease, opacity 0.3s ease;
            animation: float 6s ease-in-out infinite;
        }

        .icon:hover {
            transform: scale(1.5) !important;
            opacity: 1;
            z-index: 10;
        }

        @keyframes float {
            0% {
                transform: scale(1) translateY(0px);
            }

            50% {
                transform: scale(1.05) translateY(-10px);
            }

            100% {
                transform: scale(1) translateY(0px);
            }
        }
    </style>
  </head>
  <body>
    @extends('layouts.layout')
    @section('content')

    <!-- Page Content -->
    <div class="page-container">
        <!-- Floating Icons -->
        <div class="icon figma">
            <img src="{{ Vite::asset('resources/images/icons/figma.png') }}" alt="Figma">
        </div>
        <div class="icon sketch">
            <img src="{{ Vite::asset('resources/images/icons/sketch.png') }}" alt="Sketch">
        </div>
        <div class="icon photoshop">
            <img src="{{ Vite::asset('resources/images/icons/photoshop.png') }}" alt="Photoshop">
        </div>
        <div class="icon illustrator">
            <img src="{{ Vite::asset('resources/images/icons/illustrator.png') }}" alt="Illustrator">
        </div>
        <div class="icon fiverr">
            <img src="{{ Vite::asset('resources/images/icons/fiverr.png') }}" alt="Fiverr">
        </div>
        <!-- Main Card -->
        <div class="card">
            <!-- ✅ Fixed: Correct way to use Vite + asset -->
            <img src="{{ Vite::asset('resources/images/p.png') }}" alt="Avatar" class="avatar" />
            <h1>Are you looking for the perfect design?</h1>
            <p>Then you're in the right place. Get the best designs you're looking for. Just reach out and let me know!</p>

            <!-- Comment Form -->
            <form action="{{ route('simpan') }}" method="POST" id="myForm">
                @csrf
                <input type="text" name="komentar" id="komentar" class="form-control w-50 mx-auto mb-3" placeholder="Enter your comment...">
                <button type="submit" class="btn btn-primary">Submit Comment</button>
            </form>

            <!-- Error Message -->
            <div id="errorMessage" class="alert alert-danger d-none mt-2">Please enter a comment.</div>

            <!-- Comments List -->
            <!-- Submitted Comments in Abstract Layout -->
            <div class="comments-container mt-5" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; padding: 0 10px;">
                @foreach ($komen as $komentar)
                    <div class="comment-card" onclick="window.location.href='{{ route('hapus', $komentar->id) }}';">
                        <p class="mb-0" style="font-size: 0.95rem; color: #333; word-wrap: break-word;">
                            {{ $komentar->komentar }}
                        </p>
                    </div>
                @endforeach
            </div>

            <style>
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(20px) rotate(-1deg);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0) rotate(0deg);
                    }
                }

                .comment-card:hover {
                    transform: translateY(-4px) rotate(0deg) !important;
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
                    cursor: pointer;
                }
            </style>

            <!-- Social Links -->
            <div class="social-links">
                <a href="#">LinkedIn</a>
                <a href="#">Behance</a>
                <a href="#">Dribbble</a>
                <a href="#">Instagram</a>
                <a href="#">X</a>
                <a href="#">Medium</a>
            </div>

            <!-- Footer -->
            <div class="footer">
                Made with ❤️ | Developed by <strong>Apen</strong>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">↑</div>
    </div>

    <!-- ✅ JavaScript moved to the bottom (safe) -->
    <script>
        document.getElementById("myForm").addEventListener("submit", function(event) {
            const keyword = document.getElementById("komentar").value.trim();
            const errorDiv = document.getElementById("errorMessage");

            if (keyword === "") {
                event.preventDefault();
                errorDiv.classList.remove("d-none");
                errorDiv.style.display = "block";
            } else {
                errorDiv.style.display = "none";
            }
        });
    </script>
    @endsection
 </body>
  </html>
