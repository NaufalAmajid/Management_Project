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
                    <li>Menu Minuman</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Menu <span>Minuman</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Semua</li>
                        <li data-filter=".filter-reg">Reguler</li>
                        <li data-filter=".filter-jum">Jumbo</li>
                        <li data-filter=".filter-kopi">Aneka Kopi</li>
                        <li data-filter=".filter-tra">Tradisional</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container">

                <!-- MAKAN BESAR -->

                <div class="col-lg-12 menu-item filter-reg">
                    <div class="menu-title">
                        <h5 style="font-family:Tahoma;">-----REGULER-----</h5>
                    </div>
                </div>

                @foreach ($dataminum[2] as $reg)
                <div class="col-lg-6 menu-item filter-reg">
                    <div class="menu-content">
                        <a href href ="{{ asset('gambar/'.$reg->gambar_minuman) }}" class="venobox"
                            data-gall="gallery-item">{{$reg->nama_minuman}}</a><span>@rupiah($reg->harga)</span>
                    </div>
                </div>
                @endforeach

                <!-- JUMBO -->
                <div class="col-lg-12 menu-item filter-jum">
                    <div class="menu-title">
                        <h5 style="font-family:Tahoma;">-----JUMBO-----</h5>
                    </div>
                </div>

                @foreach ($dataminum[3] as $jum)
                <div class="col-lg-6 menu-item filter-jum">
                    <div class="menu-content">
                        <a href href ="{{ asset('gambar/'.$jum->gambar_minuman) }}" class="venobox"
                            data-gall="gallery-item">{{$jum->nama_minuman}}</a><span>{{$jum->harga}}</span>
                    </div>
                </div>
                @endforeach

                <!-- ANEKA KOPI -->
                <div class="col-lg-12 menu-item filter-kopi">
                    <div class="menu-title">
                        <h5 style="font-family:Tahoma;">-----ANEKA KOPI-----</h5>
                    </div>
                </div>

                @foreach ($dataminum[1] as $kopi)
                <div class="col-lg-6 menu-item filter-tra">
                    <div class="menu-content">
                        <a href href ="{{ asset('gambar/'.$kopi->gambar_minuman) }}" class="venobox"
                            data-gall="gallery-item">{{$kopi->nama_minuman}}</a><span>{{$kopi->harga}}</span>
                    </div>
                </div>
                @endforeach

                <!-- TRADISIONAL -->
                <div class="col-lg-12 menu-item filter-tra">
                    <div class="menu-title">
                        <h5 style="font-family:Tahoma;">-----TRADISIONAL-----</h5>
                    </div>
                </div>

                @foreach ($dataminum[4] as $tra)
                <div class="col-lg-6 menu-item filter-tra">
                    <div class="menu-content">
                        <a href href ="{{ asset('gambar/'.$tra->gambar_minuman) }}" class="venobox"
                            data-gall="gallery-item">{{$tra->nama_minuman}}</a><span>{{$tra->harga}}</span>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Menu Section -->

@endsection
