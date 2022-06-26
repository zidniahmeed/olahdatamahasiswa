<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FakultasController extends Controller
{
   public function index(){
    $data =  Fakultas::all();
    return view('fakultas.index', compact('data'));
   }
   public function createfakultas(){
    return view('fakultas.create');
   }
   public function insertdatafakultas(Request $request){
        Fakultas::create($request->all());
        return redirect()->route('fakultas')->with('success','data berhasil ditambahkan');;
   }
   
   public function tampildatafakultas($id){
        $data = Fakultas::find($id);
        return view('fakultas.edit', compact('data'));
   }

   public function updatedatafakultas(Request $request, $id){
          $data = Fakultas::find($id);
          $data->update($request->all());
          return redirect()->route('fakultas');
   }
   public function deletedatafakultas($id){
          $data = Fakultas::find($id);
          $data->delete();
          return redirect()->route('fakultas');
   }
}
