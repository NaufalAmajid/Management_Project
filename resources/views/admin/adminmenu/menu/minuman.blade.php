@extends('admin.layoutadmin.headfoot')

@section('content')

    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Minuman</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('kd-admin') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                <div class="pd-20 card-box">
                    <h5 class="h4 text-blue mb-20">Custom Drink Menu</h5>
                    <div class="tab">
                        <ul class="nav nav-tabs customtab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"
                                    aria-selected="true">Daftar/Tabel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"
                                    aria-selected="false">Tambah Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact2" role="tab"
                                    aria-selected="false">Preview</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home2" role="tabpanel">
                                <div class="pd-20">

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Jenis Minuman</th>
                                                    <th scope="col">Nama Minuman</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Item</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($dataminum[0] as $item)
                                                    <form action="{{ route('minum.destroy', $item->id) }}" method="POST"
                                                        id="{{ $item->id }}">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="DELETE">
                                                    </form>
                                                    <tr>
                                                        <th scope="row">{{ $i++ }}</th>
                                                        <th scope="row">{{ $item->jenis }}</th>
                                                        <th scope="row">{{ $item->nama_minuman }}</th>
                                                        <th scope="row">@rupiah($item->harga)</th>
                                                        <th scope="row">
                                                            <img src="{{ asset('gambar/' . $item->gambar_minuman) }}"
                                                                alt="" style="width: 50px; height: 50px">
                                                        </th>
                                                        <th scope="row">
                                                            <button type="submit"
                                                                onclick="return confirm('Anda yakin menghapus data menu ini?')"
                                                                form="{{ $item->id }}" class="btn"
                                                                data-bgcolor="#fd3535" data-color="#ffffff"><i
                                                                    class="fa fa-trash-o"></i></button>

                                                            <button type="button" class="btn" data-bgcolor="#1a4bf9"
                                                                data-color="#ffffff" data-toggle="modal"
                                                                data-target="#Medium-modal-{{ $item->id }}"><i
                                                                    class="fa fa-pencil-square-o"></i></button>
                                                        </th>
                                                    </tr>

                                                    {{-- EDIT DATA MAKANAN --}}


                                                    <div class="modal fade" id="Medium-modal-{{ $item->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myLargeModalLabel">Ubah
                                                                        Data
                                                                        Minuman</h4>
                                                                    <button type="button" class="close" data-dismiss="modal"
                                                                        aria-hidden="true">×</button>
                                                                </div>
                                                                <form action="{{ route('minum.update', $item->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" value="PUT" name="_method">
                                                                    <div class="modal-body">

                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-6 col-md-4 col-form-label">Nama
                                                                                Minuman</label>
                                                                            <div class="col-sm-6 col-md-6">
                                                                                <input class="form-control"
                                                                                    id="nama_minuman" name="nama_minuman"
                                                                                    type="text"
                                                                                    value="{{ $item->nama_minuman }}"
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-6 col-md-4 col-form-label">Harga
                                                                                Minuman</label>
                                                                            <div class="col-sm-6 col-md-6">
                                                                                <input class="form-control" id="harga"
                                                                                    name="harga" type="number"
                                                                                    value="{{ $item->harga }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label
                                                                                class="col-sm-6 col-md-4 col-form-label">Jenis
                                                                                Minuman</label>
                                                                            <div class="col-sm-6 col-md-6">
                                                                                <select class="custom-select"
                                                                                    name="jenis">
                                                                                    <option value="{{ $item->jenis }}"
                                                                                        selected="">
                                                                                        {{ $item->jenis }}</option>
                                                                                    <option value="Reguler">Reguler
                                                                                    </option>
                                                                                    <option value="Aneka Kopi">Aneka Kopi
                                                                                    </option>
                                                                                    <option value="Jumbo">Jumbo</option>
                                                                                    <option value="Tradisional">Tradisional
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <div class="col-lg-3 col-md-6 col-sm-12 mb-30">
                                                                                <div class="da-card">
                                                                                    <div class="da-card-photo">
                                                                                        <img src="{{ asset('gambar/' . $item->gambar_minuman) }}"
                                                                                            alt="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-6">
                                                                                <input type="file"
                                                                                    class="form-control-file form-control height-auto"
                                                                                    name="gambar_minuman"
                                                                                    value="{{ $item->gambar_minuman }}">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan
                                                                            Perubahan</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>


                            {{-- TAMBAH DATA --}}

                            <div class="tab-pane fade" id="profile2" role="tabpanel">
                                <div class="pd-20">
                                    <form action="{{ route('minum.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-md-2 col-form-label">Nama Minuman</label>
                                            <div class="col-sm-6 col-md-6">
                                                <input class="form-control" id="nama_minuman" name="nama_minuman"
                                                    type="text" placeholder="Masukkan Nama..." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-md-2 col-form-label">Harga Minuman</label>
                                            <div class="col-sm-6 col-md-6">
                                                <input class="form-control" id="harga" name="harga" type="number"
                                                    placeholder="Masukkan Harga..." required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-md-2 col-form-label">Jenis Minuman</label>
                                            <div class="col-sm-6 col-md-6">
                                                <select class="selectpicker form-control" data-size="5" id="jenis"
                                                    name="jenis" required>
                                                    <option value="-">...</option>
                                                    <option value="Reguler">Reguler
                                                    </option>
                                                    <option value="Aneka Kopi">Aneka Kopi</option>
                                                    <option value="Jumbo">Jumbo</option>
                                                    <option value="Tradisional">Tradisional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-6 col-md-2 col-form-label">Gambar Minuman</label>
                                            <div class="col-sm-6 col-md-6">
                                                <input type="file" class="form-control-file form-control height-auto"
                                                    name="gambar_minuman" required>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 col-md-12">
                                                <button type="submit" class="btn col-sm-12 col-md-12" data-bgcolor="#1b30ee"
                                                    data-color="#ffffff"><i class="fa fa-telegram"></i> Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2" role="tabpanel">
                                <div class="pd-20">
                                    <div class="product-wrap">
                                        <div class="title row">
                                            <h6 class="mb-10">----- Reguler -----</h6>
                                        </div>
                                        <div class="mb-10"></div>
                                        <div class="product-list">
                                            <ul class="row">
                                                @foreach ($dataminum[2] as $reg)
                                                    <li class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="product-box">
                                                            <div class="producct-img"><img class="col-md-12"
                                                                    src="{{ asset('gambar/' . $reg->gambar_minuman) }}"
                                                                    alt="" style="width: auto; height: 200px">
                                                            </div>
                                                            <div class="product-caption">
                                                                <h4><a href="#">{{ $reg->nama_minuman }}</a></h4>
                                                                <div class="price">
                                                                    <ins>@rupiah($reg->harga)</ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="title row">
                                            <h6 class="mb-10">----- Aneka Kopi -----</h6>
                                        </div>
                                        <div class="mb-10"></div>
                                        <div class="product-list">
                                            <ul class="row">
                                                @foreach ($dataminum[1] as $kopi)
                                                    <li class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="product-box">
                                                            <div class="producct-img"><img class="col-md-12"
                                                                    src="{{ asset('gambar/' . $kopi->gambar_minuman) }}"
                                                                    alt="" style="width: auto; height: 200px">
                                                            </div>
                                                            <div class="product-caption">
                                                                <h4><a href="#">{{ $kopi->nama_minuman }}</a></h4>
                                                                <div class="price">
                                                                    <ins>@rupiah($kopi->harga)</ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="title row">
                                            <h6 class="mb-10">----- Jumbo -----</h6>
                                        </div>
                                        <div class="mb-10"></div>
                                        <div class="product-list">
                                            <ul class="row">
                                                @foreach ($dataminum[3] as $jum)
                                                    <li class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="product-box">
                                                            <div class="producct-img"><img class="col-md-12"
                                                                    src="{{ asset('gambar/' . $jum->gambar_minuman) }}"
                                                                    alt="" style="width: auto; height: 200px">
                                                            </div>
                                                            <div class="product-caption">
                                                                <h4><a href="#">{{ $jum->nama_minuman }}</a></h4>
                                                                <div class="price">
                                                                    <ins>@rupiah($jum->harga)</ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-wrap">
                                        <div class="title row">
                                            <h6 class="mb-10">----- Tradisional -----</h6>
                                        </div>
                                        <div class="mb-10"></div>
                                        <div class="product-list">
                                            <ul class="row">
                                                @foreach ($dataminum[4] as $tra)
                                                    <li class="col-lg-4 col-md-6 col-sm-12">
                                                        <div class="product-box">
                                                            <div class="producct-img"><img class="col-md-12"
                                                                    src="{{ asset('gambar/' . $tra->gambar_minuman) }}"
                                                                    alt="" style="width: auto; height: 200px">
                                                            </div>
                                                            <div class="product-caption">
                                                                <h4><a href="#">{{ $tra->nama_minuman }}</a></h4>
                                                                <div class="price">
                                                                    <ins>@rupiah($tra->harga)</ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
