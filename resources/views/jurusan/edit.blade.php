@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA JURUSAN</h2>
        <form method="POST" action="/jurusan/update/{{ $jurusan->id }}"> 
            @csrf 
            <table width="50%">
            <tr>
                <td width="25%">JURUSAN</td>
                <td width="25%"><input type="text" name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}"></td>
            </tr>
            <tr>
                <td colspan="2">
                <center><button class="button-primary" type="submit">UBAH</button></center>
            </td>
            </tr>
            </table>
        </form>
        </center>
@endsection