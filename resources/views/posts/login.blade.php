<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        :root {
            --orange: #fc823d;
            --blue: #88b4ff;
            --cream: #f8f4f1;
            --green: #a5e26c;
            --yellow: #f4c347;
            --dark: #333333;
            --light: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--cream);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: var(--light);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 40px;
            text-align: center;
        }

        .login-header {
            margin-bottom: 30px;
        }

        .login-header h1 {
            color: var(--dark);
            font-size: 28px;
            margin-bottom: 10px;
        }

        .login-header p {
            color: var(--dark);
            opacity: 0.7;
        }

        .login-form .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .login-form label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark);
            font-weight: 500;
        }

        .login-form input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s;
        }

        .login-form input:focus {
            border-color: var(--blue);
            outline: none;
            box-shadow: 0 0 0 3px rgba(136, 180, 255, 0.2);
        }

        .login-button {
            background-color: var(--orange);
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .login-button:hover {
            background-color: #e67436;
        }

        .forgot-password {
            display: block;
            margin-top: 15px;
            color: var(--blue);
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <!-- Ganti dengan logo Anda -->
            <img src="https://via.placeholder.com/150x50?text=LOGO" alt="Company Logo">
        </div>
        
        <div class="login-header">
            <h1>Admin Login</h1>
            <p>Silakan masuk dengan akun admin Anda</p>
        </div>
        
        <form class="login-form" action="/login" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Masukkan username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>
            
            <button type="submit" class="login-button">LOGIN</button>
            
            <a href="#" class="forgot-password">Lupa password?</a>
        </form>
    </div>
</body>
</html>