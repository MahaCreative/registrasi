<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // protected $fillable = ['user_id', 'nip', 'nim', 'nama_lengkap', 'alamat', 'tempat_lahir', 'ttl', 'telp', 'avatar', 'fakultas_id', 'prodi_id'];
    protected $guarded = [];
}