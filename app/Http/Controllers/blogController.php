<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
class blogController extends Controller
{
    public function index()
    {
        return view('oke',[
            "tittle" => "Oke",
            "oke" => blog::all()
        ]);
    }

    public function show(blog $Blog)
    {
        return view('ok', [
            "tittle" => "single-post",
            "okee" => $Blog 
        ]);
    }
}
