<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcione;
use App\Notifications\FcmNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;


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
   
    public function updateStateNotification(Request $request){

        $response = $request->input('response');
        $modelo = $request->input('modelo');
        $numSerie = $request->input('numSerie');
        
        // Realizar solicitud HTTP para actualizar el estado en Laravel
        $baseUrl = 'http://localhost:8000/api';
        $endpoint = 'update_state_notification';
        $response = Http::post("$baseUrl/$endpoint", [
            'response' => $response,
            'modelo' => $modelo,
            'numSerie' => $numSerie,
        ]);
        
        return response()->json(['message' => 'Estado de notificación actualizado']);
    }


    public function sendNotification(Request $request, $id)
    {
        $recepcione = Recepcione::findOrFail($id);

        $deviceType = $request->input('device_type');

        if ($recepcione->estado_notificacion !== 'ENVIADA') {

            Notification::send($recepcione, new FcmNotification());

            $recepcione->estado_notificacion = 'ENVIADA';

            $recepcione->save();

            return response()->json([
                'success' => true,
                'message' => "La notificación al dispositivo $deviceType se ha enviado satisfactoriamente" , ucfirst($deviceType),
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => "La notificación ya ha sido enviada al cliente, espere a que responda"
        ], 200);

    }
    

    /*public function sendNotificationSmartwatch($id)
    {
        $recepcione = Recepcione::findOrFail($id);

         if ($recepcione->estado_notificacion === 'PENDIENTE') {
            
            Notification::send($recepcione, new FcmNotification());
    
            $recepcione->estado_notificacion = 'ENVIADA';

            $recepcione->save();
    
            return response()->json(['message' => 'La notificación al dispositivo wearable se ha enviado satisfactoriamente'], 200);
        }
    
        return response()->json(['message' => 'La notificación ya ha sido enviada al cliente, espere a que responda'], 200);

    }*/

    /*public function updateNotification($id)
    {
        $recepcione = Recepcione::findOrFail($id);

        if ($recepcione->estado_notificacion === 'PENDIENTE'){
            
            DB::table('recepciones')
            ->where('id', $id)
            ->update(['estado_notificacion' => 'ENVIADA']);

        }

        return redirect()->route('notificacion')->with('success', 'La notificación ha sido enviada satisfactoriamente!');
    }*/

}
