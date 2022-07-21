@extends('web.awal')
@section('navbar')
<div class="content-wrapper">
    <!DOCTYPE html>
    <html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    </head>
    <body>
     
        <h3>Data profile</h3>
     
        <a href="/profile/tambah"> + Tambah profile Baru</a>
        
        <br/>
        <br/>
     
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No.Hp</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            @foreach($profile as $p)
            <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->no_hp }}</td>
                <td>{{ $p->alamat }}</td>
                <td>
                    <a href="/edit/{{ $p->id }}">Edit</a>
                    |
                    <a href="/hapus/{{ $p->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
     
     
    </body>
    </html>
</div>
@endsection