<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactBitrix24;
use App\ConnectionBitrix24;

class ListaContatoController extends Controller
{
    public function index()
    {
        $company = new ContactBitrix24();
        $result = $company->ListaDeContact();

        return view('contato.index',compact('result'));
    }
}
