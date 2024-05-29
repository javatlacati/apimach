<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Country model.
 * @property string $label country name
 * @property string $value country code
 */
class GroupedCity extends Model
{
//label: string;
//value?: any;
//items: SelectItem[];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'label',
        'value'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'id'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
