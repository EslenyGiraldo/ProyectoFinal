<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function obtenerDatos()
    {
        $client = new Client();
        $response = $client->get('https://www.datos.gov.co/resource/hxd2-uqjm.json');

        $data = json_decode($response->getBody(), true);

        return view('VistaApi', ['datos' => $data]);
    }
}
