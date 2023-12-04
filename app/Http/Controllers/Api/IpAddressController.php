<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IpAddressController extends Controller
{
    public function index(){
        $ip= IpAddress::first();
        return response()->json(compact('ip'));

    }

    public function save(){
        $ip= IpAddress::updateOrCreate(
            
        );
    }
}
