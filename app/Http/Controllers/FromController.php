<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formulir() {
        return view('inputan');
    }
 
    public function hasil(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:8|max:50',
           'nrp' => 'required|numeric',
           'jeniskelamin' => 'required|max:1',
           'departemen' => 'required',
           'angkatan' => 'required|numeric',
           'ipk' => 'required|numeric',
           'ips' => 'required|numeric',
        ]);
    }
}