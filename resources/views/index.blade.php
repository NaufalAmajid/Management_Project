@extends('user.layout.headfoot')

@foreach ($about as $info)
@endforeach

@section('kontak')
{{ $info->kontak }}
@endsection

@section('jadwal')
{{ $info->jadwal }}
@endsection

@section('aktifhome')
    active
@endsection

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                        style="background: url({{ asset('userinterface/assets/img/slidekd/kd7.jpg') }});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span>KAFFE</span> NDESO</h2>
                                <p class="animate__animated animate__fadeInUp">Sejak -2016-</p>
                                <div>
                                    <a href="#komentar" class="btn-menu animate__animated animate__fadeInUp scrollto">Komentar</a>
                                    <a href="#specials" class="btn-book animate__animated animate__fadeInUp scrollto">Menu
                                        Spesial</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item"
                        style="background: url({{ asset('userinterface/assets/img/slidekd/kd6.jpg') }});">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Eat Drink Enjoy</h2>
                                <p class="animate__animated animate__fadeInUp">"Anda Sopan Kami Sungkan"</p>
                                <div>
                                    <a href="#komentar" class="btn-menu animate__animated animate__fadeInUp scrollto">Komentar</a>
                                    <a href="#specials" class="btn-book animate__animated animate__fadeInUp scrollto">Menu
                                        Spesial</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item"
                        style="background: url({{ asset('userinterface/assets/img/slidekd/kd3.jpg') }});">
                        <div class="carousel-background"><img
                                src="{{ asset('userinterface/assets/img/slidekd/kd3.jpg') }}" alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Dari pada Bengong Sini, Kita Nongkrong
                                </h2>
                                <p class="animate__animated animate__fadeInUp">"Jangan Biarkan Perut Lapar"</p>
                                <div>
                                    <a href="#komentar" class="btn-menu animate__animated animate__fadeInUp scrollto">Komentar</a>
                                    <a href="#specials" class="btn-book animate__animated animate__fadeInUp scrollto">Menu
                                        Spesial</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Menu Section ======= -->
        <section id="specials" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2>Silahkan Pilih <span>Menu</span></h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <!-- <li data-filter="*" class="filter-active">Show All</li>
                                                                                        <li data-filter=".filter-starters">Starters</li> -->
                            <li data-filter="#"><a href="{{ url('makanuser') }}">MAKANAN</a></li>
                            <li data-filter="#"><a href="{{ url('minumanuser') }}">MINUMAN</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <div class="container">
            <div class="row specials" id="specials">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Architecto ut aperiam autem id</h3>
                                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                        parde sonata raqer a videna mareta paulona marka</p>
                                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum
                                        eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat
                                        minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui
                                        similique accusamus nostrum rem vero</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('userinterface/assets/img/specials-1.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila
                                        parde sonata raqer a videna mareta paulona marka</p>
                                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et
                                        reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit
                                        ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna
                                        desera vafle de nideran pal</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('userinterface/assets/img/specials-2.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim
                                        fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis
                                        aut</p>
                                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis
                                        quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae
                                        sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et
                                        harum voluptatem optio quae</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('userinterface/assets/img/specials-3.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas
                                        iure porro quis delectus</p>
                                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam
                                        necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in
                                        consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a
                                        laborum inventore</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('userinterface/assets/img/specials-4.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.
                                    </p>
                                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae
                                        ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet.
                                        Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('userinterface/assets/img/specials-5.jpg') }}" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Menu Section -->


        <!-- ======= Specials Section ======= -->
        <section id="komentar" class="specials">
            <div class="container">

                <div class="section-title">
                    <h2>Komentar <span>Pengunjung</span></h2>
                    {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p> --}}
                </div>
            </div>
            <section id="testimonials" class="testimonials">
                <div class="container">

                    <div class="owl-carousel testimonials-carousel">

                        @foreach ($komen as $komen)

                        <div class="testimonial-item">
                            <img src="{{ asset('userinterface/assets/img/testimonials/profil.png') }}"
                                class="testimonial-img" alt="">
                            <h3>{{ $komen->nama }}</h3>
                            <h4>{{ $komen->created_at }}</h4>
                            {{-- <div class="stars">
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <i class="icofont-star"></i>
                                </div> --}}
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $komen->komentar }}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>

                        @endforeach

                    </div>

                </div>
            </section>
            <div class="container">
                <div class="container book-a-table" id="book-a-table">

                    <form action="{{ route('testimoni.store') }}" method="post" class="php-email-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-4 col-md-6 form-group">
                                <input type="text" name="nama" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-lg-4 col-md-6 form-group">
                                <input type="text" class="form-control" name="telephone" placeholder="Your Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="komentar" rows="5" placeholder="Komentar"></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>
        </section><!-- End Specials Section -->

    @endsection
