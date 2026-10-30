<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Laravel POS</title>

    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            background: #f3f5f9;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }
        header {
            background: #13243a;
            color: white;
            padding: 24px max(24px, calc((100% - 1100px) / 2));
        }
        .brand { font-size: 24px; font-weight: bold; }
        .subtitle { color: #b8c6d9; margin: 8px 0 24px; }
        nav { display: flex; gap: 12px; }
        nav a {
            color: #dbeafe;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
        }
        nav a:hover { background: #263e5b; }
        nav a.active { background: #2563eb; color: white; }
        main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 24px;
        }
        h1 { margin-bottom: 8px; }
        .description { color: #64748b; margin-bottom: 24px; }
        .card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
        }
        .card-header {
            padding: 20px;
            border-bottom: 1px solid #e2e8f0;
            font-weight: bold;
        }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; }
        th, td {
            padding: 16px 20px;
            text-align: left;
            border-bottom: 1px solid #edf2f7;
        }
        th {
            background: #f8fafc;
            color: #64748b;
            font-size: 13px;
            text-transform: uppercase;
        }
        tbody tr:last-child td { border-bottom: none; }
        tbody tr:hover { background: #f8fafc; }
        footer {
            text-align: center;
            color: #64748b;
            padding: 24px;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <header>
        <div class="brand">Laravel POS</div>
        <p class="subtitle">Customer and user directory</p>

        <nav aria-label="Main navigation">
            <a href="{{ route('customers.index') }}"
               class="{{ request()->routeIs('customers.index') ? 'active' : '' }}">
                Customers
            </a>

            <a href="{{ route('users.index') }}"
               class="{{ request()->routeIs('users.index') ? 'active' : '' }}">
                Users
            </a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>IT0049 · TFA6 · Lanz Wayne Villaruel</footer>
</body>
</html>