<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman='';
        if(Request::segment(1)=='karyawan'){
            $halaman='karyawan';
        }
        if(Request::segment(1)=='about'){
            $halaman='about';
        }
        if(Request::segment(1)=='home'){
            $halaman='home';
        }
        view()->share('halaman',$halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
