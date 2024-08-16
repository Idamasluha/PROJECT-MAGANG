<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Surat Keluar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Header Section</h1>
        </div>
    </header>

    <div class="container">
        <h1>ARSIP SURAT KELUAR</h1>
        <h2>SEKRETARIAT DAERAH BAGIAN UMUM</h2>
        <p>Jl.Panglima Sudirman No.98</p>

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">LOG IN</button>
        </form>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Sekretariat Daerah Bagian Umum</p>
        </div>
    </footer>
</body>
</html>
