<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'anggota';
    protected $primaryKey       = 'kdanggota';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kdanggota', 'nama_anggota', 'foto_anggota', 'alamat','status'];
}
