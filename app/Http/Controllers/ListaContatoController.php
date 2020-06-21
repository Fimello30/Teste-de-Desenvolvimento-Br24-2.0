<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactBitrix24;
use App\ConnectionBitrix24;

class ListaContatoController extends Controller
{
    public function index()
    {
        $URL="crm.contact.list";
        $data = http_build_query(array(
            'select' => ["ID","NAME", "UF_CRM_1592106833", "EMAIL", "PHONE"]
        ));
        $result = ConnectionBitrix24::ExecutionConn($data,$URL);
        $result = json_decode($result, 1);
        ConnectionBitrix24::writeToLog($result, 'list id');
        //dd(compact('result'));

        return view('contato.index',compact('result'));
    }
}
