<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GerakanM extends Model
{
    use SoftDeletes;

    public $table = 'gerakan';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'aktifitas_id',
        'nama',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // one to many
    public function aktifitas()
    {
        return $this->belongsTo('App/Models/Aktifitas', 'aktifitas_id', 'id');
    }
}
