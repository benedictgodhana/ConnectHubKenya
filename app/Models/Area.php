<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'area';
    
    protected $fillable = [
        'name',
        'sub_county_id',
    ];

    public function subCounty()
    {
        return $this->belongsTo(SubCounty::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
