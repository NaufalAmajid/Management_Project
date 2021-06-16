@extends('user.layout.headfoot')

@foreach ($about as $info)
@endforeach

@section('kontak')
{{ $info->kontak }}
@endsection

@section('jadwal')
{{ $info->jadwal }}
@endsection

@section('about')
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
                    <li>Tentang Kami</li>
                </ol>
            </div>

        </div>
    </section>
    <!-- End Breadcrumbs Section -->


    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container">

            <div class="section-title">
                <h2>Anggota Profesional <span>Kami</span></h2>
                <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('gambar/owner.jpg') }}"
                                class="img-fluid" alt="" style="height: 550px; width: 400px;"></div>
                        <div class="member-info">
                            <h4>Ibu Isna</h4>
                            <span>OWNER</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-4 col-md-6">
              <div class="member">
                <div class="pic"><img src="../assets/img/chefs/chefs-3.jpg" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div> -->

                <div class="col-lg-6 col-md-6">
                    <div class="member">
                        <div class="pic"><img src="{{ asset('gambar/chef.jpg') }}"
                                class="img-fluid" alt="" style="height: 550px; width: 400px;"></div>
                        <div class="member-info">
                            <h4>Punky Sastro</h4>
                            <span>CHEF</span>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Galery <span>Kaffe Ndeso</span></h2>
                <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
            </div>

            <div class="row no-gutters">
                
                @foreach ($gal as $g)
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('galery/'.$g->gambar) }}" class="venobox"
                            data-gall="gallery-item">
                            <img src="{{ asset('galery/'.$g->gambar) }}" alt=""
                                class="img-fluid" style="height: 300px; width: 300px;">
                        </a>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2><span>Hubungi</span> Kami</h2>
                <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
            </div>
        </div>

        <div class="map">
            <iframe style="border:0; width: 100%; height: 350px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.5377623506981!2d110.77587444861886!3d-7.566745087814992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a144c6ddc58d3%3A0x87af923d92158509!2sKafe%20Ndeso!5e0!3m2!1sid!2sid!4v1607302131269!5m2!1sid!2sid"
                frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container mt-5">

            <div class="info-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-google-map"></i>
                        <h4>Lokasi:</h4>
                        <p>{{ $info->lokasi }}</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-clock-time icofont-rotate-90"></i>
                        <h4>Buka Pada:</h4>
                        <p>{{ $info->jadwal }}</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{ $info->email }}<br>-</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-phone"></i>
                        <h4>Telphon/Whatsapp:</h4>
                        <p>{{ $info->kontak }}</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
