@extends('layouts/tampilan')

@section('title','Menu')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Hello,admin</h1>
        <div class="card col-lg-12 mt-3">

          <div class="card-body">
            @foreach ($show as $show)
            <div class="col-md-12 mt-3">
              <div class="card h-100 card mb-12 shadow-sm ">
                <div class="card-body">
                  <h5 class="card-title">Nama : {{$show->name}}</h5>
                  <p class="card-text">Jenis Kelamin : {{$show->gender}}</p>
                  <p class="card-text">No Handphone : {{$show->no_hp}}</p>
                  <p class="card-text">Email : {{$show->email}}</p>
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
        </div>

      </div>
    </div>
  </div>
@endsection
