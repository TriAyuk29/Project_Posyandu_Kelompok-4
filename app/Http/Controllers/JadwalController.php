<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function JadwalView(){
        $data=Jadwal::all();
        return view('backend.Jadwal.view_jadwal', compact('data'));
    }
    public function JadwalAdd(){
        return view('backend.Jadwal.add_jadwal');
    
    }
    public function JadwalStore(Request $request){
        
        $data=new Jadwal();
        $data->nama_posyandu=$request->nama_posyandu;
        $data->jadwal=$request->jadwal;
        $data->lokasi=$request->lokasi;
        $data->kader_pendamping=$request->kader_pendamping;
        $data->save();

        return redirect()->route('jadwal.view')->with('info','Tambah Data Berhasil');
    }

    public function JadwalEdit($id){
        $editData= Jadwal::find($id);
        return view('backend.Jadwal.edit_jadwal', compact('editData'));
    }


    public function JadwalUpdate(Request $request, $id){
        $data=Jadwal::find($id);
        $data->nama_posyandu=$request->nama_posyandu;
        $data->jadwal=$request->jadwal;
        $data->lokasi=$request->lokasi;
        $data->kader_pendamping=$request->kader_pendamping;
        $data->save();

        return redirect()->route('jadwal.view')->with('info','Update Data berhasil');
    }
    public function JadwalDelete($id){
        $deleteData= Jadwal::find($id);
        $deleteData->delete();


        return redirect()->route('jadwal.view')->with('info','Delete Data berhasil');
    }


}
