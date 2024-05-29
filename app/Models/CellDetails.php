<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellDetails extends Model
{
//street: string;
//label: string;
//coords: LatLngExpression;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'street',
        'label'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'lat_lng_expression_id',
        'id',
        'cell_location_id',
    ];

    public function lat_lng_expression()
    {
        return $this->belongsTo(LatLngExpression::class);
    }

    public function cell_location()
    {
        return $this->belongsTo(CellLocation::class, 'cell_location_id'); // Define the belongsTo relationship
    }
}
