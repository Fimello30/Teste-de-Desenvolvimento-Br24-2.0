<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\DealsBitrix24;
use App\ConnectionBitrix24;

class DealsController extends Controller
{
    public function index(Request $request)
    {
        $result = new DealsBitrix24();

        $result->GET_DEAL(compact('request'));
    }
}
