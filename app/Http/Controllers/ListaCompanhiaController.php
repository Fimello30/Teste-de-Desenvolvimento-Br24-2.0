<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnectionBitrix24;

class ListaCompanhiaController extends Controller
{
    public function index()
    {
        $URL="crm.company.list";
        $data = http_build_query(array(
            'select' => ["TITLE", "UF_CRM_1592106903","UF_CRM_1592205695"]
        ));
        $result = ConnectionBitrix24::ExecutionConn($data,$URL);
        $result = json_decode($result, 1);
        ConnectionBitrix24::writeToLog($result, 'list id');
        //dd(compact('result'));

        return view('companhia.index',compact('result'));
    }
}
