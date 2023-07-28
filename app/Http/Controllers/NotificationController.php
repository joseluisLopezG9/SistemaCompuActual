<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcione;

class NotificationController extends Controller
{
    
    public function index()
    {
        $recepciones = Recepcione::paginate();
    
        return view('notification' , compact('recepciones'))
        ->with('i', (request()->input('page', 1) - 1) * $recepciones->perPage());

    }

    public function updateStateNotification(Request $request, $id){

        $request->validate([
            'estado' => 'required|in:aceptada,rechazada'
        ]);

        $estadoSeleccionado = $request->input('estado');

        $recepcion = Recepcione::find($id);

        if($recepcion){

            $recepcion->estado_notificacion = $estadoSeleccionado;

            $recepcion->save();

            return response()->json(['message' => 'El estado de la notificación se ha actualizado satisfactoriamente'], 200);

        }
   }
   
    /*public function receiveData(Request $request){



    }*/

}
