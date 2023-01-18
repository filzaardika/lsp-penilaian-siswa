@extends('main.layout')
@section('content')
    <center>
        <b> 
            <h2>LIST DATA SISWA</h2>
            <a href="/siswa/create"class="button-primary"> TAMBAH DATA </a>
            <table cellpadding="10">
                <tr>
                    <th>NO</th>
                    <th>NIS </th>
                    <th>NAMA SISWA </th>
                    <th>JENIS KELAMIN </th>
                    <th>ALAMAT </th>
                    <th>KELAS </th>
                    <th>PASSWORD </th>
                    <th>ACTION</th>
                </tr>
                @foreach ( $siswa as $s )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->nis }}</td> 
                    <td>{{ $s->nama_siswa }}</td> 
                    <td>{{ $s->jk == 'L' ? 'Laki-Laki' : 'Perempuan'}}</td> 
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->kelas_id }}</td>
                    <td>{{ $s->password }}</td>                   
                    <td>
                        <a href="/siswa/edit/{{ $s -> id}}" class="button-warning">EDIT </a>
                        <a href="/siswa/destroy/{{$s -> id}}" onclick="return confirm ('Yakin Hapus?')" class="button-danger">HAPUS</a>    
                    </td>  
                </tr>                  
                @endforeach
                </table>
        </b>
    </center>
@endsection