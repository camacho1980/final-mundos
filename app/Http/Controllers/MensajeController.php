<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use App\Http\Mail\MensajeContacto;
use Illuminate\Support\Facades\Mail;
use Illuminate\support\Facades\Validator;


class MensajeController extends Controller
{
    public function apiMensaje(){
          // paso 1 valido los datos

          $validator = Validator::make(request()->all(), [
            'name'=>'required | min:4',
            'email'=>'required',
            'phone'=>'required | min:5',
            'message'=>'required'  
        ]);
        // paso 2 respondo si hay errores
        
        if ($validator -> fails()){
            return response([
                'error'=> true,
                'data'=> $validator -> errors()
            ],422);
        };

        // dd(request()->all());

        // validador datos requeridos

        $mensaje = Mensaje::create([
            'name'=>request()->name,
            'email'=>request()->email,
            'phone'=>request()->phone,
            'message'=>request()->message
        ]);

        // dd($mensaje);

        Mail::to('jorgearguello@live.com.ar')->send(new MensajeContacto($mensaje));
        
        //RESPONDEMOS UN JSON
        
        return response([
            "meta" => [
                "mensaje" => "Gracias por su mensaje le responderemos a la brevedad",
                "codigo" => 201
            ],
            'data'=> $mensaje
        ],201);
    }
     
}