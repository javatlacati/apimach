<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //label: any;
    //value: any;
    //value1: string | undefined = undefined;
    //value2: boolean = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label', //estado
        'value', //nombre de la sede en instagram
        'value1', //facebook
        'value2' //si es una cuenta verificada
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'grouped_city_id',
        'id'
    ];

    protected $casts = [
        'value2' => 'boolean',
    ];
}
