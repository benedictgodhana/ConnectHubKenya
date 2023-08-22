<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    protected $table = 'county';

    protected $fillable = ['county_code', 'name'];

    public function subCounties()
    {
        return $this->hasMany(SubCounty::class);
    }
}
