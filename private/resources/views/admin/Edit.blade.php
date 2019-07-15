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
               Edit Data Siswa
              </div>
                <div class="container-fluid">
                  </br>
                  <form class="" action="{{ route('siswa.edit', $siswaEdit)}}" method="post">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama_siswa" id="siswa" placeholder="Masukan Nama Siswa" value="{{$siswaEdit->nama_siswa}}">
                    </div>
                    <div class="form-group">
                      <label for="">Kelas</label>
                      <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukan Kelas" value="{{$siswaEdit->kelas}}">
                    </div>
                    <div class="form-group">
                      <label for="">Nis</label>
                      <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan Nis" value="{{$siswaEdit->nis}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form>
                  </br>
              </div>
            </div>

            </div>
            
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
