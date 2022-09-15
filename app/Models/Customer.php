<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\Region;

class Customer extends Model
{
    use HasFactory;

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }

    public function regions()
    {
        return $this->belongsToMany(Region::class);
    }
}
