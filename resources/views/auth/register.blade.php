<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="css/Login/login.css" />
</head>

<body>
    <div class="form-container">
        <h1>
            <p>Login</p><i class='bx bx-user-pin'></i>
        </h1>
        <form action="">
            <div class="form-item">
                <label>First Name:</label>
                <input class="input" id="name" type="text" required placeholder="Justina" />
            </div>
            <div class="form-item">
                <label>User Name:</label>
                <input class="input" id="u-name" type="text" required placeholder="Justina99" />
            </div>
            <div class="form-item">
                <label>Email:</label>
                <input class="input" id="email" type="email" required placeholder="justina@gmail.com" />
            </div>
            <div class="form-item">
                <label>Password:</label>
                <input class="input" id="pass" type="password" required />
            </div>

            <div class="form-item">
                <label>Conf Password:</label>
                <input class="input" id="re-pass" type="password" required />
            </div>

            <button class="submit-btn">Submit</button>
        </form>
    </div>
    <script src="js/validateForm.js"></script>
</body>

</html>
