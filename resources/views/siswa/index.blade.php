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
      <div class="row">
        <div class="col-6">
          <h1>DATA SISWA</h1>
        </div>
        <div class="col-6">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Siswa
          </button>


        </div>


        <table class="table table-hover">
          <tr>
            <th>NAMA DEPAN</th>
            <th>NAMA BELAKANG</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
          </tr>
          @foreach( $data_siswa as $siswa)
          <tr>
              <td>{{$siswa->nama_depan}}</td>
              <td>{{$siswa->nama_belakang}}</td>
              <td>{{$siswa->jenis_kelamin}}</td>
              <td>{{$siswa->agama}}</td>
              <td>{{$siswa->alamat}}</td>
              <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning"> Edit

              </td>

            </tr>
          @endforeach
        </table>
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
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
