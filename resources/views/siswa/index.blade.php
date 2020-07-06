@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                @if(session('sukses'))
                <div class="alert alert-success" role="alert">
                  {{session('sukses')}}
                </div>
                @endif
                <div class="panel-heading">
                  <h1 class="panel-title">Data Siswa</h1>
                  <div class="right">
                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" ><i class="lnr lnr-plus-circle"> </i>
                    </button>
                  </div>
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>NAMA DEPAN</th>
                        <th>NAMA BELAKANG</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>Rata-Rata Nilai</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach( $data_siswa as $siswa)
                      <tr>
                          <td>{{$siswa->nama_depan}}</td>
                          <td>{{$siswa->nama_belakang}}</td>
                          <td>{{$siswa->jenis_kelamin}}</td>
                          <td>{{$siswa->agama}}</td>
                          <td>{{$siswa->alamat}}</td>
                          <td>{{$siswa->rataRataNilai()}}</td>
                          <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm"> Edit </a>
                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')"> Delete </a>
                            <a href="/siswa/{{$siswa->id}}/profile" class="btn btn-success btn-sm">Detail</a>
                          </td>

                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/siswa/create" method="post" enctype="multipart/form-data">
              {{csrf_field()}}
            <div class="form-group {{$errors->has('nama_depan') ? 'has-error' : ''}}">
              <label for="exampleInputEmail1">Nama Depan</label>
              <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Nama Depan" value="{{old('nama_depan')}}">
              @if($errors->has('nama_depan'))
                <span class="help-block"> {{$errors->first('nama_depan')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Belakang</label>
              <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Nama Belakang" value="{{old('nama_belakang')}}">
            </div>
            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}" >
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Email" value="{{old('email')}}">
              @if($errors->has('email'))
                <span class="help-block"> {{$errors->first('email')}}</span>
              @endif
            </div>
            <div class="form-group {{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
             <label for="exampleFormControlSelect1">Jenis Kelamin</label>
             <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
               <option value="L" {{(old('jenis_kelamin') =='L') ? 'selected' : ''}}>Laki-Laki</option>
               <option value="P" {{(old('jenis_kelamin') =='P') ? 'selected' : ''}}>Perempuan</option>
             </select>
             @if($errors->has('jenis_kelamin'))
               <span class="help-block"> {{$errors->first('jenis_kelamin')}}</span>
             @endif
           </div>
           <div class="form-group {{$errors->has('agama') ? 'has-error' : ''}}">
             <label for="exampleInputEmail1">Agama</label>
             <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Agama" value="{{old('agama')}}">
             @if($errors->has('agama'))
               <span class="help-block"> {{$errors->first('agama')}}</span>
             @endif
           </div>

           <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"> {{old('alamat')}}</textarea>
          </div>
          <div class="form-group {{$errors->has('avatar') ? 'has-error' : ''}}">
           <label for="exampleFormControlTextarea1">Avatar</label>
           <input type="file" name="avatar" class="form-control">
           @if($errors->has('avatar'))
             <span class="help-block"> {{$errors->first('avatar')}}</span>
           @endif
         </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
  @endsection
