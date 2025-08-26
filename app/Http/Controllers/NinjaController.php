<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
     public function create()
    {
        $dojos = Dojo::all();

      return view('ninjas.create', ['dojos' => $dojos]);
    }
    public function index ()
    {
        $ninjas = Ninja::with('dojo')->orderBy('created_at','desc') -> paginate(10);
         return view('ninjas.index',["ninjas" => $ninjas]);
    }
     public function show($id)
    {
        $ninja = Ninja::with('dojo')->findOrFail($id);
         return view('ninjas.show',["ninja" => $ninja]);
    }
     public function store()
    {
        //
    }
}
