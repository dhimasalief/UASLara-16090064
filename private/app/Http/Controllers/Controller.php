<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Kasus;
use App\Pelanggaran;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function index()
    {
        $Posts = Post::all();

        return view('post.index');
    }

    public function index1()
    {
        $Kasus = Kasus::all();

        return view('kasus.index1');
    }

    public function index2()
    {
        $Pelanggaran = Pelanggaran::all();

        return view('pelanggaran.index2');
    }

    public function create()
    {
        $data_siswa = Post::all();
        return view('Admin.DataSiswa', ['data_siswa'=>$data_siswa]);
    }

    public function create1()
    {
        $data_kasus = Kasus::all();
        return view('Admin.DataKasus', ['data_kasus'=>$data_kasus]);
    }

    public function create2()
    {
        $data_pelanggaran = Pelanggaran::all();
        return view('Admin.DataPelanggaran', ['data_pelanggaran'=>$data_pelanggaran]);
    }

    public function store()
    {
        Post::create([
            'nama_siswa' => request('nama_siswa'),
            'kelas' => request ('kelas'),
            'nis' => request ('nis')
        ]); 
        
        return redirect('DataSiswa');   
    } 

    public function store1()
    {
        Kasus::create([
            'tanggal' => request('tanggal'),
            'nama_siswa' => request('nama_siswa'),
            'pelanggaran' => request ('pelanggaran'),
            'poin' => request('poin'),
            'keterangan' => request('keterangan')
        ]); 
        
        return redirect('kasus');   
    } 

    public function store2()
    {
        Pelanggaran::create([
            'pelanggaran' => request ('pelanggaran'),
            'poin' => request('poin')
        ]); 
        
        return redirect('DataPelanggaran');   
    } 

    public function edit($id)
    {
        $siswaEdit =Post::find($id);
        return view ('admin.Edit',['siswaEdit' => $siswaEdit]);
    }
    public function update(Request $request, $id)
    {
        $siswaEdit =Post::find($id);
        $siswaEdit->update($request->all());
        return redirect('DataSiswa')->with('sukses', 'Data berhasit diupdate');
    }
    public function delete(Request $request, $id)
    {
        $siswaEdit =Post::findOrFail($id);
        $siswaEdit->delete($request->all());
        return redirect('DataSiswa')->with('hapus', 'Data berhasit dihapus');
    }
}

