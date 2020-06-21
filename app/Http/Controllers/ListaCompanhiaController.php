<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyBitrix24;
use App\ConnectionBitrix24;

class ListaCompanhiaController extends Controller
{
    public function index()
    {
        $company = new CompanyBitrix24();
        $result = $company->ListaDeCompany();
        return view('companhia.index',compact('result'));
    }
}
