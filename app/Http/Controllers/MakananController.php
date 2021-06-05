<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cemilan = Makanan::select()->where('jenis', '=', 'Cemilan')
            ->get();
        $mabes = Makanan::select()->where('jenis', '=', 'Makan Besar')
            ->get();
        $paket = Makanan::select()->where('jenis', '=', 'Paketan')
            ->get();
        $datamakan = Makanan::orderBy('jenis', 'asc')
            ->get();
        return view('admin.adminmenu.menu.makanan', compact('datamakan', 'mabes', 'paket', 'cemilan'));
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
        $namagambar = $request->gambar_makanan;
        $namafile   = $namagambar->getClientOriginalName();

        $upload     = new Makanan;
        $upload->nama_makanan = $request->nama_makanan;
        $upload->harga = $request->harga;
        $upload->jenis = $request->jenis;
        $upload->gambar_makanan = $namafile;

        $namagambar->move(public_path() . '/gambar', $namafile);
        $upload->save();

        return redirect('makan')->with('success', 'Menu Berhasil Ditambahkan');
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
        $edit    = Makanan::find($id);
        $pertama = $edit->gambar_makanan;

        $request->gambar_makanan->move(public_path() . '/gambar', $pertama);
        $edit->update([
            'nama_makanan'   => $request->nama_makanan,
            'harga'          => $request->harga,
            'jenis'          => $request->jenismakanan,
            'gambar_makanan' => $pertama,
        ]);

        return redirect('makan')->with('info', 'Menu Berhasil DiUbah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Makanan::find($id);
        $file = public_path('/gambar/') . $delete->gambar_makanan;

        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();
        return redirect('makan')->with('warning', 'Menu Berhasil DiHapus');
    }
}
