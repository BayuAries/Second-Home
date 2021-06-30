@extends('layouts/cover')

@section('title','Masuk atau Registerasi')

@section('container')

<header class="masthead" style="background-image: url('{{ asset('img/clean2.jpg') }}')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Homestay</h1>
          <span class="subheading">Cari Home Stay di Yogyakarta </span>
        </div>
      </div>
    </div>
  </div>
</header>

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


@endsection
