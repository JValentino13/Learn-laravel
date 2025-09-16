<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
</head>
<body>
    <div class="app-wrapper" style="display:flex; min-height:100vh;">
        <aside class="sidebar">
            <div class="left">
                <img src="{{ Vite::asset('resources/images/icons/bt.png') }}" />

                <nav class="nav-buttons">
                    <button onclick="window.location.href='{{ route('welcome') }}'"><img src="{{ Vite::asset('resources/images/icons/home.png') }}" class="ai-home-alt1"></button>
                    <button><img src="{{ Vite::asset('resources/images/icons/contact.png') }}" class="ai-heart"></button>
                </nav>

                <div class="bottom-logo">
                    <img src="{{ Vite::asset('resources/images/icons/setting.png') }}" alt="Settings" class="sidebar-settings" />
                </div>
            </div>

            <div class="right">
                <div class="right-inner">
                    <div class="header">
                        <div>
                            <h2>MyPortofolio</h2>
                            <h3>valentino13.com</h3>
                        </div>
                        <i class="ai-chevron-vertical"></i>
                    </div>

                    <nav class="right-menu">
                        <button><img src="{{ Vite::asset('resources/images/icons/about.png') }}" class="menu-icon"><span>About</span></button>
                        <button><img src="{{ Vite::asset('resources/images/icons/product.png') }}" class="menu-icon"><span>Products</span></button>
                        <button onclick="window.location.href='{{ route('komentar') }}'"><img src="{{ Vite::asset('resources/images/icons/rating.png') }}" class="menu-icon"><span>Customers</span></button>
                        <button><img src="{{ Vite::asset('resources/images/icons/service.png') }}" class="menu-icon"><span>Service</span><i class="ai-plus"></i></button>

                        <ul class="submenu">
                            <li>Backend Code <span class="badge">10</span></li>
                            <li>Frontend Code <span class="badge">4</span></li>
                            <li>Cyber Security <span class="badge">20</span></li>
                        </ul>

                        <button><img src="{{ Vite::asset('resources/images/icons/medal.png') }}" class="menu-icon"><span>Rewards</span></button>
                    </nav>
                </div>
            </div>
        </aside>

        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>

</html>
