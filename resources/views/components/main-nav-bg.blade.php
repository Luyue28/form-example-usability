<!DOCTYPE html>
<html class="has-navbar-fixed-top">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.0/css/bulma.min.css">
</head>
<body>
<nav class="navbar is-fixed-top is-white" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <p class="navbar-item">
            <a class="title is-4" href="{{route('welcome')}}">
                Form-Example
            </a>
        </p>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
</nav>
<section class="hero is-light is-fullheight">
    <div class="hero-body">
        <div class="container">
            {{ $slot }}
        </div>
    </div>
</section>
</body>
</html>
