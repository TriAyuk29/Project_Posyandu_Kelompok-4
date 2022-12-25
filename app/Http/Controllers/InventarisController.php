<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;

class InventarisController extends Controller
{
    public function InventarisView(){
        $data=Inventaris::all();
        return view('backend.Inventaris.view_inventaris', compact('data'));
    }
    public function InventarisAdd(){
        return view('backend.Inventaris.add_inventaris');
    
    }
    public function InventarisStore(Request $request){
        
        $data=new Inventaris();
        $data->nama_desa=$request->nama_desa;
        $data->fasilitas=$request->fasilitas;
        $data->alat=$request->alat;
        $data->save();

        return redirect()->route('inventaris.view')->with('info','Tambah Data Berhasil');
    }

    public function InventarisEdit($id){
        $editData= Inventaris::find($id);
        return view('backend.Inventaris.edit_inventaris', compact('editData'));
    }


    public function InventarisUpdate(Request $request, $id){
        $data=Inventaris::find($id);
        $data->nama_desa=$request->nama_desa;
        $data->fasilitas=$request->fasilitas;
        $data->alat=$request->alat;
        $data->save();

        return redirect()->route('inventaris.view')->with('info','Update Data berhasil');
    }
    public function InventarisDelete($id){
        $deleteData= Inventaris::find($id);
        $deleteData->delete();


        return redirect()->route('inventaris.view')->with('info','Delete Data berhasil');
    }


}
