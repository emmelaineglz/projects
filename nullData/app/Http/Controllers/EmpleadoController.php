<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\RedirectResponse;
use View;
use App\Http\Requests;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index() : \Illuminate\View\View
    {
        $empleados = Empleado::paginate(15);

        return View::make('empleado.index', [
            'empleados' => $empleados,
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create() : \Illuminate\View\View
    {
        return View::make('empleado.create');
    }

    /**
     * @param Requests\EmpleadoRequest $request
     *
     * @return RedirectResponse
     */
    public function store(Requests\EmpleadoRequest $request) : RedirectResponse
    {
        Empleado::create($request->all());

        return redirect()->to('empleados');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function edit(Empleado $empleado) : \Illuminate\View\View
    {
        return View::make('empleado.edit', [
            'empleado' => $empleado,
        ]);
    }

    /**
     * @param Requests\EmpresaRequest $request
     * @param Empresa                 $empresa
     *
     * @return RedirectResponse
     */
    public function update(Requests\EmpleadoRequest $request, empleado $empleado) : RedirectResponse
    {
        $empleado->update($request->all());

        return redirect()->to('empleados');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function delete(Empleado $empleado) : \Illuminate\View\View
    {
        return View::make('empleado.delete', [
            'empleado' => $empleado,
        ]);
    }

    /**
     * @param Empleado $empleado
     *
     * @return RedirectResponse
     *
     * @throws \Exception
     */
    public function destroy(Empleado $empleado) : RedirectResponse
    {
        $empleado->delete();

        return redirect()->to('empleados');
    }
}
