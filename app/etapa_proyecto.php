<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etapa_proyecto extends Model
{
    //
    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->uuid = (string) Uuid::generate(4);
    });
}

     protected $fillable = [
        'nombre',   
         ];
}
