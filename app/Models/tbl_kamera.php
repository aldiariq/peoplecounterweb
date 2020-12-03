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
        'created_at',
        'updated_at',
        'id_user',
        // 'status_reverse',
        'lantai',
        'jumlah_maksimum',
        'presentasi',
        'x1',
        'y1',
        'x2',
        'y2',
        'x3',
        'y3',
        'x4',
        'y4'
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
            : static::where('nama_kamera', 'like', '%'.$query.'%')
                ->orWhere('channel_kamera', 'like', '%'.$query.'%');
    }
}
