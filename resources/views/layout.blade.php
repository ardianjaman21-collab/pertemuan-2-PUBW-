<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'LaporBanjir')
    </title>

    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background: #eef6ff;
            min-height: 100vh;
        }

        .navbar {
            background: #1261a0;
            color: white;
            padding: 18px 40px;
        }

        .navbar h2 {
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            color: #1261a0;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        button,
        .btn {
            width: 100%;
            display: inline-block;
            padding: 13px;
            background: #1261a0;
            color: white;
            border: none;
            border-radius: 8px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover,
        .btn:hover {
            background: #0d4f83;
        }

        .data {
            padding: 15px;
            background: #f5f9fc;
            border-radius: 8px;
            margin-bottom: 12px;
        }

        .label {
            color: #777;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .value {
            font-size: 17px;
            font-weight: bold;
        }

        .success {
            text-align: center;
            margin-bottom: 25px;
        }

        .success h1 {
            color: #16803c;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }

    </style>

</head>

<body>

    <div class="navbar">
        <h2>🌊 LaporBanjir</h2>
    </div>

    @yield('content')

    <footer>
        <p>BPBD Kabupaten Bandung</p>
    </footer>

</body>

</html>