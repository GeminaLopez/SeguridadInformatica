<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Nacionalidad;
use App\Models\Corredor;
use Illuminate\Http\Request;

class CorredorController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $corredores = Corredor::with(['equipos'])
                                ->with(['nacionalidades'])
                                ->with(['provincias'])
                                ->with(['ciudades'])
                                ->get();
        // retorno la vista
        return view('corredores.index', compact('corredores'));
    }

    /**
     * Carga el formulario para crear un corredores
     *
     * @return view
     */
    public function formNuevo()
    {
        $equipos = Equipo::all();
        $nacionalidades = Nacionalidad::all();
        $ciudades = Ciudad::all();
        $provincias = Provincia::all();
        return view('corredores.form-nuevo', compact('equipos', 'nacionalidades', 'ciudades','provincias'));
    }

    /**
     *  Recibe los datos cargados en el formulario y crea el corredor
     *
     * @param $request
     * @return view, message
     */
    public function crear(Request $request)
    {
        // Validaciones
        $request->validate(Corredor::$rules, Corredor::$errorMessages);

        // Pido todos los datos
        $data = $request->all();

        // Graba en la BD
        Corredor::create($data);

        return redirect(url('/corredor'))
            ->with('message', 'El corredor fue creado con éxito.');
    }
}
