<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achivement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'name',
        'title',
        'description',
        'image',
        'age',
        'quantity',
        'isMale',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'categoria_logro_id'
    ];

    protected $casts = [
        'isMale' => 'boolean',
    ];

    public function categoriaLogro()
    {
        return $this->belongsTo(CategoriaLogro::class);
    }
}
