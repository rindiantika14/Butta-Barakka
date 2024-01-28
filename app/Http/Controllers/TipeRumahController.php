<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTipeRumahRequest;
use App\Models\TipeRumah;
use Illuminate\Http\Request;

class TipeRumahController extends Controller
{
    public function index()
    {
        $data = TipeRumah::all();
        return view('admin.tipe_rumah.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tipe_rumah.create');
    }

    public function store(StoreTipeRumahRequest $request)
    {
        try {
            $data = $request->validated();
            $path = NULL;
            if ($request->hasFile('gambar')) {
                $upload_path = 'public/gambar';
                $filename = time() . '_' . $request->file('gambar')->getClientOriginalName();
                $path = $request->file('gambar')->storeAs(
                    $upload_path,
                    $filename
                );
            }
            $data['gambar'] = $path;
            TipeRumah::create($data);
        } catch (\Exception $e) {
            return redirect(route('tipe-rumah.index'))->with('error', 'Gagal Tambah Data');
        }
        return redirect(route('tipe-rumah.index'))->with('success', 'Berhasil tambah data');
    }

    public function edit(TipeRumah $tipeRumah)
    {
        return view('admin.tipe_rumah.edit', compact('tipeRumah'));
    }

    public function update(Request $request, TipeRumah $tipeRumah)
    {
        $data = $request->all();
        $path = NULL;
        if ($request->hasFile('gambar')) {
            $upload_path = 'public/gambar';
            $filename = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs(
                $upload_path,
                $filename
            );
            $data['gambar'] = $path;
        }
        $tipeRumah->update($data);
        return redirect(route('tipe-rumah.index'))->with('success', 'Berhasil Update Data');
    }

    public function destroy(TipeRumah $tipeRumah)
    {
        $tipeRumah->delete();
        return redirect(route('tipe-rumah.index'))->with('success', 'Berhasil Hapus Data');
    }
}
