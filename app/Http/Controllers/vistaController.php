<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistaController extends Controller
{
    //
    public function youtube(){

    }
    public function consumo()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://www.boredapi.com/api/activity/');
        $json = $response->getBody();
        $datos = json_decode($json, true);






        return compact('datos');
    }
    public function api(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://pokeapi.co/api/v2/pokemon?limit=100&offset=200');
        $json = $response->getBody();
        $pokemon = json_decode($json, true);






        return compact('pokemon');
    }
    public function apiMarco(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('POST', 'https://notideportes.herokuapp.com/api/apiDeporte1');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $news = [];
        foreach ($resultado['Deporte'] as $new) {
            $news[] = [
                'titulo' => $new['titulo'],
                'contenido' => $new['contenido'],
                'autor' => $new['autor'],
                'imagen' => $new['imagen']
            ];
        }


        return $news;
    }

    public function index()
    {
        return view('boredapi', ['datos' => $this->consumo(), 'pokemon' => $this->api()]);
    }
    public function vista(){
        return view('index',['news' => $this->apiMarco()]);
    }
    
}
