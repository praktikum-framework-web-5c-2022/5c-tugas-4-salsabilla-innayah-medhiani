<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matkul = Matakuliah::all();
        return view('matakuliah',compact('matkul'));
    }
}