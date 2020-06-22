<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
      @endif
      <h1>Edit Data Siswa</h1>
      <div class="row">
        <div class="col-lg-12">
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
    <!-- Modal -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
