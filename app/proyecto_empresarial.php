<?php

namespace App;
use Uuid;
use Illuminate\Database\Eloquent\Model;

class proyecto_empresarial extends Model
{
    //

    protected $cast = [

        "id" => "string"

    ];

    protected $primaryKey= 'id';
    public $incrementing = false;
    
    public static function boot()
{
    parent::boot();
    self::creating(function ($model) {
        $model->id =(string) Uuid::generate(4);
    });
}




     protected $fillable = [
        'nombre','descripcion','etapa_id','fecha_inicio','actividad_economica','cantidad_empleados','facturacion_mensual_aprox','productos','servicios','tipo_mercado', 
        'numero_integrantes' ,'persona_contacto_id'
         ];


            public function etapa_proyecto()
    {
        return $this->belongsTo('App\etapa_proyecto','etapa_id');
    }
            public function actividad_economicas()
    {
        return $this->belongsTo('App\actividad_economica','actividad_economica');
    }
            public function persona_contacto()
    {
        return $this->belongsTo('App\persona_contacto','persona_contacto_id');
    }


}
