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
        table#eUserTable {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        table#eUserTable td, table#eUserTable th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        table#eUserTable tr:nth-child(even){
            background-color: #f2f2f2;
        }
        table#eUserTable tr:hover {
            background-color: #ddd;
        }
        table#eUserTable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body class="antialiased">
    <div class="wrapper">
        @yield('body')
    </div>
</body>
</html>
