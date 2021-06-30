@extends('layouts/cover')

@section('title','History Booking')

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

@guest
@else
  <div class="album py-5 bg-light">
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
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($store as $store)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <th>{{ $store-> nama_homestay }}</th>
                  <th>{{ $store-> check_in }}</th>
                  <th>{{ $store-> check_out }}</th>
                  <td>
                    <a href="#" class="badge badge-danger konfirmasi" book-id="{{$store->id}}">Batalkan</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
           </table>

          </div>
        </div>

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
@endguest

@endsection

@section('footer')
  <script>
      $('.konfirmasi').click(function(){
        var id = $(this).attr('book-id');
        Swal.fire({
          title: 'Anda yakin ingin membatalkan bookingan ?',
          text: "Data tidak akan bisa di kembalikan!",
          icon: 'warning',
          showCancelButton:  true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, batalkan !'
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Data Berhasil dihapus.',
              'success'
            ).then((result) => {
              if(result.value){
                window.location = '/guest/'+id+'/delete';
              }
            })
          }
        })
      });
  </script>
@endsection
