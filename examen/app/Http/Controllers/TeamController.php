<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Validator;

/**
 * Class TeamController.
 */
class TeamController extends Controller
{
  /**
   * @var team
   */
  protected $team;

  /**
  * Este metodo regresa toda la coleccion de teams
  */
  public function list()
  {
    $Teams = Team::all();
    return response()->json($Teams);
  }

  /**
  * Este metodo regresa un team en particular
  */
  public function show($team)
  {
    $teams = Team::where('id',$team)
        ->with('members')
        ->get();
    if(!empty($teams)){
      return response()
      ->json('error: Entity not found', 404);
    }
    return response()->json($teams);
  }

  /**
  * Este metodo crea un Team nuevo en la BD.
  */
  public function store(Request $request) : JsonResponse
  {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return response()
            ->json($validator->errors(), 400);
    }
    $team = Team::create($request->all());
    return response()->json($team, 201);
  }

  /**
  * Este metodo edita un team en particular
  */
  public function update(Request $request, $team)
  {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return response()
            ->json($validator->errors(), 400);
    }
    $team = Team::find($team);
    if(!empty($team)){
      $team->update($request->all());
      return response()->json($team, 200);
    }
      return response()
      ->json('error: Entity not found', 404);

  }

  /**
  * Este metodo borra un team en particular
  */
  public function destroy($team)
  {
    $team = Team::find($team);
    if(!empty($team)){
      $team->delete();
      return response('', 204);
    }
    return response('', 404);
  }
}
