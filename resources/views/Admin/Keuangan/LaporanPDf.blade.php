<!DOCTYPE html>
<html>
<head>
    
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>keuangan Pembayaran</h1>
    <h2>Total Pemasukan: Rp {{ number_format($jumlahMasuk, 0, ',', '.') }}</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pembayaran</th>
                <th>Nilai</th>
                <th>Tipe</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keuangan as $keuangan)
                <tr>
                    <td>{{ $keuangan->id }}</td>
                    <td>
                    {{$keuangan->keterangan}}   
                    </td>
                    <td>
                        @if ($keuangan->status == 'masuk')
                        +{{number_format($keuangan->jumlah, 0, ',', '.')}}
                        @else
                        -{{number_format($keuangan->jumlah, 0, ',', '.')}}
                        @endif
                    </td>
                    <td>{{ $keuangan->status }}</td>
                    <td>{{$keuangan->tanggal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>