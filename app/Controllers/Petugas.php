<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetugasModel;
use CodeIgniter\Controller;
class Petugas extends BaseController
{
    protected $pm;
    private $menu;
    private $rules;
    public function __construct()
    {
        $this->pm = new PetugasModel();

        $this->menu =[
            'beranda' => [
                'title' => 'Beranda',
                'link' =>  base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' =>'',
            ],
            'petugas' => [
                'title' => 'Petugas',
                'link' =>  base_url().'/Petugas',
                'icon' => 'fa-solid fa-address-book',
                'aktif' =>'active',
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
                'link' =>  base_url().'/Buku',
                'icon' => 'fa-solid fa-book',  
                'aktif' =>'',  
            ],
        ];

        $this->rules = [
            'kdpetugas' => [
                'rules'=>'required',
                'errors' => [
                    'required' => 'Kode Petugas tidak boleh kosong',
                ]
            ],
            'nama_petugas' => [
                'rules'=>'required',
                'errors' => [
                    'required' => 'Nama Petugas tidak boleh kosong',
                ]
                ],
            'jabatan' => [
                'rules'=>'required',
                'errors' =>[
                    'required' => 'Jabatan tidak boleh kosong',
                ]
            ],
            'password' => [
                'rules'=>'required',
                'errors' =>[
                    'required' => 'Password tidak boleh kosong',
                ]
            ],
        ];
    }

    public function index()
    {
        
            $breadcrumb = '<div class="col-sm-6">
                                <h1 class="m-0">Petugas</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="'. Base_url().'">Beranda</a></li>
                                <li class="breadcrumb-item active">Petugas</a></li>
                                </ol>
                            </div>';
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data Petugas";

        $query = $this->pm->find();
        $data['data_petugas'] = $query;  
        return view('Petugas/content', $data);
    }

    public function tambah()
     {
        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">petugas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="'. Base_url().'">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="'. Base_url().'">petugas</a></li>
                            <li class="breadcrumb-item active">Tambah Petugas</a></li>
                            </ol>
                        </div>';
        $data['menu'] = $this->menu; 
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] ='Tambah Petugas'; 
        $data['action'] = base_url().'/Petugas/simpan';
        return view('Petugas/input', $data);
    }
    public function simpan()
    {
        
        if (strtolower($this->request->getMethod()) !== 'post') {
            
            return redirect()->back()->withInput();
        }

        if(!$this->validate($this->rules)) {

            return redirect()->back()->withInput();
        }


        $dt = $this->request->getPost();
        try {
            $simpan = $this->pm->insert($dt);

            return redirect()->to('petugas')->with('succes','Data berhasil disimpan');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {

           session()->setFlashdata('error',$e->getMessage());
            return redirect()->back()->withInput(); 
        }
    } 

    public function hapus($id)
    {
        if(empty($id)){
            return redirect()->back()->with('error','Hapus data gagal dilakukan');
        }

        try {
            $this->pm->delete($id);
            return redirect()->to('Petugas')->with('success', 'Data petugas dengan kode' .$id.'berhasil dihapus');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            return redirect()->to('Petugas')->with('error',$e->getMessage());
        }
    }

    public function edit($id)
    {
        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">petugas</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="'. Base_url().'">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="'. Base_url().'/petugas">petugas</a></li>
                            <li class="breadcrumb-item active">Edit Petugas</a></li>
                            </ol>
                        </div>';
$data['menu'] = $this->menu; 
$data['breadcrumb'] = $breadcrumb;
$data['title_card'] ='Edit Petugas'; 
$data['action'] = base_url().'/Petugas/update';

$data['edit_data'] = $this->pm->find($id);
 

return view('Petugas/input', $data);
    }
    public function update(){
        $dtEdit = $this->request->getpost();
        $param = $dtEdit['param'];
        unset($dtEdit['param']);
        unset($this->rules['password']);

        if(!$this->validate($this->rules)) {

            return redirect()->back()->withInput();
        }

        if(empty($dtEdit['password'])){
            unset($dtEdit['password']);
        }

        try {
           $this->pm->update($param, $dtEdit);
           return redirect()->to('petugas')->with('succes', 'Data berhasil diupdate');
        } catch (\CodeIgniter\Database\Exceptions\DatabaseException $e) {
            session()->setFlashdara('error',$e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}