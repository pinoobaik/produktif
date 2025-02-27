<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagementUserController extends Controller
{
    public function index()
    {
        $nama = "Veno Renanda";
        $matkul = ["WSIWF", "Kalkulus", "WSIMF"];

        return view('home', ['nama' => $nama, 'mata_kuliah' => $matkul]);
    }


    public function create()
    {
        return "Ini adalah method create dalam ManagementUserController nantinya untuk  menambah data user";
    }

    public function store()
    {
        return "Ini adalah method store dalam ManagementUserController nantinya untuk menciptakan data user yang baru";
    }

    public function show($id)
    {
        return "Ini adalah method show dalam ManagementUserController nantinya untuk mengambil satu data user dengan id=" .$id;
    }

    public function edit($id)
    {
        return "Ini adalah method edit dalam ManagementUserController nantinya untuk menampilkan form untuk mengubah data edit dengan id=" .$id;
    }

    public function update(Request $request, $id)
    {
        return "Ini adalah method update dalam ManagementUserController nantinya untuk mengubah data user dengan id=" .$id;
    }

    public function destroy($id)
    {
        return "Ini adalah method destroy dalam ManagementUserController nantinya untuk menghapus data user dengan id=" .$id;
    }
}
