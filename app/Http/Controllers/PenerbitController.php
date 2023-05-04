<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public $penerbit;
    // Membuat objek baru dari kelas Mahasiswa
    public function __construct()
    {
       $this->penerbit = new Penerbit;
    }
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.penerbit.create');
    }

    public function store(Request $request)
    {
         //fungsi untuk menyimpan data baru customer
         $rules = [
            'id_penerbit'   => 'required',
            'nama_penerbit'   => 'required',
            'telepon'   => 'required',
            'kota'   => 'required',
            'alamat'   => 'required',
        ];
 
        $messages = [
            'required'      => ":attribute gak boleh kosong",
        ];
 
        $this->validate($request, $rules, $messages);
 
        $this->penerbit->id_penerbit = $request->id_penerbit;
        $this->penerbit->nama_penerbit = $request->nama_penerbit;
        $this->penerbit->telepon = $request->telepon;
        $this->penerbit->kota = $request->kota;
        $this->penerbit->alamat = $request->alamat;
 
        // simpan data menggunakan method save()
        $this->penerbit->save();
 
        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('admin');
    }

    public function show(penerbit $penerbit)
    {
        //
    }

    public function edit($id)
    {
        $edit = Penerbit::findOrFail($id);
        return view('admin.penerbit.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $update = Penerbit::findOrFail($id);

        if ($update->id_penerbit == $request->id_penerbit && $update->nama_penerbit == $request->nama_penerbit
        && $update->telepon == $request->telepon && $update->kota == $request->kota && $update->alamat == $request->alamat) {
            return redirect()->route('admin');
        } else{
            $rules = [
                'id_penerbit'   => 'required',
                'nama_penerbit'   => 'required',
                'telepon'   => 'required',
                'kota'   => 'required',
                'alamat'   => 'required',
            ];
            $messages = [
                'required'      => ":attribute gak boleh kosong",
            ];
     
            $this->validate($request, $rules, $messages);
     
            $this->penerbit->id_penerbit = $request->id_penerbit;
            $this->penerbit->nama_penerbit = $request->nama_penerbit;
            $this->penerbit->telepon = $request->telepon;
            $this->penerbit->kota = $request->kota;
            $this->penerbit->alamat = $request->alamat;
        }
        // simpan data menggunakan method save()
        $update->id_penerbit = $request->id_penerbit;
        $update->nama_penerbit = $request->nama_penerbit;
        $update->telepon = $request->telepon;
        $update->kota = $request->kota;
        $update->alamat = $request->alamat;
        $update->save();
 
        // redirect halaman serta kirimkan pesan berhasil
        return redirect()->route('admin');
    }

    public function delete($id)
    {
        $destroy = Penerbit::findOrFail($id);
        $destroy->delete();
        return redirect()->route('admin');
    }
}
