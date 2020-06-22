<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DealsBitrix24;
use App\ConnectionBitrix24;

class DealsController extends Controller
{
    public function index(Request $request)
    {
        GET_DEAL($request->input('ID'));
    }
}
