<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    // Method to handle the incoming request
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        // Create the data array with id, name, and age
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Set the cookie with the specified values
        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME']; // Get the domain from the server
        $secure = false;
        $httpOnly = true;


        $cookie = Cookie::make($cookie_name, $cookie_value, $minutes, $path, $domain, $secure, $httpOnly);


        return response()->json($data, 200)->cookie('cookie',$cookie);
    }
}
