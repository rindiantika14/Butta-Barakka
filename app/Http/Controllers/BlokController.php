<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlokRequest;
use App\Http\Requests\StoreDenahTipeRumahRequest;
use App\Models\Berkas;
use App\Models\Blok;
use App\Models\DenahTipeRumah;
use App\Models\TipeRumah;
use Illuminate\Http\Request;

class BlokController extends Controller
{
    public function index()
    {
        $data = Blok::all();
        return view('admin.blok.index', compact('data'));
    }

    public function create()
    {
        $tipe = TipeRumah::all();
        return view('admin.blok.create', compact('tipe'));
    }

    public function store(StoreBlokRequest $request)
    {
        try {
            $data = $request->validated();
            $path = NULL;
            if ($request->hasFile('denah')) {
                $upload_path = 'public/denah';
                $filename = time() . '_' . $request->file('denah')->getClientOriginalName();
                $path = $request->file('denah')->storeAs(
                    $upload_path,
                    $filename
                );
            }
            $data['denah'] = $path;
            Blok::create($data);
        } catch (\Exception $e) {
            return redirect(route('blok.index'))->with('error', 'Gagal Tambah Data');
        }
        return redirect(route('blok.index'))->with('success', 'Berhasil tambah data');
    }

    public function edit(Blok $blok)
    {
        $tipe = TipeRumah::all();
        return view('admin.blok.edit', compact('blok', 'tipe'));
    }

    public function update(Request $request, Blok $blok)
    {
        $data = $request->all();
        $path = NULL;
        if ($request->hasFile('denah')) {
            $upload_path = 'public/denah';
            $filename = time() . '_' . $request->file('denah')->getClientOriginalName();
            $path = $request->file('denah')->storeAs(
                $upload_path,
                $filename
            );
            $data['denah'] = $path;
        }
        $blok->update($data);
        return redirect(route('blok.index'))->with('success', 'Berhasil Update Data');
    }

    public function destroy(Blok $blok)
    {
        $blok->delete();
        return redirect(route('blok.index'))->with('success', 'Berhasil Hapus Data');
    }

    public function denah(Blok $blok)
    {
        $data = DenahTipeRumah::where('blok_id', $blok->id)->get();
        return view('admin.blok.denah', compact('data', 'blok'));
    }

    public function createDenah(Blok $blok)
    {
        return view('admin.blok.create_denah', compact('blok'));
    }

    public function storeDenah(StoreDenahTipeRumahRequest $request, Blok $blok)
    {
        try {
            $data = $request->validated();
            $path = NULL;
            if ($request->hasFile('file_denah')) {
                $upload_path = 'public/denah';
                $filename = time() . '_' . $request->file('file_denah')->getClientOriginalName();
                $path = $request->file('file_denah')->storeAs(
                    $upload_path,
                    $filename
                );
            }
            $data['blok_id'] = $blok->id;
            $data['file_denah'] = $path;
            DenahTipeRumah::create($data);
        } catch (\Exception $e) {
            return redirect(route('blok.denah', $blok->id))->with('error', 'Gagal tambah denah');
        }
        return redirect(route('blok.denah', $blok->id))->with('success', 'Berhasil tambah denah');
    }

    public function destroyDenah(DenahTipeRumah $denahBlok, Blok $blok)
    {
        $denahBlok->delete();
        return redirect(route('blok.denah', $blok->id))->with('success', 'Berhasil Hapus Data');
    }

    public function verifikasi()
    {
        $data = Berkas::where('approve', NULL)->get();
        return view('berkas.verifikasi', compact('data'));
    }

    public function approve(Berkas $berkas)
    {
        $berkas->approve = 1;
        $berkas->save();
        return redirect(route('berkas.verifikasi'))->with('success', 'Berhasil approve berkas');
    }

    public function customer(TipeRumah $tipeRumah)
    {
        $data = Berkas::where('approve', 1)->join('blok', 'berkas.blok_id', 'blok.id')
            ->join('tipe_rumah', 'blok.tipe_rumah_id', 'tipe_rumah.id')->where('blok.tipe_rumah_id', $tipeRumah->id)->get();
        return view('berkas.customer', compact('data'));
    }
}
