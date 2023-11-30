<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class ControllerSiswa extends Controller
{
    public function index() {
        // $siswa = siswa::latest()->paginate(5);
        // return view('data', compact('Siswa'))->with('i',(request()->input('page',1) -1) *5);
        $siswa = DB::table('datasiswa')->get();
        return view('data',['siswa' => $siswa]);
    }
    public function tambah(){
        return view('tambah');
    }
    public function store(Request $request){
        $request->validate([
            'nama_siswa' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'nis' => 'required',
        ]);

        DB::table('datasiswa')->insert([
            'nama_siswa'=> $request->nama_siswa,
            'kelas'=> $request->kelas,
            'jurusan'=> $request->jurusan, 
            'NIS'=>$request->nis 
        ]);
        return redirect('');
    }
    public function edit($id){
        $siswa = DB::table('datasiswa')->where('id',$id)->first();
        return view('edit',compact('siswa'));
    }
    public function update(Request $request,$id){          
                $data=[
                    'nama_siswa'=> $request->nama_siswa,
                    'kelas'=> $request->kelas,
                    'jurusan'=> $request->jurusan,
                    'NIS'=>  $request->nis
                ];

            
        DB::table('datasiswa')->where('id',$id)->update($data);
        return redirect('');
    }







    public function delete($id){
        DB::table('datasiswa')->where('id',$id)->delete();
        return redirect('');
    }
}
