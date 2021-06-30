<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarTareaRequest;
use App\Http\Requests\ActualizarTareaRequest;
use App\Http\Requests\ActuChekedTareaRequest;  
use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Me Trae toda la data de la Lista de Tareas en JSON
        return Tarea::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarTareaRequest $request)
    {
        // $request->confirmed= false;
        // Tarea::create($request->all());
        // return response()->json([
        //     'res' => true,
        //     'msg' => 'Tarea Guardada Correctamente'
        // ],200);
        $tarea = new Tarea;
        $tarea-> name=$request->name;
        $tarea-> description=$request->description;
        $tarea-> confirmed= false;
        $tarea->save();
        return response()->json([
            'res' => true,
            'msg' => 'Tarea Guardada Correctamente'
        ],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return response()->json([
            'res' => true,
            'tarea' => $tarea
        ],200);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarTareaRequest $request, Tarea $tarea)
    {
        $tarea->update($request->all());
        return response()->json([
            'res'=> true,
            'mensaje' => 'Datos actualizados correctamente'
        ], 200);
    }
    public function updateConfirmed(Request $request, Tarea $tarea)
    {
        
        $tarea->update($request->all());
        
        return response()->json([
            'res'=> true,
            'mensaje' => 'Datos actualizados correctamente'
        ], 200);
    }

    public function searchName($name) {

        return Tarea::where("name","like", "%$name%")->get();
             response()->json([
            'res'=> true,
            'mensaje' => 'Busqueda completada'
        ], 200);
    
    }

    public function searchStatus($confirmed) {
        return Tarea::where("confirmed", $confirmed)->get();
            response()->json([
                'res'=>true,
                'mensaje'=>'Busqueda completada'
            ],200);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->json([
            'res'=> true,
            'mensaje' => 'Tarea Eliminado Correctamente'
        ], 200);
    }
}
