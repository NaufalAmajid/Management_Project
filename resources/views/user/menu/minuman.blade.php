@extends('user.layout.headfoot')

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
            <li>Menu Makanan</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->


  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container">

      <div class="section-title">
        <h2>Menu <span>Makanan</span></h2>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="menu-flters">
            <li data-filter="*" class="filter-active">Semua</li>
            <li data-filter=".filter-mabe">Makan Besar</li>
            <li data-filter=".filter-paket">Paketan</li>
            <li data-filter=".filter-cemil">Cemilan</li>
          </ul>
        </div>
      </div>

      <div class="row menu-container">

            <!-- MAKAN BESAR -->
        
        <div class="col-lg-6 menu-item filter-mabe">
            <div class="menu-content">
                <h5 style="font-family:Tahoma;">-----MAKAN BESAR-----</h5>
            </div>           
        </div>

        <div class="col-lg-6 menu-item filter-mabe">
          <div class="menu-content">
            <a href>Sego Mancan Kerah</a><span>Rp. 12.000</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-mabe">
            <div class="menu-content">
              <a href>Sego Goreng</a><span>Rp. 13.000</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
        </div>

        <div class="col-lg-6 menu-item filter-mabe">
            <div class="menu-content">
              <a href>Mie Goreng</a><span>Rp. 10.000</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
        </div>

            <!-- PAKETAN -->
        <div class="col-lg-6 menu-item filter-paket">
            <div class="menu-content">
                <h5 style="font-family:Tahoma;">-----PAKETAN-----</h5>
            </div>           
        </div>

        <div class="col-lg-6 menu-item filter-paket">
          <div class="menu-content">
            <a href>Ayam Lada Hitam + Es/Hot Teh</a><span>Rp. 15.000</span>
          </div>
          <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-paket">
            <div class="menu-content">
              <a href>Ayam Mercon + Es/Hot Teh</a><span>Rp. 15.000</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
        </div>

        <div class="col-lg-6 menu-item filter-paket">
            <div class="menu-content">
              <a href>Ayam Gongso + Es/Hot Teh</a><span>Rp. 15.000</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
        </div>

            <!-- CEMILAN -->
        <div class="col-lg-6 menu-item filter-cemil">
            <div class="menu-content">
                <h5 style="font-family:Tahoma;">-----CEMILAN-----</h5>
            </div>           
        </div>
        
        <div class="col-lg-6 menu-item filter-cemil">
          <div class="menu-content">
            <a href>Tempe Mendoan</a><span>Rp. 8.000</span>
          </div>
          <div class="menu-ingredients">
            A delicate crab cake served on a toasted roll with lettuce and tartar sauce
          </div>
        </div>

        <div class="col-lg-6 menu-item filter-cemil">
            <div class="menu-content">
              <a href>Roti Bakar</a><span>Rp. 10.000</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
        </div>

        <div class="col-lg-6 menu-item filter-cemil">
            <div class="menu-content">
              <a href>Onion Ring</a><span>Rp. 7.000</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
        </div>
        
      </div>

    </div>
  </section><!-- End Menu Section -->

@endsection