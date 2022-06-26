<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JurusanController extends Controller
{
    public function index(){
        $data =  Jurusan::all();
        return view('jurusan.index', compact('data'));
       }
       public function createjurusan(){
        return view('jurusan.create');
       }
       public function insertdatajurusan(Request $request){
            Jurusan::create($request->all());
            return redirect()->route('jurusan');
       }
       
       public function tampildatajurusan($id){
            $data = Jurusan::find($id);
            return view('jurusan.edit', compact('data'));
       }
    
       public function updatedatajurusan(Request $request, $id){
              $data = Jurusan::find($id);
              $data->update($request->all());
              return redirect()->route('jurusan');
       }
       public function deletedatajurusan($id){
              $data = Jurusan::find($id);
              $data->delete();
              return redirect()->route('jurusan');
       }
}
