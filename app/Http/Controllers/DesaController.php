<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Desa;

class DesaController extends Controller
{
    public function index()
    {
        return Desa::all(); 
    }

    public function show($id)
    {
        return Desa::find($id); 
    }

    public function store(Request $request)
    {
        return Desa::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $desa = Desa::find($id);
        $desa->update($request->all()); 
        return $desa;
    }

    public function destroy($id)
    {
        $desa = Desa::find($id);
        $desa->delete();
        return response()->json(['message' => 'Desa berhasil dihapus']);
    }
}