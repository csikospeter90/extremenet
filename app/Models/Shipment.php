<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable = ['vaccine_id','quantity','arrival_date'];

    public function vaccine()
    {
        return $this->hasOne(Vaccine::class,'id','vaccine_id');
    }
}
