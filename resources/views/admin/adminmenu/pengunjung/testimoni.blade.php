@extends('admin.layoutadmin.headfoot')

@section('content')

    <div class="title pb-20">
        <h2 class="h3 mb-0">Daftar Testimoni</h2>
    </div>

    <div class="row clearfix">

        @foreach ($komen as $komen)
        <form action="{{ route('testimoni.destroy', $komen->id )}}" method="POST" id="{{ $komen->id }}">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
        </form>
        
        <div class="col-sm-12 col-md-4 mb-30">
            <div class="card card-box">
                <h5 class="card-header weight-500">{{ $komen->email }}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{ $komen->nama }}</h5>
                    <p class="card-text">{{ $komen->komentar }}</p>
                    <button form="{{ $komen->id }}" onclick="return confirm('Hapus Komentar?');" class="btn btn-danger">Hapus</button>
                </div>
                <div class="card-footer text-muted">
                    {{ $komen->created_at }}
                </div>
            </div>
        </div>

        @endforeach

    </div>

@endsection
