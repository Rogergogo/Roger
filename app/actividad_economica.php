<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividad_economica extends Model
{
    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->id = (string) Uuid::generate(4);
    });
}


     protected $fillable = [
        'nombre',   
         ];
}
