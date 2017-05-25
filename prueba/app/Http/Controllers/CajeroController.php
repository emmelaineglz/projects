<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class CajeroController extends Controller
{
  public $response = array();
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function atm(Request $request) : \Illuminate\View\View
    {
      $importe = (int)$request->importe;
      if(empty($importe)){ $res = array('Empty Set'); }
      if($importe < 0 || is_string($importe)){ $res = array('InvalidArgumentException'); }
      if($importe > 0){
        do{
          $importe = $this->calculate($importe);

        }while($importe > 0);
        $res = $this->response;
      }
      if(is_null($importe)){ $res = array('NoteUnavailableException'); }

      return View::make('result', [
          'res' => $res,
      ]);


    }


    public function calculate($importe){
      $ope = $importe / 100;
      if($ope >= 1){
        $this->response[] = 100;
        $newImporte = $importe - 100;
        return $newImporte;
      }
      $ope = $importe / 50;
      if($ope >= 1){
        $this->response[] = 50;
        $newImporte = $importe - 50;
        return $newImporte;
      }
      $ope = $importe / 20;
      if($ope >= 1){
        $this->response[] = 20;
        $newImporte = $importe - 20;
        return $newImporte;
      }
      $ope = $importe / 10;
      if($ope >= 1){
        $this->response[] = 10;
        $newImporte = $importe - 10;
        return $newImporte;
      }

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
