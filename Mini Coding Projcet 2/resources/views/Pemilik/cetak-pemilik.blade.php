<!DOCTYPE html>
<html>
<head>
    <title>Data Pemilik Kucing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header-title {
            font-size: 24px;
            font-weight: bold;
        }
        .header-subtitle {
            font-size: 18px;
        }
        hr {
            margin: 20px 0;
            border: 1px solid black;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-title">Healt Cat Analytics</div>
        <div class="header-subtitle">Data Pemilik Kucing</div>
        <div class="header-subtitle">Jl. Contoh No. 123, Kota Contoh, Negara Contoh</div>
        <div class="header-subtitle">Tel: (021) 123-4567 | Email: info@healtcat.com</div>
    </header>
    <hr>
    <h2>Data Pemilik Kucing</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $owner->nama }}</td>
                    <td>{{ $owner->alamat }}</td>
                    <td>{{ $owner->no_hp }}</td>
                    <td>{{ $owner->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
