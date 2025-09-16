  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <style>
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

          .icon {
              position: absolute;
              width: 60px;
              height: 60px;
              opacity: 0.8;
              transition: transform 0.3s ease;
              pointer-events: none;
          }

          .icon img {
              width: 100%;
              height: auto;
          }

          .icon:hover {
              transform: scale(1.2);
          }

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

          .flutter {
              scale: 2;
              bottom: 20%;
              left: 15%;
          }

          .laravel {
              scale: 4;
              bottom: 15%;
              right: 15%;
          }

          .react {
              scale: 1.9;
              top: 15%;
              right: 10%;
          }

          .you {
              top: 25%;
              left: 25%;
          }

          .golang {
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

          /* Form style */
          .comment-form {
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              gap: 0.8rem;
              margin-top: 1.5rem;
          }

          .comment-input {
              width: 100%;
              max-width: 350px;
              border-radius: 50px;
              padding: 0.7rem 1.2rem;
              border: 2px solid #ddd;
              background: #f8f9fa;
              box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
              text-align: center;
              transition: all 0.3s ease;
          }

          .comment-input:focus {
              outline: none;
              background: #fff;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
              transform: translateY(-2px);
          }

          .comment-btn {
              margin-bottom: 1rem;
              border-radius: 50px;
              padding: 0.7rem 1.8rem;
              font-weight: 600;
              letter-spacing: 0.5px;
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
              transition: all 0.3s ease;
          }

          .comment-btn:hover {
              transform: translateY(-2px);
              box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
          }

          .comment-error {
              margin-bottom: 1.5rem;
              margin-top: -0.5rem;
              display: none;
              width: 100%;
              max-width: 350px;
              text-align: center;
              padding: 0.6rem 1rem;
              border-radius: 12px;
              background: #ffe5e5;
              border-left: 4px solid #e63946;
              color: #c92a2a;
              font-size: 0.9rem;
              box-sizing: border-box;
          }

          /* Social Link */
          .social-links {
              display: flex;
              justify-content: center;
              gap: 3rem;
              margin-top: 2rem;
              flex-wrap: wrap;
              padding: 0;
          }

          .social-links a {
              display: inline-flex;
              align-items: center;
              justify-content: center;
              width: 40px;
              height: 40px;
              border-radius: 50%;
              color: #1a1a1a;
              font-size: 0.9rem;
              font-weight: 600;
              text-decoration: none;
              transition: all 0.3s ease;
          }

          .social-links a:hover {
              transform: translateY(-3px) scale(1.05);
          }
      </style>
  </head>

  <body>
      @extends('layouts.layout')
      @section('content')
          <div class="page-container">
              <div class="icon figma">
                  <img src="{{ Vite::asset('resources/images/komen_logos/1.png') }}" alt="Figma">
              </div>
              <div class="icon laravel">
                  <img src="{{ Vite::asset('resources/images/komen_logos/2.png') }}" alt="Laravel">
              </div>
              <div class="icon flutter">
                  <img src="{{ Vite::asset('resources/images/komen_logos/3.png') }}" alt="Flutter">
              </div>
              <div class="icon react">
                  <img src="{{ Vite::asset('resources/images/komen_logos/4.png') }}" alt="React">
              </div>
              <div class="icon golang">
                  <img src="{{ Vite::asset('resources/images/komen_logos/5.png') }}" alt="Golang">
              </div>
              <div class="card">

                  <img src="{{ Vite::asset('resources/images/p.png') }}" alt="Avatar" class="avatar" />
                  <h1>Are you looking for the perfect design?</h1>
                  <p>Then you're in the right place. Get the best designs you're looking for. Just reach out and let me know!</p>
                  <form action="{{ route('simpan') }}" method="POST" id="myForm" class="comment-form">
                      @csrf
                      <input type="text" name="komentar" id="komentar" class="form-control comment-input" placeholder="Enter your comment...">
                      <button type="submit" class="btn btn-primary comment-btn">Submit Comment</button>
                      <div id="errorMessage" class="comment-error">
                          Please enter a comment.
                      </div>
                  </form>

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

                  <div class="social-links">
                      <a href="https://github.com/JValentino13">GitHub</a>
                      <a href="https://www.instagram.com/palen_apen/">Instagram</a>
                  </div>
                  <div class="footer">
                      Made with ❤️ | Developed by <strong>Apen</strong>
                  </div>
              </div>

              <div class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">↑</div>
          </div>

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
