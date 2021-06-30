@extends('layouts/dashboard')

@section('title','Data Homestay')

@section('container')
  <div class="container">
    <div class="row">
      <div class="card col-lg-12 mt-3 ">

        <div class="card-header ">
          <h1 class="mt-2">Data Homestay</h1>
        </div>
        <div class="card-body col-auto">

        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Homestay</th>
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
              <th>{{ $hms-> no_hp }}</th>
              <th>{{ $hms-> alamat }}</th>
              <th>{{ $hms-> email }}</th>
              <th>{{ $hms-> harga }}</th>
              <td>
                  <a href="/{{$hms->id}}/edit" class="badge badge-warning">Edit</a>
                  <a href="#" class="badge badge-danger konfirmasi" homestay-id="{{$hms->id}}">Hapus</a>
              </td>
            </tr>
            @endforeach

          </tbody>
       </table>
       <div >
         {{ $homestay -> links() }}
       </div>

       <div class="col-6">
         <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Homestay</button>
          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Tambah Homestay</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="/owner" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="nama_homestay">Nama Homestay</label>
                      <input type="text" class="form-control @error('nama_homestay') is-invalid @enderror" id="nama_homestay" placeholder="Masukan Nama Homestay" required name="nama_homestay" autocomplete="nama_homestay" autofocus>
                      @error('nama_homestay')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="no_hp">Nomor Hp</label>
                      <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan Nomor Hp" required="required" name="no_hp" autocomplete="no_hp" autofocus>
                      @error('no_hp')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" required name="alamat" autocomplete="alamat" autofocus>
                      @error('alamat')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email" required name="email" autocomplete="email" autofocus>
                      @error('email')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Rp." name="harga" required="required" value="Rp." autocomplete="harga" autofocus>
                      @error('harga')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="kamar">Jumalah Kamar</label>
                      <input type="text" class="form-control @error('kamar') is-invalid @enderror" id="kamar" placeholder="Jumlah Kamar" name="kamar" required="required" autocomplete="kamar" autofocus>
                      @error('kamar')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="image">Foto Homestay</label>
                      <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Masukan Foto" name="image[]" required multiple="true" >
                      @error('image')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group row">
                        <label for="kabupaten" class="col-md-4 col-form-label text-md-left">Kabupaten</label>
                        <div class="col-md-6">
                          <select id="kabupaten" class="form-control  @error('kabupaten') is-invalid @enderror"  name="kabupaten" required>
                            <option selected>Pilih</option>
                            <option value="Sleman">Sleman</option>
                            <option value="Bantul">Bantul</option>
                            <option value="Kota Yogyakarta">Kota Yogyakarta</option>
                            <option value="Gunungkidul">Gunungkidul</option>
                            <option value="Kulon Progo">Kulon Progo</option>
                          </select>
                            @error('kabupaten')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="keterangan">Keterangan</label>
                      <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="keterangan" name="keterangan" required="required" autocomplete="keterangan" autofocus rows="8" cols="30"></textarea>
                      @error('keterangan')
                      <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                      <button type="submit" class="btn btn-primary" >Tambah Data</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
          showCancelButton:  true,
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
                window.location = '/'+id+'/delete';
              }
            })
          }
        })
      });
  </script>
@endsection
