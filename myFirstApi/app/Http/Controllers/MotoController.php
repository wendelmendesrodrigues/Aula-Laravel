<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index(){
        return response()->json("minha moto");
    }
}
