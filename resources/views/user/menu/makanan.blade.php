@extends('user.layout.headfoot')

@foreach ($about as $info)
@endforeach

@section('kontak')
{{ $info->kontak }}
@endsection

@section('jadwal')
{{ $info->jadwal }}
@endsection

@section('aktifmenu')
    active
@endsection

@section('content')

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Kaffe Ndeso</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Menu Makanan</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Menu <span>Makanan</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-mabe">Makan Besar</li>
                        <li data-filter=".filter-paket">Paketan</li>
                        <li data-filter=".filter-cemil">Cemilan</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container">

                <!-- MAKAN BESAR -->

                <div class="col-lg-12 menu-item filter-mabe">
                    <div class="menu-content">
                        <h5 style="font-family:Tahoma;">-----MAKAN BESAR-----</h5>
                    </div>
                </div>

                @foreach ($makan[3] as $mabe)
                    <div class="col-lg-6 menu-item filter-mabe">
                        <div class="menu-content">
                            <a href ="{{ asset('gambar/'.$mabe->gambar_makanan) }}" class="venobox"
                                data-gall="gallery-item">{{ $mabe->nama_makanan }}</a><span>@rupiah($mabe->harga)</span>
                        </div>
                    </div>
                @endforeach

                <!-- PAKETAN -->
                <div class="col-lg-12 menu-item filter-paket">
                    <div class="menu-content">
                        <h5 style="font-family:Tahoma;">-----PAKETAN-----</h5>
                    </div>
                </div>

                @foreach ($makan[2] as $paket)
                    <div class="col-lg-6 menu-item filter-paket">
                        <div class="menu-content">
                            <a href href ="{{ asset('gambar/'.$paket->gambar_makanan) }}" class="venobox"
                                data-gall="gallery-item">{{ $paket->nama_makanan }}]</a><span>@rupiah($paket->harga)</span>
                        </div>
                    </div>
                @endforeach

                <!-- CEMILAN -->
                <div class="col-lg-12 menu-item filter-cemil">
                    <div class="menu-content">
                        <h5 style="font-family:Tahoma;">-----CEMILAN-----</h5>
                    </div>
                </div>

                @foreach ($makan[0] as $cemil)
                    <div class="col-lg-6 menu-item filter-cemil">
                        <div class="menu-content">
                            <a href href ="{{ asset('gambar/'.$cemil->gambar_makanan) }}" class="venobox"
                                data-gall="gallery-item">{{ $cemil->nama_cemilan }}</a><span>@rupiah($cemil->harga)</span>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Menu Section -->

@endsection
