<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ApiController extends Controller
{
    
    public function apiTest()
    {
        $client = new Client(['base_uri' => 'http://api.open-notify.org/','timeout'  => 2.0,]);
        $response = $client->get('astros.json');

        $body = (string) $response->getBody()->getContents();

      

        var_dump($body);

        // $client = new Client(['base_uri' => 'https://play.geokey.org.uk/','timeout'  => 2.0,]);
        // $response = $client->get('api/projects/');
    }
    public function apiID($id){

        $client = new Client(['base_uri' => 'http://api.open-notify.org/','timeout'  => 2.0,]);
        $response = $client->get('astros.json');

        $body = $response->getBody()->getContents();

    
       
        $parsed = json_decode($body , true);
 

       

     
        foreach($parsed as $name => $data) {
            var_dump($data[$id]); 
          
        }

    }

}
