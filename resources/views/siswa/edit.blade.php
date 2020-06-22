@extends('layouts.master')
@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Input Sizing</h3>
								</div>
								<div class="panel-body">
                  <form action="/siswa/{{$siswa->id}}/update" method="post">
                    {{csrf_field()}}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Depan</label>
                    <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Nama Depan" value="{{$siswa->nama_depan}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Belakang</label>
                    <input type="text" name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Nama Belakang" value="{{$siswa->nama_belakang}}">
                  </div>
                  <div class="form-group">
                   <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                   <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                     <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                     <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                   </select>
                 </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1">Agama</label>
                   <input type="text" name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="Masukkan Agama" value="{{$siswa->agama}}">
                 </div>
                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                </div>
                  <button type="submit" class="btn btn-warning">Update</button>
                </form>
								</div>
							</div>
            </div>
          </div>
    </div>
  </div>
</div>
@endsection
