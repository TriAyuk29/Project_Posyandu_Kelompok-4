<?php

namespace App\Http\Controllers;

use App\Models\DataPeserta;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        
        return view('admin.dashboard');
    }

    public function jadwal(Request $request){
        // dd($request->nama);
        $dataPeserta = DataPeserta::where('nama_peserta', $request->nama)->get();
        return view('backend.Dashboard.dashboard', compact('dataPeserta'));    
    }
   
}

