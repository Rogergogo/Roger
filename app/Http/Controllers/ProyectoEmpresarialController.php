<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyecto_empresarial;
use App\etapa_proyecto;
use App\persona_contacto;
use App\actividad_economica;


class ProyectoEmpresarialController extends Controller
{
    
    public function index(){

    	$proyecto_empresariales = proyecto_empresarial::paginate();
    	return view('Proyecto.index',compact('proyecto_empresariales'));
    }


    public function create(){

      $etapa_proyecto=etapa_proyecto::pluck('nombre', 'id');
      $persona_contacto=persona_contacto::pluck('nombre_completo', 'id');
      $actividad_economica=actividad_economica::pluck('nombre', 'id');


      return view('Proyecto.create',compact('etapa_proyecto','persona_contacto','actividad_economica'));
    }

      public function store(Request $request){


        proyecto_empresarial::create([
            'nombre' => $request['nombre'],
            'descripcion' => $request['descripcion'],
            'etapa_id' =>  $request['etapa_id'],
            'fecha_inicio' =>  $request['fecha_inicio'],
            'actividad_economica' =>  $request['actividad_economica'],
            'cantidad_empleados' =>  $request['cantidad_empleados'],
            'facturacion_mensual_aprox' =>  $request['facturacion_mensual_aprox'],
            'productos' =>  $request['productos'],
            'servicios' =>  $request['servicios'],
            'tipo_mercado' =>  $request['tipo_mercado'],
            'numero_integrantes' =>  $request['numero_integrantes'],
            'persona_contacto_id' =>  $request['persona_contacto_id'],

        ]);
        return redirect()->route('proyectoempresarial.index')->with('info','El proyecto fue creado con exito');

      }

    public function edit($id){

      $etapa_proyecto=etapa_proyecto::pluck('nombre', 'id');
      $persona_contacto=persona_contacto::pluck('nombre_completo', 'id');
      $actividad_economica=actividad_economica::pluck('nombre', 'id');
        $proyecto = proyecto_empresarial::find($id);
      return view('Proyecto.edit',compact('proyecto','etapa_proyecto','persona_contacto','actividad_economica'));

    }

     public function update(Request $request,$id)
    {   
          $proyecto= proyecto_empresarial::find($id);
        $proyecto->update($request->all());

        return redirect()->route('proyectoempresarial.index')->with('info','El proyecto fue actualizado con exito');
    }



    public function show($id){


    	$proyecto = proyecto_empresarial::find($id);
    	return view('Proyecto.show',compact('proyecto'));

    }
     public function destroy($id){

    	proyecto_empresarial::find($id)->delete();
      		

    	return back()->with('info','El proyecto fue eliminado');
     	//echo "<pre>"; print_r($id);die;
    }
}
