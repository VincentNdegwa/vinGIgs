<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/Home/home.css">
    <link rel="stylesheet" href="/css/Listings/listings.css">
    <link rel="stylesheet" href="/css/Create/create.css">
    <link rel="stylesheet" href="/css/Profile/profile.css">
    <link rel="stylesheet" href="/css/Applicants/Applicants.css">
    <title>vinGigs</title>
</head>

<body>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('message') }}
        </div>
    @endif
    <header>
        <div class="logo">
            <h1>vin<span>Gigs</span></h1>
        </div>

        <nav class="navbars">
            <button><a href="/">Home</a></button>
            @auth
                @if (auth()->user()->role == 'Recruiter')
                    <button><a href="/create">Create Job</a></button>
                    <button><a href="/application/applicants">Applicants</a></button>
                @else
                    <button><a href="/application/applied">Job Applied</a></button>
                @endif

            @endauth

            <button><a href="/login">Login</a></button>
            <button><a href="/register">Register</a></button>


            <div class="other-diplays">
                <p><a href="{{ url('/profile') }}"><i class='bx bx-user-circle'></i></a> </p>
                <p><i class='bx bxs-bell'></i></p>
            </div>
        </nav>



        <h1 class="menu-hum"><i class='bx bx-menu-alt-right'></i></h1>
    </header>
    <main>
        @yield('content')
    </main>

    <footer>
        copyright Vincent Ndegwa
    </footer>
</body>
<script src="/js/sendData.js"></script>
<script src="/js/profile.js"></script>
<script src="/js/main.js"></script>
<script src="/js/flash.js"></script>

</html>
