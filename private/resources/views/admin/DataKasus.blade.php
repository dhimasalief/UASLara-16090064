@extends('admin.template')

@section('main')
<div id="index">
  <div id="content">

          <!-- Topbar -->
          
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
              <form class="" action="" method="post">
                  
          <div class="card">
              <div class="card-header">
               Tambah Data Kasus
              </div>
                <div class="container-fluid">
                  </br>
                  <form>
                  <div class="form-group">
                      <label for="">Tanggal</label>
                      <input type="text" class="form-control" id="tanggal" placeholder="Masukan Tanggal">
                    </div>
                    <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <select class="form-control">
                    <option>--Pilih Siswa--</option>
                    <option>Agus</option>
                    <option>henry</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Pelanggaran</label>
                      <input type="text" class="form-control" id="pelanggaran" placeholder="Masukan Pelanggaran">
                    </div>
                    <div class="form-group">
                      <label for="">Poin</label>
                      <input type="text" class="form-control" id="poin" placeholder="Masukan Poin">
                    </div>
                    <div class="form-group">
                      <label for="">Deskripsi</label>
                      <input type="text" class="form-control" id="deskripsi" placeholder="Masukan Deskripsi">
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
                      <th>Tanggal</th>
                      <th>Nama Siswa</th>
                      <th>Pelanggaran</th>
                      <th>Poin</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>1</td>
                      <td>Ipa 1</td>
                      <td>0</td>
                      <td>0 kali</td>
                      <td>0</td>
                    </tr>
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
