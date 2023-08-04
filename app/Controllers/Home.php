<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' =>  base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' =>'active',
            ],
            'petugas' => [
                'title' => 'Petugas',
                'link' =>  base_url().'/Petugas',
                'icon' => 'fa-solid fa-address-book',
                'aktif' =>'',
            ],
            'Anggota' => [
                'title' => 'Anggota',
                'link' =>  base_url().'/Anggota',
                'icon' => 'fa-solid fa-users-line',
                'aktif' =>'',
            ],
            'Peminjam' => [
                'title' => 'Peminjam',
                'link' =>  base_url().'/Peminjam',
                'icon' => 'fa-solid fa-users',
                'aktif' =>'',
            ],
            'Buku' => [
                'title' => 'Buku',
                'link' =>  base_url(). '/Buku',
                'icon' => 'fa-solid fa-book',  
                'aktif' =>'',  
            ],
        ];

            $breadcrumb = '<div class="col-sm-6">
                                <h1 class="m-0">Beranda</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Beranda</a></li>
                                </ol>
                            </div>';
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "welcome to my site";
        $data ['selamat_datang'] = "Selamat datang di aplikasi sederhana";
        return view('template/content', $data);
        
    }
}
