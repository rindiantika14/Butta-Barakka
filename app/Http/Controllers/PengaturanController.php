<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    public function edit(Pengaturan $pengaturan)
    {
        return view('admin.pengaturan.edit', compact('pengaturan'));
    }

    public function update(Request $request, Pengaturan $pengaturan)
    {
        $pengaturan->update($request->all());
        return redirect(route('pengaturan.edit', $pengaturan->id))->with('success', 'Berhasil Update Data');
    }
}
