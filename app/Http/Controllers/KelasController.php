<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Mengajar;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kelas.index', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kelas.create', [
            'jurusan' => Jurusan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kelas $kelas)
    {
        //
        $data_kelas = $request->validate([
            'nama_kelas' => ['required'],
            'jurusan_id' => ['required'],
        ]);
        kelas::create($data_kelas);
        return redirect('/kelas/index')->with('success', "data kelas berhasil di tambah");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
        return view('kelas.edit', [
            'kelas' => $kelas,
            'jurusan' => Jurusan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
        $data_kelas = $request->validate([
            'nama_kelas' => ['required'],
            'jurusan_id' => ['required']
        ]);
        $kelas->update($data_kelas);
        return redirect('/kelas/index')->with('success', "Data Berhasil Di Ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $siswa = Siswa::where('kelas_id', $kelas->id)->first();
        $mengajar = Mengajar::where('kelas_id', $kelas->id)->first();

        if($siswa) {
            return back()->with('error', "$kelas->nama_kelas masih digunakan di menu siswa");
        }
        if ($mengajar) {
            return back()->with('error', "$kelas->nama_kelas masih digunakan di menu mengajar");
        }
        $kelas->delete();
        return back()->with('success', "Data Kelas Berhasil di Hapus");
    }
}
