<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/Login/login.css" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"> --}}
</head>

<body>
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <div class="form-container">
        <h3>Register</h3>
        <form action="/users/register" method="POST">
            @csrf
            <div class="form-item">
                <label>First Name:</label>
                <input class="input" id="name" name="name" type="text" required placeholder="Justina" />
            </div>
            <div class="form-item">
                <label>Email:</label>
                <input class="input" id="email" name="email" type="email" required
                    placeholder="justina@gmail.com" />
            </div>
            <div class="form-item">
                <label>Role</label>
                <select class="form-control" name="role">
                    <option selected value="Recruitee">Recruitee</option>
                    <option value="Recruiter">Recruiter</option>
                </select>
            </div>
            <div class="form-item">
                <label>Password:</label>
                <input class="input" id="pass" name="password" type="password" required />
            </div>

            <div class="form-item">
                <label>Conf Password:</label>
                <input class="input" id="re-pass" name="conf-password" type="password" required />
            </div>

            <button class="submit-btn">Submit</button>
        </form>
        <a href="login">
            <p>Have an account?</p>
        </a>
    </div>
    {{-- <script src="js/validateForm.js"></script> --}}
</body>

</html>
