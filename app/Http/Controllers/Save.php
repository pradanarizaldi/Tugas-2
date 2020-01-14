<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Save extends Controller
{
    public function index(Request $request)
    {
        // $nama = $request->input('nama');
        // $tempat = $request->input('tmpLahir');
        // $tgl = $request->input('tglLahir');
        // $jk = $request->input('jk');
        // $email = $request->input('email');
        // $alamat = $request->input('alamat');
        //============================================== sama seperti yang diatas
        $data['data'] = $request->all();
        $data['berhasil'] = "Data Berhasil di Save";
        // var_dump($data);
        // die;
        // $data['data'] = ([
        //     'nama' => $nama, 
        //     'tempat' => $tempat, 
        //     'tgl' => $tgl, 
        //     'jk' => $jk, 
        //     'email' => $email,
        //     'alamat' => $alamat,
        // ]);
        return view('page.output', $data);
    }

    public function home()
    {
        return view('page/index');
    }
}
