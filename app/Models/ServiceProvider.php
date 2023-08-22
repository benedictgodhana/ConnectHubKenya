<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    use HasFactory;

    protected $table = 'service_providers';
    protected $fillable = ['user_id', 'gender','phone_number','county_id','subcounty_id','area_id','service_id','rating','additional_info'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function county()
    {
        return $this->belongsTo(County::class, 'county_id');
    }
    public function subcounty()
    {
        return $this->belongsTo(SubCounty::class, 'subcounty_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
}
