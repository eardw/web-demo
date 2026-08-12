<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Digital Art Portal</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
       
    <div class="login-card">
        <!-- Brand Logo / Title 
        <div class="brand">
            <span class="logo-dot"></span>
            <span class="brand-name"></span>
        </div>-->

        <!-- Heading -->
        <div class="header">
            <h1>Welcome Back</h1>
            <p>Enter your details to access your account</p>
        </div>

        <!-- Login Form -->
        <form class="login-form" action="http://localhost/htt/home.php" method="POST">
            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="name@example.com" required>
            </div>

            <div class="input-group">
                <div class="password-header">
                    <label for="password">Password</label>
                    <a href="#" class="forgot-link">Forgot?</a>
                </div>
                <input type="password" id="password" placeholder="••••••••" required>
            </div>

            <div class="options">
                <label class="remember-me">
                    <input type="checkbox" id="remember">
                    <span class="checkmark"></span>
                    Remember me
                </label>
            </div>

            <button type="submit" class="btn-submit" >Sign In</button>
        </form>
        

        <!-- Footer / Switch to Register -->
        <div class="card-footer">
            <p>Don't have an account? <a href="http://localhost/htt/signup.php" class="signup-link">Sign up</a></p>
        </div>
    </div>

</body>
</html>