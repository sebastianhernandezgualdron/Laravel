<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class testController extends Controller
{
    function test(){

        $usuario = User::find(1);
    
        return view("welcome", ["user"=> $usuario]);
    }
}
