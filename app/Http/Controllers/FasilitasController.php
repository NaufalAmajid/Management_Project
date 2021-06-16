<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafas = Fasilitas::select()->get();
        return view('admin.adminmenu.event', compact('datafas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namagambar = $request->gambar_fasilitas;
        $namafile   = $namagambar->getClientOriginalName();

        $upload     = new Fasilitas;
        $upload->nama_fasilitas = $request->nama_fasilitas;
        $upload->gambar_fasilitas = $namafile;

        $namagambar->move(public_path() . '/fasilitas', $namafile);
        $upload->save();
        // dd($upload);
        return redirect('halfasilitas')->with('toast_success', 'Berhasil Ditambahkan');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit    = Fasilitas::find($id);
        $pertama = $edit->gambar_fasilitas;

        $request->gambar_fasilitas->move(public_path() . '/fasilitas', $pertama);
        $edit->update([
            'nama_fasilitas'   => $request->nama_fasilitas,
            'gambar_fasilitas' => $pertama,
        ]);

        return redirect('halfasilitas')->with('toast_info', 'Berhasil DiUbah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
