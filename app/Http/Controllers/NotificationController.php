<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcione;
use App\Notifications\FcmNotification;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    
    public function index()
    {
        $recepciones = Recepcione::paginate();
    
        return view('notification' , compact('recepciones'))
        ->with('i', (request()->input('page', 1) - 1) * $recepciones->perPage());

    }

    public function stateNotification(Request $request, $id){

        $request->validate([
            'estado' => 'required|in:ACEPTADA,RECHAZADA'
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

    public function sendNotification($id)
    {
        $recepcione = Recepcione::findOrFail($id);

        Notification::send($recepcione, new FcmNotification());

        return back()->with('success', 'La notificación al dispositivo móvil se ha sido enviada satisfactoriamente!');

        /*->with('success', 'La notificación ha sido enviada satisfactoriamente!', compact('recepcione'));*/
    }

    public function sendNotificationSmartwatch($id)
    {
        $recepcione = Recepcione::findOrFail($id);

        Notification::send($recepcione, new FcmNotification());

        return back()->with('success', 'La notificación al dispositivo wearable se ha enviado satisfactoriamente!');

    }

}
