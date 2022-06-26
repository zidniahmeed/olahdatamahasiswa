<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data =  Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
       }
       public function createmahasiswa(){
        return view('mahasiswa.create');
       }

       public function insertdatamahasiswa(Request $request){
            $data = Mahasiswa::create($request->all());
            if($request->hasFile('foto')){
                $namafoto = $request->file('foto')->getClientOriginalName();
                $request->file('foto')->move('fotomahasiswa/',$namafoto);
                $data->foto = $namafoto;
                $data->save();
            }
            return redirect()->route('mahasiswa');
       }
       
       public function tampildatamahasiswa($id){
            $data = Mahasiswa::find($id);
            return view('mahasiswa.edit', compact('data'));
       }

       public function detailmahasiswa($id){
        $data = Mahasiswa::find($id);
        return view('mahasiswa.detail', compact('data'));
   }

       
    
       public function updatedatamahasiswa(Request $request, $id){
              $data = Mahasiswa::find($id);
              $data->update($request->all());

            //   return $data;
              return redirect()->route('mahasiswa');
       }
       public function deletedatamahasiswa($id){
              $data = Mahasiswa::find($id);
              $data->delete();
              return redirect()->route('mahasiswa');
       }
}
