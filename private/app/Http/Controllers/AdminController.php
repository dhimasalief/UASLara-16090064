<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggaran;

class AdminController extends Controller
{
    public function index(){
        $page = 'index';
        return view ('admin.pages.index',compact('page','admin'));
    }

    public function Kasus(){
        $page = 'Kasus';
        return view('admin.pages.Kasus',compact('page','admin'));
    }

    public function DataSiswa(){
        $page = 'DataSiswa';
        return view('admin.pages.DataSiswa',compact('page','admin'));
    }

    public function DataPelanggaran(){
        $page = 'DataPelanggaran';
        return view('admin.pages.DataPelanggaran',compact('page','admin'));
    }

    public function Login(){
        $page = 'Login';
        return view('admin.pages.Login',compact('page','Admin'));
    }
    public function create2(){
        $Pelanggaran = Pelanggaran::all();
        return view('admin.DataPelanggaran', compact('Pelanggaran'));
    }
}
