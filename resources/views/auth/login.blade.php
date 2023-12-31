<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/Login/login.css" />
</head>

<body>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif

    <div class="form-container">
        <h1>
            <p>Login</p><i class='bx bx-user-pin'></i>
        </h1>
        <form action="/users/login" method="POST">
            @csrf
            <div class="form-item">
                <label>Email:</label>
                <input class="input" id="email" name="email" type="email" value="{{ old('email') }}" required
                    placeholder="justina@gmail.com" />
            </div>
            <div class="form-item">
                <label>Password:</label>
                <input class="input" id="pass" name="password" type="password" required />
            </div>
            <button class="submit-btn">Submit</button>
        </form>
        <a href="register">
            <p>Have no account?</p>
        </a>
    </div>
    {{-- <script src="js/validateForm.js"></script> --}}
</body>
<script src="/js/flash.js"></script>

</html>
