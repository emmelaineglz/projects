<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Domicilio;
use Illuminate\Http\RedirectResponse;
use View;
use App\Http\Requests;
use Illuminate\Http\Request;

class DomicilioController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index() : \Illuminate\View\View
    {
        $domicilios = Domicilio::paginate(15);

        return View::make('domicilio.index', [
            'domicilios' => $domicilios,
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create() : \Illuminate\View\View
    {
      $empleados = Empleado::all();
        return View::make('domicilio.create', [
          'empleados' => $empleados,
        ]);
    }

    /**
     * @param Requests\domicilioRequest $request
     *
     * @return RedirectResponse
     */
    public function store(Requests\domicilioRequest $request) : RedirectResponse
    {
        domicilio::create($request->all());

        return redirect()->to('domicilios');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function edit(domicilio $domicilio) : \Illuminate\View\View
    {
      $empleados = Empleado::all();

      return View::make('domicilio.edit', [
          'domicilio' => $domicilio,
          'empleados' => $empleados,
      ]);
    }

    /**
     * @param Requests\EmpresaRequest $request
     * @param Empresa                 $empresa
     *
     * @return RedirectResponse
     */
    public function update(Requests\DomicilioRequest $request, domicilio $domicilio) : RedirectResponse
    {
        $domicilio->update($request->all());

        return redirect()->to('domicilios');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function delete(domicilio $domicilio) : \Illuminate\View\View
    {
        return View::make('domicilio.delete', [
            'domicilio' => $domicilio,
        ]);
    }

    /**
     * @param domicilio $domicilio
     *
     * @return RedirectResponse
     *
     * @throws \Exception
     */
    public function destroy(domicilio $domicilio) : RedirectResponse
    {
        $domicilio->delete();

        return redirect()->to('domicilios');
    }
}
