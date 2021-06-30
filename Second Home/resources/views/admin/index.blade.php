@extends('layouts/tampilan')

@section('title','Data Homestay')

@section('container')
  <div class="container">
    <div class="row">
      <div class="card col-lg-12 mt-3">
        <div class="card-header ">
          <h1 class="mt-2">Data Homestay</h1>
        </div>

        <div class="card-body">

            <table class="table table-hover">
              <thead class="thead-dark ">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Homestay</th>
                  <th scope="col">Nama Pemilik</th>
                  <th scope="col">No.HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Email</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Aksi</th>

                </tr>
              </thead>
              <tbody>
                @foreach ($homestay as $hms)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <th>{{ $hms-> nama_homestay }}</th>
                  <th>{{ $hms-> nama_pemilik }}</th>
                  <th>{{ $hms-> no_hp }}</th>
                  <th>{{ $hms-> alamat }}</th>
                  <th>{{ $hms-> email }}</th>
                  <th>{{ $hms-> harga }}</th>
                  <td>
                      <a href="/admin/{{$hms->id}}/edit" class="badge badge-warning">Edit</a>
                      <a href="#" class="badge badge-danger konfirmasi" homestay-id="{{$hms->id}}">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
           </table>
           <div >
             {{ $homestay -> links() }}
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
  </div>
@endsection

@section('footer')
  <script>
      $('.konfirmasi').click(function(){
        var id = $(this).attr('homestay-id');
        Swal.fire({
          title: 'Anda yakin ingin menghapus data ?',
          text: "Data tidak akan bisa di kembalikan!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus data !'
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Deleted!',
              'Data Berhasil dihapus.',
              'success'
            ).then((result) => {
              if(result.value){
                window.location = '/admin/'+id+'/delete';
              }
            })
          }
        })
      });
  </script>
@endsection
