<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <!-- Theme initialization -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
        var themeName = themeSettings.themeName || '';
        if (themeName) {
            document.write('<link rel="stylesheet" id="theme-style" href="/css/app-' + themeName + '.css">');
        }
        else {
            document.write('<link rel="stylesheet" id="theme-style" href="{{ asset('css/app.css') }}">');
        }
    </script>
</head>
<body>
<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    Platinum
                </h1>
            </header>
            <div class="auth-content">
                <p class="text-center">LOGIN TO CONTINUE</p>
                <form id="login-form" action="{{ route('login') }}" method="POST" novalidate="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" class="form-control underlined" name="email" id="username"
                               placeholder="Your email address" required></div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control underlined" name="password" id="password"
                               placeholder="Your password" required></div>
                    <div class="form-group">
                        <label for="remember">
                            <input class="checkbox" id="remember" type="checkbox">
                            <span>Remember me</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">
                <i class="fa fa-arrow-left"></i> Back to site </a>
        </div>
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>