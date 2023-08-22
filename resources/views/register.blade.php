<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
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

        .register-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        .success-message {
            color: green;
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

        .input-group input,
        .input-group select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
            margin-bottom: 10px;
        }

        .input-group input:focus,
        .input-group select:focus {
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
            text-align: center;
        }

        .input-group button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>

        <form action="{{ route('register') }}" method="POST" class="input-group">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Name">
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Email">
            @error('email')
                <p class="error-message">{{ $message }}</p>
            @enderror
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            @error('password')
                <p class="error-message">{{ $message }}</p>
            @enderror
            
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter Confirm Password">
            </div><br>
            
            <div>
                <label for="role">User type</label>
                <select name="role" id="role">
                    <option value="0">Client</option>
                    <option value="2">Service Provider</option>
                </select>
            </div>
            
            <button class="btn btn-primary" type="submit">Register</button>
        </form>

        @if(Session::has('success'))
            <p class="success-message">{{ Session::get('success') }}</p>
        @endif
    </div>
</body>
</html>
