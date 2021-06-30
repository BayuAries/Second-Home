@extends('layouts/cover')

@section('title','Booking Homestay')

@section('container')


<header class="masthead" style="background-image: url('{{ asset('img/about-bg.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Booking</h1>
          <span class="subheading">Booking Home Stay Anda di sini</span>
        </div>
      </div>
    </div>
  </div>
</header>

@guest
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div class="">
            <h4>Daftarkan Diri Anda</h4>
          </div>
          <div class="">
            <h4>Atau</h4>
          </div>
          <div class="">
            <h4>Masuk Akun Anda</h4>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="{{ route('register') }}" class="btn btn-sm btn-outline-secondary">Daftar</a>
          </div>
          <div class="btn-group">
            <a href="{{ route('login') }}" class="btn btn-sm btn-outline-secondary">Masuk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@else
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      @foreach ($show as $show)
      <div class="col-md-12 mt-3">
        <div class="card h-90 card mb-12 shadow-sm ">
          <img src="{{asset( $show->path )}}" height=""  class="card-img-top" alt="gambar">
          <div class="card-body">
            <h5 class="card-title">{{$show->nama_homestay}}</h5>
            <p class="card-text">{{$show->keterangan}}</p>
            <p class="card-text">Alamat : {{$show->alamat}}</p>
            <p class="card-text">Jumlah Kamar : {{$show->kamar}}</p>
            <p class="card-text">No HP : {{$show->no_hp}}</p>
            <p class="card-text">Email : {{$show->email}}</p>
            <p class="card-text">Harga : {{$show->harga}} / Malam</p>
          </div>
          @endforeach

          <div class="card-footer bg-white ">
            <form  action="/guest/{{$show->nama_homestay}}/booking" method="post">
              @csrf
              <div class="from-group col-4 mt-3">
                <label for="check_in">Tanggal Masuk</label>
                <input type="date" name="check_in"class="form-control @error('check_in') is-invalid @enderror" required>
                @error('check_in')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
              <div class="from-group col-4 mt-3">
                <label for="check_out">Tanggal Keluar</label>
                <input type="date" name="check_out"class="form-control @error('check_out') is-invalid @enderror" required>
                @error('check_out')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mt-3" >Booking</button>
            </form>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
@endguest

@endsection
