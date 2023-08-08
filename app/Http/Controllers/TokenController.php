<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recepcione;
use Illuminate\Support\Facades\Http;

class TokenController extends Controller

{
    public function saveToken(Request $request){

        $token = $request->input('token_fcm');

        $idRecepcione = $request->input('id');

        $recepcione = Recepcione::find($idRecepcione);

        if(!$recepcione){

            return response()->json(['message' => 'Recepción no encontrada'], 404);

        }

        $recepcione->fcm_token = $token;

        $recepcione->save();

        return response()->json(['message' => 'Token registrado correctamente'], 201);

    }
}
