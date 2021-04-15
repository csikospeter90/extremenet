<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable=['name','email','vaccine_id'];

    public function vaccine()
    {
       return $this->hasOne(Vaccine::class,'id','vaccine_id');
    }
}
