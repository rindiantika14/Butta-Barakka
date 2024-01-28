<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Blok;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $blok = Blok::all();
        $visitorCount = Visitor::count();
        $pemesanan = Berkas::where('approve', NULL)->count();
        $penjualan = Berkas::where('approve', 1)->count();
        return view('dashboard', compact('visitorCount', 'pemesanan', 'penjualan', 'blok'));
    }
}
