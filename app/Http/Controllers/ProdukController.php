<?php

namespace App\Http\Controllers;

use App\Models\Catatan;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create(Request $request)
    {           
        $title = $request->input('title'); 
        $konten = $request->input('konten'); 

        $catatan = Catatan::create([
            'title' => $title,
            'konten' => $konten,
        ]);
        return $this->responseHasil(200,true, $catatan);
    }

    public function list()
    {
        $catatan = Catatan::all();
        return $this->responseHasil(200, true,$catatan);
    }

    public function show($id)
    {
        $catatan = Catatan::findOrFail($id);
        return $this->responseHasil(200, true, $catatan);
    }

    public function update(Request $request, $id)
    {
        $title = $request->input('title'); 
        $konten = $request->input('konten');

        $catatan = Catatan::findOrFail($id); 
        $result = 
        $catatan->update([
            'title' => $title,
            'konten' => $konten,
        ]);
        return $this->responseHasil(200,  true, $result);   
    }

    public function delete($id)
    {
        $catatan = Catatan::findOrFail($id);
        $delete = $catatan->delete();
        return $this->responseHasil(200, true, $delete);
    }
}
