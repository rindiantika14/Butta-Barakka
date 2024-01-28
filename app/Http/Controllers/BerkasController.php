<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBerkasRequest;
use App\Models\Berkas;
use App\Models\Pengaturan;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $data = Berkas::where('user_id', auth()->user()->id)->get();
        return view('berkas.index', compact('data'));
    }

    public function store(StoreBerkasRequest $request)
    {
        try {
            $data = $request->validated();
            $data['user_id'] = auth()->user()->id;
            $path = NULL;
            if ($request->hasFile('ktp')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_ktp_' . $request->file('ktp')->getClientOriginalName();
                $path = $request->file('ktp')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['ktp'] = $path;
            }
            if ($request->hasFile('npwp')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_npwp_' . $request->file('npwp')->getClientOriginalName();
                $path = $request->file('npwp')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['npwp'] = $path;
            }
            if ($request->hasFile('kk')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_kk_' . $request->file('kk')->getClientOriginalName();
                $path = $request->file('kk')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['kk'] = $path;
            }
            if ($request->hasFile('surat_keterangan_kerja')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_surat_keterangan_kerja_' . $request->file('surat_keterangan_kerja')->getClientOriginalName();
                $path = $request->file('surat_keterangan_kerja')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['surat_keterangan_kerja'] = $path;
            }
            if ($request->hasFile('slip_gaji')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_slip_gaji_' . $request->file('slip_gaji')->getClientOriginalName();
                $path = $request->file('slip_gaji')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['slip_gaji'] = $path;
            }
            if ($request->hasFile('buku_rekening_koran')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_buku_rekening_koran_' . $request->file('buku_rekening_koran')->getClientOriginalName();
                $path = $request->file('buku_rekening_koran')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['buku_rekening_koran'] = $path;
            }
            if ($request->hasFile('surat_keterangan_menikah')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_surat_keterangan_menikah_' . $request->file('surat_keterangan_menikah')->getClientOriginalName();
                $path = $request->file('surat_keterangan_menikah')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['surat_keterangan_menikah'] = $path;
            }
            if ($request->hasFile('foto_3x4')) {
                $upload_path = 'public/berkas';
                $filename = time() . '_foto_3x4_' . $request->file('foto_3x4')->getClientOriginalName();
                $path = $request->file('foto_3x4')->storeAs(
                    $upload_path,
                    $filename
                );
                $data['foto_3x4'] = $path;
            }

            Berkas::create($data);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan.');
        }
        $pengaturan = Pengaturan::find(1);
        return redirect()->back()->with('success', 'Data telah tersimpan silahkan hubungi nomor ' . $pengaturan->no_telp_cv);
    }
}
