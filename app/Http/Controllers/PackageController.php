<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function create_pacakge()
    {
        return view('create_pacakge');
    }

    public function create_pacakgeApi(Request $request)
    {
        
        $http = new \GuzzleHttp\Client;

        $package_name = $request->package_name;
        $package_destination = $request->package_destination;
        $package_duration = $request->package_duration;
        $package_type = $request->package_type;
        $package_cost = $request->package_cost;


        $response = $http->post('http://127.0.0.1:8000/api/add?', [
            'headers' => [
                'Authorization' => 'Bearer'.session()->get('token.access_token')
            ],
            'query' => [
                'package_name' => $package_name,
                'package_destination' => $package_destination,
                'package_duration' => $package_duration,
                'package_type'=> $package_type,
                'package_cost'=> $package_cost

            ]
        ]);

        $result = json_decode((string)$response->getBody(),true);
        // return dd($result);

        return view('create_pakage');
    }
}
