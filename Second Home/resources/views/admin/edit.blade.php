@extends('layouts/tampilan')

@section('title','Edit Data Homestay')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Edit Data Homestay</h1>
      </div>
      <div class="col-lg-12">
        <form method="post" action="/admin/{{$edit->id}}/update">
          @csrf
          <div class="form-group mt-2">
            <label for="nama_homestay">Nama Homestay</label>
            <input type="text" class="form-control @error('nama_homestay') is-invalid @enderror" id="nama_homestay" placeholder="Masukan Nama Homestay" name="nama_homestay"
            value="{{ $edit->nama_homestay }}">
            @error('nama_homestay')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group mt-2">
            <label for="no_hp">Nomor Hp</label>
            <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="Masukan Nomor Hp" name="no_hp"
              value="{{ $edit->no_hp }}">
            @error('no_hp')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group mt-2">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Masukan Alamat" name="alamat"
              value="{{ $edit->alamat }}">
            @error('alamat')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email"
              value="{{ $edit->email }}">
              @error('email')
              <div class="invalid-feedback">{{$message}}</div>
              @enderror
          </div>
          <div class="form-group">
            <label for="kamar">Jumlah Kamar</label>
            <input type="text" class="form-control @error('kamar') is-invalid @enderror" id="kamar" placeholder="Jumlah Kamar" name="kamar" required="required" autocomplete="kamar" autofocus
            value="{{ $edit->kamar }}">
            @error('kamar')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group mt-2">
            <label for="kabupaten">Kabupaten</label>
              <div class="col-md-12">
                <select id="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror"  name="kabupaten" required
                value="{{ $edit->kabupaten }}">
                  <option selected>{{ $edit->kabupaten }}</option>
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
            <label for="keterangan">keterangan</label>
            <textarea class="form-control @error('keterangan') is-invalid @enderror" id="keterangan"  name="keterangan" required="required" autocomplete="keterangan" autofocus rows="8" cols="30" >
              <?php echo "$edit->keterangan "; ?>
            </textarea>
            @error('keterangan')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
          <div class="modal-footer">
            <a href="/table" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary" >Edit Data</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
