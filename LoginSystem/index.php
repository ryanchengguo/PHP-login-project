<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-Up/Login Form</title>
    <?php include'css/css.html'; ?>
</head>
<body>
    <div class="form">
        <ul class="tab-group">
            <li class="tab"><a href="#signup"></a>Sign Up</li>
            <li class="tab active"><a href="#login"></a>Login In</li>
        </ul>

        <div class="tab-content">
            <div id = "login">
                <h1>Welcome Back!</h1>

                <form action="index.php" method = "post" autocomplete = "off">
                    <div class="field-wrap">
                        <label>
                            Email Address<span class = "req">*</span>
                        </label>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password <span class="req">*</span>
                        </label>
                    </div>

                    <p class="forgot"><a href="forgot.php">Forgot Password?</a></p>

                    <button class="button button-block" name=" login" />Log In</button>
                </form>
            </div>
            <div id="signup">
                <h1>Sign Up for Free</h1>

                <form action="index.php" method="post" autocomplete="off">

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name <span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="firstname" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name <span class="req">*</span>
                            </label>
                            <input type="text" required autocoplete="off" name="lastname" />
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address <span class="req">*</span>
                        </label>
                        <input type="email" required autocomplete="off" name="email" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password <span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="password" />
                    </div>

                    <button type="submit" class="button button-block" name="register" />Register</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>