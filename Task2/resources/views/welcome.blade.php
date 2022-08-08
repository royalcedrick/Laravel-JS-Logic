<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body{
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .wrapper {
                width: 380px;
                padding: 40px 30px 50px 30px;
                background: #fff;
                border-radius: 5px;
                text-align: center;
            }
            .form-group {
                margin-bottom: 10px;
            }
            .form-group label {
                font-size: 17px;
                font-family: Arial, serif;
                margin-bottom: 10px;
            }
            .form-group input::placeholder{
                color: #bfbfbf;
                font-size: 17px;
                text-align: center;
            }
            .form-group .input-wrapper {
                margin-top: 10px;
            }
            .form-group .input-wrapper input {
                width: calc(100% - 22px);
                height: 100%;
                outline: none;
                font-size: 18px;
                background: none;
                border-radius: 5px;
                padding: 10px;
                border: 1px solid #bfbfbf;
            }
            .form-group .input-wrapper input::placeholder{
                color: #bfbfbf;
                font-size: 17px;
            }
            .form-group button {
                font-family: Arial, serif;
                font-size: 17px;
                height: 50px;
                width: 100%;
                padding: 10px;
                margin-top: 30px;
                color: #fff;
                border: none;
                background: #000000;
                cursor: pointer;
            }
            .invalid-feedback {
                display: block;
                color: #ff0000;
                font-family: Arial, sans-serif;
                font-size: 12px;
                padding: 5px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <input id="username" type="text" name="username" placeholder="Please Enter your Username" value="testuser" autofocus>
                    </div>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <div class="input-wrapper">
                        <input id="password" type="password" name="password" placeholder="Please Enter your Password" value="password" autocomplete="current-password">
                    </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>
