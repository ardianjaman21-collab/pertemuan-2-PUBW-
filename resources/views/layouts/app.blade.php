<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'LaporBanjir')
    </title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        header {
            background: #1976d2;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        nav {
            margin-top: 15px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background: #1976d2;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #125ca3;
        }

        .status {
            font-weight: bold;
        }

        footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

    </style>

</head>

<body>

    <header>

        <h1>LaporBanjir</h1>

        <p>Sistem Pelaporan Banjir BPBD Kabupaten Bandung</p>

        <nav>

            <a href="{{ route('laporan.form') }}">
                Form Pelaporan
            </a>

            <a href="{{ route('laporan.daftar') }}">
                Daftar Laporan
            </a>

        </nav>

    </header>


    <main>

        @yield('content')

    </main>


    <footer>

        <p>
            &copy; 2026 LaporBanjir - BPBD Kabupaten Bandung
        </p>

    </footer>

</body>

</html>