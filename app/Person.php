<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function bicycles(){
        return $this->hasMany(Bicycle::class);
    }
}
