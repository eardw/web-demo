<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Digital Art Portal</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-card">
        <!-- Brand Logo / Title
        <div class="brand">
            <span class="logo-dot"></span>
            <span class="brand-name">STYLIZED</span>
        </div> -->

        <!-- Heading -->
        <div class="header">
            <h1>Create Account</h1>
            <p>Fill in your information to get started</p>
        </div>

        <!-- Sign Up Form -->
        <form class="login-form" action="#" method="POST">
            <div class="input-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" placeholder="John Doe" required>
            </div>

            <div class="input-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" placeholder="name@example.com" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="••••••••" required>
            </div>

            <div class="input-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" placeholder="+1 234 567 8900" required>
            </div>

            <div class="input-group">
                <label for="address">Address</label>
                <input type="text" id="address" placeholder="123 Main St, City, Country" required>
            </div>

            <button type="submit" class="btn-submit">Sign Up</button>
        </form>

        <!-- Footer / Switch to Login -->
        <div class="card-footer">
            <p>Already have an account? <a href="http://localhost/htt/login.php" class="signup-link">Sign in</a></p>
        </div>
    </div>

</body>
</html>