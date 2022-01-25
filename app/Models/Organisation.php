<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    /*** The attributes that are mass assignable.*/
    protected $fillable = [
        'name',
        'address',
        'postal_code',
        'city',
        'country',
        'is_active'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User');   // a genre has many records
    }

    public function weatherStations()
    {
        return $this->hasMany('App\Models\WeatherStation');   // a genre has many records
    }

}
