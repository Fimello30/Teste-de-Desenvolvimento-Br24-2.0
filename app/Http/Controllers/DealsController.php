<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DealsBitrix24;
use App\ConnectionBitrix24;

class DealsController extends Controller
{
    public function index()
    {
        DealBitrix24::GET_Deal($_REQUEST);
    }
}
