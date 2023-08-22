<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    use HasFactory;

    protected $table = 'sub_county';
    
    protected $fillable = [
        'name',
        'county_id',
    ];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
