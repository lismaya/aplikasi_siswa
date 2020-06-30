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
            <form action="/siswa/create" method="post">
              {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Depan</label>
              <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Nama Depan">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Belakang</label>
              <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Nama Belakang">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Email">
            </div>
            <div class="form-group">
             <label for="exampleFormControlSelect1">Jenis Kelamin</label>
             <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
               <option value="L">Laki-Laki</option>
               <option value="P">Perempuan</option>
             </select>
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1">Agama</label>
             <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Agama">
           </div>

           <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
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
