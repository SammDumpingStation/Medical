<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/css/login.css">
</head>


<body>
    <div class="container">
        <img src="images/Nbsc_logo-removebg-preview.png" alt="Logo" class="logo">
        <h1 class="header-text">NBSC HOS</h1>
        <p>Please fill in your credentials to login.</p>

        <div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control "
                    value="">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <a href="/nurse/dashboard" class="btn btn-primary w-100">Login</a>
                {{-- <input type="submit" class="btn btn-primary w-100" value="Login"> --}}
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </div>
    </div>
</body>

</html>
