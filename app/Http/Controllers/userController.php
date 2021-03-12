<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function data()
    {
        $empleados = empleado::all();
		$collection = [];

        foreach ($empleados as $empleado) {
            switch ($empleado->sexo) {
                case "F":
                    $sexo = 'Femenino';
                    break;
                case "M":
                    $sexo = 'Masculino';
                    break;
            }
            switch ($empleado->boletin) {
                case "1":
                    $boletin = 'Si';
                    break;
                case "0":
                    $boletin = 'No';
                    break;
            }



			$values = [
				"nombre" => $empleado->nombre,
				"email" => $empleado->email,
				"sexo" => $sexo,
				"area" => $empleado->area->nombre,
				"boletin" => $boletin,
				"modificar" => '<i onclick = "modificar();" class="far fa-edit" data-toggle="tooltip" title="Modificar" ></i>',
				"eliminar" => '<i onclick = "eliminar();" class="fas fa-trash-alt" data-toggle="tooltip" title="Eliminar"></i>'
			];
			array_push($collection, $values);
        }
		return datatables($collection)
                ->rawColumns(['modificar','eliminar'])
                ->toJson();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
