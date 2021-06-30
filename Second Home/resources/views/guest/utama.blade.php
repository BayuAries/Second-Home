@extends('layouts/cover')

@section('title','Cari Homestay')

@section('container')

<header class="masthead" style="background-image: url('{{ asset('img/clean1.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Home Stay</h1>
          <span class="subheading">Cari Home Stay di Yogyakarta </span>
        </div>
      </div>
    </div>
  </div>
</header>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <form action="/utama" method="GET" role="search">
            {{ csrf_field() }}
            <div class="input-group">
              <input class="col-auto "type="text" class="form-control" name="cari" placeholder="Cari Kabupaten">
              <button type="submit" class="btn btn-outline-secondary" >Cari</button>
            </div>
          </form>
        </div>
@foreach ($homestay as $hms)
        <div class="col-md-4 mt-3">
          <div class="card h-100 card mb-4 shadow-sm ">
            <img src="{{asset( $hms->path )}}" height="220px"  class="card-img-top" alt="gambar">
            <div class="card-body">
              <h5 class="card-title">{{$hms->nama_homestay}}</h5>
              <p class="card-text">{{$hms->keterangan}}</p>
              <p class="card-text">Jumlah Kamar : {{$hms->kamar}}</p>
              <p class="card-text">{{$hms->harga}} / Malam</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/guest/{{$hms->id}}/book" class="btn btn-sm btn-outline-secondary">Booking</a>
                </div>
                <small class="text-muted">{{$hms->kabupaten}}</small>
              </div>
            </div>
          </div>
        </div>
@endforeach
      <div class="col-lg-12">
        @if (session('status'))
            <div class="alert alert-success my-3">
                {{ session('status') }}
            </div>
        @endif
      </div>
    </div>
    <div class="col-md-4 mt-3">
      {{ $homestay -> links() }}
    </div>

    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Copy Right &copy; Team 5 2019</p>
      </div>
    </div>
  </div>
</div>
@endsection
