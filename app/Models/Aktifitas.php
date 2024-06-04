<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aktifitas extends Model
{
    use SoftDeletes;

    public $table = 'aktifitas';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
        'deskripsi',
        'kalori',
        'gambar',
        'updated_at',
        'created_at',
        'deleted_at',

    ];

    public function gerakan()
    {
        return $this->hasMany('App\Models\GerakanM', 'aktifitas_id');
    }
    // public function gerakanAktifitas()
    // {
    //     return $this->hasMany('App\Models\Gerakan_Aktifitas', 'aktifitas_id');
    // }
}
