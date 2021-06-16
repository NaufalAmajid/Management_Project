@extends('admin.layoutadmin.headfoot')

@section('content')

    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="title">
                        <h4>Fasilitas</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fasilitas</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="title pb-20">
            <button type="button" class="btn btn-lg btn-block" data-bgcolor="#1da1f2" data-color="#ffffff"
                data-toggle="modal" data-target="#small-modal"><i class="icon-copy fa fa-plus-square"
                    aria-hidden="true"></i>
                 Fasilitas</button>
            <div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="myLargeModalLabel">Tambahkan Fasilitas</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('halfasilitas.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" class="form-control-file form-control height-auto" name="nama_fasilitas" placeholder="fasilitas...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12">
                                        <input type="file" class="form-control-file form-control height-auto" name="gambar_fasilitas">
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

        <div class="row clearfix">
            @foreach ($datafas as $fas)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                <div class="card card-box">
                    <img class="card-img-top" style="width:200; height: 200px;" src="{{ asset('fasilitas/'.$fas->gambar_fasilitas) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title weight-500">{{ $fas->nama_fasilitas }}</h5>
                        <a href="#" data-toggle="modal" data-target="#edit-{{ $fas->id }}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="edit-{{ $fas->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="myLargeModalLabel">Tambahkan Fasilitas</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('halfasilitas.update', $fas->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="modal-body">

                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12">
                                        <input type="text" class="form-control-file form-control height-auto" name="nama_fasilitas" value="{{ $fas->nama_fasilitas }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12 col-md-12">
                                        <input type="file" class="form-control-file form-control height-auto" name="gambar_fasilitas">
                                    </div>
                                </div>


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection
