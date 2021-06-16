@extends('admin.layoutadmin.headfoot')

@section('content')

<div class="min-height-200px">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Informasi & Kontak</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Pengaturan Informasi dan Kontak</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            @foreach ($datakon as $datakon)
            @endforeach
            <div class="faq-wrap">
                <h4 class="mb-20 h4 text-blue">HOME</h4>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq1">
                                Halaman Home
                            </button>
                        </div>
                        <hr>
                        <div id="faq1" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <form action="{{ route('kontak.update', $datakon->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-6">
                                                <label>Info Telephone</label>
                                                <input class="form-control" id="tel" name="kontak"
                                                    type="text" value="{{ $datakon->kontak }}" placeholder="info telephone..." required>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <label>Info Operasional</label>
                                                <input class="form-control" id="jadwal" name="jadwal"
                                                    type="time" value="{{ $datakon->jadwal }}" placeholder="info buka..." required>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <input class="form-control" name="lokasi"
                                                    type="hidden" value="{{ $datakon->lokasi }}" required>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <input class="form-control" name="email"
                                                    type="hidden" value="{{ $datakon->email }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-12">
                                                <button type="submit" class="btn col-sm-12 col-md-12" data-bgcolor="#4EC5F1"
                                                    data-color="#ffffff"><i class="fa fa-telegram"></i> Ubah</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="mb-20 h4 text-blue">TENTANG</h4>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2">
                                Halaman Tentang
                            </button>
                        </div>
                        <hr>
                        <div id="faq2" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <form action="{{ route('kontak.update', $datakon->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT">
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-md-6">
                                                <label>Info Lokasi</label>
                                                <input class="form-control" id="lokasi" name="lokasi"
                                                    type="text" value="{{ $datakon->lokasi }}" placeholder="info lokasi..." required>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <label>Info Email</label>
                                                <input class="form-control" id="email" name="email"
                                                    type="text" value="{{ $datakon->email }}" placeholder="info email..." required>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <input class="form-control" name="kontak"
                                                    type="hidden" value="{{ $datakon->kontak }}" required>
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <input class="form-control" name="jadwal"
                                                    type="hidden" value="{{ $datakon->jadwal }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-12">
                                                <button type="submit" class="btn col-sm-12 col-md-12" data-bgcolor="#4EC5F1"
                                                    data-color="#ffffff"><i class="fa fa-telegram"></i> Ubah</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection