<?php

namespace App\Providers;

use App\Models\Informasi;
use App\Models\Jadwal;
use App\Models\Keuangan;
use App\Models\Penguruses;
use App\Models\Warta;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('Home.Layout', function ($view) {
            $info = Informasi::first();
            $jadwals = Jadwal::with('pembawafirman','keyboardjemaat','lcdjemaat')->where('status','pending')->get();
            $riwayat = Jadwal::with('pembawafirman','keyboardjemaat','lcdjemaat')->where('status','selesai')->get();

            
            $pengurus = Penguruses::with('jemaat')->get();
            $warta = Warta::all();
            $view->with(compact('info','jadwals','warta','riwayat','pengurus')); 
        });


        View::composer('Component.LayoutAdmin', function ($view) {
            
            $info = Informasi::first(); 
            $view->with(compact('info')); 
        });
    }
}