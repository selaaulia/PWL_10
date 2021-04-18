@extends('layout')
@section('content')
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
    <style>
        h1, h2{
            margin-bottom: 50px;
        }
        .table{
            justify-content: center;
            align-items: center;
        }
    </style>
        <center>
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            <h1>KARTU HASIL STUDI (KHS)</h1>
        </center>
        <p>
            <b>Nama:</b> {{ $mahasiswas->Nama }} <br>
            <b>NIM:</b> {{ $mahasiswas->Nim }} <br>
            <b>Kelas:</b> {{ $mahasiswas->Kelas->nama_kelas }} <br><br>
        </p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matakuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas->matakuliah as $item)
                        <tr>
                            <td>{{ $item->nama_matkul }}</td>
                            <td>{{ $item->sks }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>{{ $item->pivot->nilai }}</td>
                    @endforeach
                    </tr>
    
                </tbody>
            </table>
        
@endsection