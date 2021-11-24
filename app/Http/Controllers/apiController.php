<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class apiController extends Controller
{
    function consultaAPI(Request $request){
        try{
            $resultado = HTTP::post('https://atomic.incfile.com/fakepost');
            $resultadoArray = $resultado->json();
            return view('welcome', compact('resultadoArray'));
        }catch(\Exception $e){
            Log::debug($e->getMessage());
        }
    }
}
