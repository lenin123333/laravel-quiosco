<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    public function index(){
        //return response()->json(['categoria'=>Categoria::all()]);
        return new CategoriaCollection(Categoria::all());
    }
}
