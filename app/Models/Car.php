<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ["description","model","producer_id","image"];
    public function producer(){
        return $this->belongsTo(\App\Models\Producer::class,'producer_id');
    }
}
