@extends('main.layout')
@section('content')
    <center>
        <h2>EDIT DATA MATA </h2>
        <form method="POST" action="/mapel/update/{{ $mapel->id }}"> 
            @csrf 
            <table width="50%">
            <tr>
                <td width="25%">MAPEL</td>
                <td width="25%"><input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}"></td>
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