<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DealsBitrix24;
use App\ConnectionBitrix24;

class DealsController extends Controller
{
    public function index()
    {
        $result = $_REQUEST;

        DealBitrix24::GET_Deal($result);
    }
}
