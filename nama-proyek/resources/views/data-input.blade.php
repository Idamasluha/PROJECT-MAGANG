<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Surat Keluar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Input Data Surat Keluar</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ url('/data-input') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomor_urut">Nomor Urut:</label>
                <input type="text" id="nomor_urut" name="nomor_urut" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="no_berkas">Nomor Berkas:</label>
                <input type="text" id="no_berkas" name="no_berkas" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat_penerimaan">Alamat Penerimaan:</label>
                <input type="text" id="alamat_penerimaan" name="alamat_penerimaan" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="perihal">Perihal:</label>
                <input type="text" id="perihal" name="perihal" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nomor_petunjuk">Nomor Petunjuk:</label>
                <input type="text" id="nomor_petunjuk" name="nomor_petunjuk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nomor">Nomor:</label>
                <input type="text" id="nomor" name="nomor" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </form>
    </div>
</body>
</html>
