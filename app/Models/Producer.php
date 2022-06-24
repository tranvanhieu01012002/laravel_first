<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producer;
use App\Models\Car;
class Producer extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function cars(){
        return $this->hasMany(Car::class,'producer_id');
    }
}
