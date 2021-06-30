@extends('layouts/dashboard')

@section('title','Data Booking Homestay')

@section('container')
<div class="container">
  <div class="row">

    <div class="card col-lg-12 mt-3">
      <div class="card-body card-mb-3 ">
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Homestay</th>
              <th scope="col">Tanggal Check In</th>
              <th scope="col">Tanggal Check Out</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($book as $book)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <th>{{ $book-> nama_homestay }}</th>
              <th>{{ $book-> check_in }}</th>
              <th>{{ $book-> check_out }}</th>
            </tr>
            @endforeach

          </tbody>
       </table>

      </div>
    </div>

  </div>
</div>
@endsection
