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
               Tambah Data Pelanggaran
              </div>
                <div class="container-fluid">
                  </br>
                  <form class="" action="{{route('store2.input')}}" method="pelanggaran">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="">Jenis Pelanggaran</label>
                      <input type="text" class="form-control" id="pelanggaran" name="pelanggaran" placeholder="Masukan Jenis Pelanggaran">
                    </div>
                    <div class="form-group">
                      <label for="">Poin Pelanggaran</label>
                      <input type="text" class="form-control" name="poin" id="poin" placeholder="Masukan Poin Pelanggaran">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </form>
                  </br>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Pelanggaran</th>
                      <th>Poin</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Pelanggaran as $Pelanggaran)
                  <tr>
                      <td>{{$Pelanggaran->pelanggaran}}</td>
                      <td>{{$Pelanggaran->poin}}</td>
                      <td><a href="DataPelanggaran/{{$Pelanggaran->id}}/edit" class="btn btn-primary">Edit</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->

    </div>
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
