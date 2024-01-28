<?php

namespace App\Http\Controllers;

use App\Models\Blok;
use App\Models\DenahTipeRumah;
use App\Models\TipeRumah;
use App\Models\Visitor;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $tipe = TipeRumah::all();
        $blok = [];
        foreach ($tipe as $value) {
            $blok[$value->id] = Blok::where('tipe_rumah_id', $value->id)->get();
        }
        $totalTipe = TipeRumah::count();
        $totalBlok = Blok::count();
        $totalVisitor = Visitor::count();
        return view('welcome', compact(
            'tipe',
            'blok',
            'totalTipe',
            'totalBlok',
            'totalVisitor'
        ));
    }

    public function show(TipeRumah $tipe)
    {
        $blok = Blok::where('tipe_rumah_id', $tipe->id)->get();
        return view('list_blok', compact('tipe', 'blok'));
    }

    public function showBlok(Blok $blok)
    {
        $denah = DenahTipeRumah::where('blok_id', $blok->id)->get();
        return view('detail', compact('blok', 'denah'));
    }
}
