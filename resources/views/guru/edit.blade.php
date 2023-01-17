@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>EDIT DATA GURU</h2>
        <form method="POST" action="/guru/update/{{ $guru->id }}"> 
            @csrf 
            <table width="50%">
            <tr>
                <td class="bar"> NIP </td>
                <td class="bar">
                    <input type="text" name="nip" value="{{ $guru->id }}">
                </td>
            </tr>
            <tr>
                <td class="bar"> NAMA GURU </td>
                <td class="bar">
                    <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}">
                </td>
            </tr>
            <tr>
                <td class="bar"> JENIS KELAMIN</td>
                <td class="bar">
                    <input type="radio" name="jk" value="L" {{ $guru->jk == 'L' ? 'checked' : ''}}>Laki-Laki
                    <input type="radio" name="jk" value="P" {{ $guru->jk == 'p' ? 'checked' : ''}}>Perempuan
                </td>
            </tr>
            <tr>
                <td width="25%">ALAMAT</td>
                <td width="25%"><textarea name="alamat" cols="30" rows="5">{{ $guru->alamat }}</textarea></td>
            </tr>
            <tr>
                <td width="25%">PASSWORD</td>
                <td width="25%"><input type="password" name="password" value="{{ $guru->password }}"></td>
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