@extends('user.layout.headfoot')

@foreach ($about as $info)
@endforeach

@section('kontak')
{{ $info->kontak }}
@endsection

@section('jadwal')
{{ $info->jadwal }}
@endsection

@section('event')
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
                    <li>Fasilitas</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
        <div class="container">

            <div class="section-title">
                <h2>Beberapa <span>Fasilitas</span> Yang Kami Sediakan</h2>
            </div>

            <div class="owl-carousel events-carousel">
                @foreach ($fas as $fas)

                <div class="row event-item">
                    <div class="col-lg-6">
                        <img src="{{ asset('fasilitas/'.$fas->gambar_fasilitas) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3>Free</h3>
                        <div class="price">
                            <p><span>{{ $fas->nama_fasilitas }}</span></p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

        </div>
    </section>
    <!-- End Events Section -->

@endsection
