<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'peminjam';
    protected $primaryKey       = 'namapeminjam';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['namapeminjam', 'alamat_peminjam', 'jenis_buku', 'tgl_pinjam','tgl_kembali'];
}
