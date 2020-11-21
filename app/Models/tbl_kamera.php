<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_kamera extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kamera',
        'channel_kamera',
        'tanggal_buat',
        'tanggal_update',
        'id_user'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'tanggal_buat' => 'datetime',
        'tanggal_update' => 'datetime'
    ];

    /**
     * Search query in multiple whereOr
     */
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('no_kamera', 'like', '%'.$query.'%')
                ->orWhere('nama_kamera', 'like', '%'.$query.'%');
    }
}
