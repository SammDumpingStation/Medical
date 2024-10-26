    <div class="w-[500px] bg-white p-8 rounded-2xl text-center">
        <div class="flex flex-col items-center">
            <img src="images/Nbsc_logo-removebg-preview.png" alt="Logo" class="logo">
            <h1 class="header-text">NBSC HOS</h1>
            <p>Please fill in your credentials to login.</p>
        </div>


        <div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <a href="/nurse" class="btn btn-primary bg-[#004080] w-100">Login</a>
                {{-- <input type="submit" class="btn btn-primary w-100" value="Login"> --}}
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </div>
    </div>
