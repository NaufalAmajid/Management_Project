@extends('admin.layoutadmin.headfoot')

@section('content')

    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Gallery</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="title pb-20">
            <button type="button" class="btn btn-lg btn-block" data-bgcolor="#1da1f2" data-color="#ffffff"
                data-toggle="modal" data-target="#small-modal"><i class="icon-copy fa fa-plus-square"
                    aria-hidden="true"></i>
                Tambah Galery</button>
            <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="myLargeModalLabel">Silahkan Masukkan Gambar</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12">
                                        <input type="file" class="form-control-file form-control height-auto" name="gambar">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-wrap">
            <ul class="row">
                @foreach ($gambar as $gb)
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="da-card box-shadow">
                            <div class="da-card-photo">
                                <img src="{{ asset('galery/' . $gb->gambar) }}" alt="">
                                <div class="da-overlay">
                                    <div class="da-social">
                                        <ul class="clearfix">
                                            <li><a href="{{ asset('galery/' . $gb->gambar) }}" data-fancybox="images"><i
                                                        class="fa fa-picture-o"></i></a></li>
                                            <li><a data-target="#modal-update-{{ $gb->id }}" data-toggle="modal"><i
                                                        class="icon-copy fa fa-edit"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <div class="modal fade" id="modal-update-{{ $gb->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="myLargeModalLabel">Edit Galery</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <form action="{{ route('galeri.update', $gb->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <div class="col-sm-12 col-md-12">
                                                <img src="{{ asset('galery/' . $gb->gambar) }}" alt="">
                                                <input type="file" class="form-control-file form-control height-auto"
                                                    name="gambar" value="{{ $gb->gambar }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>

    </div>
@endsection
