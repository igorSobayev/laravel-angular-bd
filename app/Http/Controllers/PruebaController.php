<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;

class PruebaController extends Controller
{
    //

    function add (Request $request) {
        
        // $title = $request->input('title');
        // $status = $request->input('status');
        // $date = $request->input('date');

        $title = $request->title;
        $status = $request->status;
        $date = $request->date;

        $prueba = new Prueba();
        $prueba->title = $title;
        $prueba->status = $status;
        $prueba->date = $date;

        $prueba->save();

    }

    function get () {
        
        $records = Prueba::all();
        return response()->json($records);
    }

    function delete (Request $request) {
        
        $id = $request->id;

        $record = Prueba::find($id);
        $record-> delete();

        return $id;
    }

    function getone (Request $request) {

        $record = Prueba::find($request->id);

        return response()->json($record);
    }
}
