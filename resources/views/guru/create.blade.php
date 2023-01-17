@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>TAMBAH DATA GURU</h2>
        <form method="POST" action="/guru/store"> 
            @csrf 
            <table width="50%">
            <tr>
                <td class="bar"> NIP </td>
                <td class="bar">
                    <input type="text" name="nip">
                </td>
            </tr>
            <tr>
                <td class="bar"> NAMA GURU </td>
                <td class="bar">
                    <input type="text" name="nama_guru">
                </td>
            </tr>
            <tr>
                <td class="bar"> JENIS KELAMIN </td>
                <td class="bar">
                    <input type="radio" name="jk" value="L">Laki-Laki
                    <input type="radio" name="jk" value="P">Perempuan
                </td>
            </tr>
            <tr>
                <td width="25%">ALAMAT</td>
                <td width="25%"><textarea name="alamat" cols="30" rows="5"></textarea></td>
            </tr>
            <tr>
                <td width="25%">PASSWORD</td>
                <td width="25%"><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                <center><button class="button-primary" type="submit">SIMPAN</button></center>
            </td>
            </tr>
            </table>
        </form>
        </center>
@endsection