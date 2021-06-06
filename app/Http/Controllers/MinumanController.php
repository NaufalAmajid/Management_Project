<?php

namespace App\Http\Controllers;

use App\Models\Minuman;
use Illuminate\Http\Request;

class MinumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minum = Minuman::orderBy('jenis', 'asc')->get();
        $kopi = Minuman::where('jenis', '=', 'Aneka Kopi')->get();
        $reguler = Minuman::where('jenis', '=', 'Reguler')->get();
        $jumbo = Minuman::where('jenis', '=', 'Jumbo')->get();
        $tradisional = Minuman::where('jenis', '=', 'Tradisional')->get();
        $dataminum = [$minum, $kopi, $reguler, $jumbo, $tradisional];
        return view('admin.adminmenu.menu.minuman', compact('dataminum'));
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
        $nm = $request->gambar_minuman;
        $nf = $nm->getClientOriginalName();

        $insert = new Minuman;
        $insert->nama_minuman = $request->nama_minuman;
        $insert->harga = $request->harga;
        $insert->jenis = $request->jenis;
        $insert->gambar_minuman = $nf;

        $nm->move(public_path() . '/gambar', $nf);
        $insert->save();

        return redirect('minum')->with('success', 'Menu Berhasil Ditambahkan');
        // dd($insert);
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
        $edit = Minuman::find($id);
        $awal = $edit->gambar_minuman;

        $request->gambar_minuman->move(public_path() . '/gambar', $awal);
        $edit->update([
            'nama_minuman'   => $request->nama_minuman,
            'harga'          => $request->harga,
            'jenis'          => $request->jenis,
            'gambar_minuman' => $awal,
        ]);

        return redirect('minum')->with('info', 'Data Menu Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Minuman::find($id);
        $file = public_path('/gambar/') . $delete->gambar_minuman;

        if (file_exists($file)) {
            @unlink($file);
        }

        $delete->delete();
        return redirect('minum')->with('warning', 'Data Menu Berhasil DiHapus');
    }
}
