<?php

namespace App\Models;

use CodeIgniter\Model;

class JurnalModel extends Model
{
    protected $table      = 'jurnal';
    protected $primaryKey = 'id';

    // colom apa saya yang bisa diisi
    protected $allowedFields = ['judul_jurnal', 'penulis', 'tahun_terbit', 'link_referensi', 'status_baca'];
}
