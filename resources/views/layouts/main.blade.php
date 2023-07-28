<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/Home/home.css">
    <link rel="stylesheet" href="/css/Listings/listings.css">
    <title>vinGigs</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1>vin<span>Gigs</span></h1>
        </div>
        <nav class="navbars">
            <button><a href="/">Home</a></button>
            <button><a href="/login">Login</a></button>
            <button><a href="/register">Register</a></button>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        copyright Vincent Ndegwa
    </footer>
</body>

</html>
