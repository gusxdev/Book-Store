<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public $kategori;
    // Membuat objek baru dari kelas Mahasiswa
    public function __construct()
    {
       $this->kategori = new Kategori;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        //fungsi untuk menyimpan data baru customer
        $rules = [
            'kategori'   => 'required',
        ];
 
        $messages = [
            'required'      => ":attribute gak boleh kosong",
        ];
 
        $this->validate($request, $rules, $messages);
 
        $this->kategori->kategori = $request->kategori;
 
        // simpan data menggunakan method save()
        $this->kategori->save();
 
        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('admin');
    }

    public function show(kategori $kategori)
    {
        //
    }

    public function edit($id)
    {
        $edit = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Kategori::findOrFail($id);

        if ($update->kategori == $request->kategori) {
            return redirect()->route('admin');
        } else{
            $rules = [
                'kategori'   => 'required',
            ];
            $messages = [
                'required'      => ":attribute gak boleh kosong",
            ];
     
            $this->validate($request, $rules, $messages);
     
            $this->kategori->kategori = $request->kategori;
        }
        // simpan data menggunakan method save()
        $update->kategori = $request->kategori;
        $update->save();
 
        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('admin');
    }

    public function delete($id)
    {
        $destroy = Kategori::findOrFail($id);
        $destroy->delete();
        return redirect()->route('admin');
    }
}
