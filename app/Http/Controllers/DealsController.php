<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DealsBitrix24;
use App\ConnectionBitrix24;

class DealsController extends Controller
{
    public function index(Request $request)
    {
        dd($request);
        //Log::info(json_decode($request->all(), 1));
        //GET_DEAL("150");

    }
}
