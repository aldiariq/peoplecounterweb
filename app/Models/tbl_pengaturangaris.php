<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_pengaturangaris extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kamera',
        'x1g1',
        'y1g1',
        'x2g1',
        'y2g1',
        'x1g2',
        'y1g2',
        'x2g2',
        'y2g2',
        'created_at',
        'updated_at',
        'id_user'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Search query in multiple whereOr
     */
    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('no_kamera', 'like', '%'.$query.'%');
    }
}
