<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    public function searchCep(Request $request, string $ceps)
    {
        $ceps = explode(',', $ceps);

        $allCeps = [];

        if (count($ceps) > 0) {
            foreach ($ceps as $cep) {
                $response = Http::get('https://viacep.com.br/ws/' . $cep . '/json/');
                $data = $response->json();
                $allCeps[] = $data;
            }
        }

        return response()->json($allCeps);
        //var_dump($ceps);
    }
}
