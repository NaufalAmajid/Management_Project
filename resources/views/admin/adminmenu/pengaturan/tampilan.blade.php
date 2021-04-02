@extends('admin.layoutadmin.headfoot')

@section('content')

    <div class="title pb-20">
        <h2 class="h3 mb-0">Pengaturan Tampilan</h2>
    </div>

    <div class="row">
        <div class="col-md-4 mb-20">
            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="{{ asset('admin/vendors/images/medicine-bro.svg') }}" alt="">
                </div>
                <div class="content">
                    <h3 class="h4">Services</h3>
                    <p class="max-width-200 ">We provide superior health care in a compassionate maner</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-20">
            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="{{ asset('admin/vendors/images/remedy-amico.svg') }}" alt="">
                </div>
                <div class="content">
                    <h3 class="h4">Medications</h3>
                    <p class="max-width-200 ">Look for prescription and over-the-counter drug information.</p>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-20">
            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="{{ asset('admin/vendors/images/paper-map-cuate.svg') }}" alt="">
                </div>
                <div class="content">
                    <h3 class="h4">Locations</h3>
                    <p class="max-width-200 ">Convenient locations when and where you need them.</p>
                </div>
            </a>
        </div>
    </div>

@endsection