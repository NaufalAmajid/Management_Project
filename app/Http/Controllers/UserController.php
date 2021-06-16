<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Galery;
use App\Models\Kontak;
use App\Models\Makanan;
use App\Models\Minuman;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function makanuser()
    {   
        $about = Kontak::select()->get();
        $cemilan = Makanan::select()->where('jenis', '=', 'Cemilan')
            ->get();
        $mabes = Makanan::select()->where('jenis', '=', 'Makan Besar')
            ->get();
        $paket = Makanan::select()->where('jenis', '=', 'Paketan')
            ->get();
        $datamakan = Makanan::orderBy('nama_makanan', 'asc')
            ->get();
        $makan = [$cemilan , $mabes, $paket, $datamakan];
        return view('user.menu.makanan', compact('makan', 'about'));
    }

    public function minumuser()
    {
        $minum = Minuman::orderBy('jenis', 'asc')->get();
        $about = Kontak::select()->get();
        $kopi = Minuman::where('jenis', '=', 'Aneka Kopi')->get();
        $reguler = Minuman::where('jenis', '=', 'Reguler')->get();
        $jumbo = Minuman::where('jenis', '=', 'Jumbo')->get();
        $tradisional = Minuman::where('jenis', '=', 'Tradisional')->get();
        $dataminum = [$minum, $kopi, $reguler, $jumbo, $tradisional];
        return view('user.menu.minuman', compact('dataminum', 'about'));
    }

    public function fasilitas()
    {
        $fas = Fasilitas::select()->get();
        $about = Kontak::select()->get();
        return view('user.menu.event', compact('fas','about'));
    }

    public function tentang()
    {
        $about = Kontak::select()->get();
        $gal = Galery::latest()->get();
        return view('user.menu.about', compact('about', 'gal'));
    }
}
