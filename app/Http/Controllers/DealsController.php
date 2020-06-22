<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DealsBitrix24;
use App\ConnectionBitrix24;

class DealsController extends Controller
{
    public function index(Request $request)
    {
        //error_log($request->all());
        //Log::info($request->all());
        Log::info(json_decode($request->all(), 1));
        GET_DEAL("150");

    }
}
