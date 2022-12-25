<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPeserta;
use Illuminate\Support\Facades\File;


class DataPesertaController extends Controller
{
    
    public function DataPesertaView(){
        $data=DataPeserta::all();
        return view('backend.dataPeserta.view_datapeserta', compact('data'));
    }
    public function DataPesertaAdd(){
        return view('backend.datapeserta.add_datapeserta');
    
    }
    public function DataPesertaStore(Request $request){
        
        $data=new DataPeserta();
        $data->nama_peserta=$request->nama_peserta;
        $data->alamat=$request->alamat;
        $data->berat_badan=$request->berat_badan;
        $data->tinggi_badan=$request->tinggi_badan;
        $data->usia=$request->usia;
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/datapeserta/', $filename);
            $data->profile_image = $filename;
            $data->save();
        }

        return redirect()->route('datapeserta.view')->with('info','Tambah Data Berhasil');
    }

    public function DataPesertaEdit($id){
        $editData= DataPeserta::find($id);
        return view('backend.DataPeserta.edit_datapeserta', compact('editData'));

    }


    public function DataPesertaUpdate(Request $request, $id){
        
        $data=DataPeserta::find($id);
        $data->nama_peserta=$request->nama_peserta;
        $data->alamat=$request->alamat;
        $data->berat_badan=$request->berat_badan;
        $data->tinggi_badan=$request->tinggi_badan;
        $data->usia=$request->usia;
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/datapeserta/', $filename);
            $data->profile_image = $filename;
            $data->save();
        }
        $data->save();

        return redirect()->route('datapeserta.view')->with('info','Update Data berhasil');
    }
    public function DataPesertaDelete($id){
        $deleteData= DataPeserta::find($id);
        $destination = 'uploads/datapeserta/'.$deleteData->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $deleteData->delete();


        return redirect()->route('datapeserta.view')->with('info','Delete Data berhasil');
    }



}
