
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Praktikum Laravel')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
            color: #222;
        }

        nav {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
            padding: 15px 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 25px;
        }

        a {
            color: #1756a9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f3f3f3;
        }

        .alert {
            padding: 12px;
            margin: 15px 0;
            border: 1px solid #999;
        }

        footer {
            margin-top: 35px;
            border-top: 1px solid #ccc;
            padding-top: 15px;
        }
    </style>
</head>
<body>
    @include('partials.navbar')

    <main>
        <h1>@yield('title', 'Praktikum Laravel')</h1>
        @yield('content')
    </main>

    <footer>
        Praktikum Laravel Controller & Blade
        &copy; {{ date('Y') }}
    </footer>
</body>
</html>
