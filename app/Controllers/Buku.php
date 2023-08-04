<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class Buku extends BaseController
{
    protected $pm;
    public function __construct()
    {
        $this->pm = new BukuModel();
    }
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' =>  base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' =>'',
            ],
            'petugas' => [
                'title' => 'Petugas',
                'link' =>  base_url().'/Petugas',
                'icon' => 'fa-solid fa-person-military-pointing',
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
                'aktif' =>'active',   
            ],
        ];
            $breadcrumb = '<div class="col-sm-6">
                                <h1 class="m-0">Buku</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="'. Base_url().'">Beranda</a></li>
                                <li class="breadcrumb-item active">Buku</a></li>
                                </ol>
                            </div>';
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data Buku";

        $query = $this->pm->find();
        $data['data_buku'] = $query;
        return view('Buku/content', $data);
    }
}
