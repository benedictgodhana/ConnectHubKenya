<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .input-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .input-group button[type="submit"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .input-group button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>

        <form action="{{ route('login') }}" method="POST" class="input-group">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email">
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
            <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
            </div><br>
            
            <div>
            <button class="btn btn-primary" type="submit">Login</button>

            </div>
        </form>
    </div>
</body>
</html>
