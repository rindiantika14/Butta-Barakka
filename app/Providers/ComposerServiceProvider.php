<?php

namespace App\Providers;

use App\Models\Pengaturan;
use App\Models\TipeRumah;
use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        $pengaturan = Pengaturan::find(1);
        $tipe_rumah = TipeRumah::all();
        View::composer('*', function ($view) use ($pengaturan, $tipe_rumah) {
            $view->with('nama_cv', $pengaturan->nama_cv);
            $view->with('nama_perumahan', $pengaturan->nama_perumahan);
            $view->with('no_telp_cv', $pengaturan->no_telp_cv);
            $view->with('tipe_rumah', $tipe_rumah);
        });
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
