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
        $datamakan = Makanan::latest()->get();
        return view('admin.adminmenu.menu.makanan', compact('datamakan'));
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
        $upload->kode_makanan = $request->kode_makanan;
        $upload->nama_makanan = $request->nama_makanan;
        $upload->harga = $request->harga;
        $upload->jenis = $request->jenis;
        $upload->gambar_makanan = $namafile;

        $namagambar->move(public_path() . '/gambar', $namafile);
        $upload->save();

        return redirect('makan');
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

        // $data    = [
        //     'kode_makanan'   => $request->kode_makanan,
        //     'nama_makanan'   => $request->nama_makanan,
        //     'harga'          => $request->harga,
        //     'jenis'          => $request->jenismakanan,
        //     'gambar_makanan' => $pertama,
        // ];

        $request->gambar_makanan->move(public_path() . '/gambar', $pertama);
        $edit->update([
            'kode_makanan'   => $request->kode_makanan,
            'nama_makanan'   => $request->nama_makanan,
            'harga'          => $request->harga,
            'jenis'          => $request->jenismakanan,
            'gambar_makanan' => $pertama,
        ]);

        return redirect('makan');
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
