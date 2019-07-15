@extends('admin.template')

@section('main')
<div id="index">
  <div id="content">

          <!-- Topbar -->
          
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
          <div class="card">
              <div class="card-header">
               Tambah Data Siswa
              </div>
                <div class="container-fluid">
                  </br>
                  <form class="" action="{{url('store')}}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama_siswa" id="siswa" placeholder="Masukan Nama Siswa">
                    </div>
                    <div class="form-group">
                      <label for="">Kelas</label>
                      <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukan Kelas">
                    </div>
                    <div class="form-group">
                      <label for="">Nis</label>
                      <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan Nis">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </form>
                  </br>
              </div>
            </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Nis</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_siswa as $data_siswa)
                  <tr>
                      <td>{{$data_siswa->nama_siswa}}</td>
                      <td>{{$data_siswa->kelas}}</td>
                      <td>{{$data_siswa->nis}}</td>
                      <td><a href="DataSiswa/{{$data_siswa->id}}/edit" class="btn btn-primary">Edit</a> <a href="DataSiswa/{{$data_siswa->id}}/delete" class="btn btn-warning">Hapus</a> </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          </div>
          <!-- /.container-fluid -->

      </div>
    </form>
  </div>
@stop

@section('footer')
<footer id="footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
</footer>
@stop
