<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //
    public function Percobaan()
    {
    	$a = Siswa::all();
    	return view('latihan.siswa',compact('a'));
    }
}
