<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Nacionalidad;
use App\Models\Provincia;
use App\Models\Ciudad;
use App\Models\Corredor;
use Illuminate\Http\Request;


class CorredorController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $corredores = Corredor::with(['equipos'])->get();
        // retorno la vista
        return view('corredor.index', compact('corredores'));
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
        return view('corredor.form-nuevo', compact('equipos', 'nacionalidades', 'ciudades','provincias'));
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

        return redirect(url('/corredores'))
                ->with('message', '¡Gracias por inscribirte! Aquí podes validar el número de corredor asignado');
    }
}
