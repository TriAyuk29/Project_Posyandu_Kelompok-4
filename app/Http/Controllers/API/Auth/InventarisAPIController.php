<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisAPIController extends Controller
{
    //
    public function InventarisView(Request $request)
    {
        $Inventaris = Inventaris::all();
        return response()->json($Inventaris, 200);
    }

    public function InventarisAdd(Request $request)
    {
        $validateData  = $request->validate([
            'nama_desa'           => 'required',
            'fasilitas'         => 'required',
            'alat'                 => 'required',
        ]);

        $Inventaris = new Inventaris([
            'nama_desa'           => $request->nama_desa,
            'fasilitas'         => $request->fasilitas,
            'alat'  => $request->alat,
        ]);

        $Inventaris->save();

        return response()->json($Inventaris, 201);
    }
    public function InventarisUpdate(Request $request, $id)
    {
        $Inventaris = Inventaris::find($id);
        $Inventaris->nama_desa         = $request->input('nama_desa');
        $Inventaris->fasilitas       = $request->input('fasilitas');
        $Inventaris->alat = $request->input('alat');

        $Inventaris->save();

        return response()->json($Inventaris, 201);
    }
    public function InventarisDelete(Request $request, $id)
    {
        $Inventaris = Inventaris::find($id);
        $Inventaris->delete();

        return response()->json($Inventaris, 201);
    }
}
