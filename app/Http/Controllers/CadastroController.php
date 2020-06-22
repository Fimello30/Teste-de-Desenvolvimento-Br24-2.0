<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\ContactBitrix24;
use App\CompanyBitrix24;
use App\ConnectionBitrix24;

class CadastroController extends Controller
{
    public function index(Request $req)
    {
        $contact = new ContactBitrix24();
        $company = new CompanyBitrix24();

        $CheckID_Company = $company->ListCompany($req['CNPJ']);
        $CheckID_Contact = $contact->ListContact($req['CPF']);
        if($CheckID_Company == NULL && $CheckID_Contact == NULL){
            $company->AddCompany($req['name_da_empresa'],$req['CNPJ']);
            $contact->AddContact($req['name'], $req['phone'], $req['email'],$req['CPF']);

            $CheckID_Company = $company->ListCompany($req['CNPJ']);
            $CheckID_Contact = $contact->ListContact($req['CPF']);
            $company->AddCompanyContact($CheckID_Company,$CheckID_Contact);
            return redirect()->route('cadastro-realizado');
        }

        elseif($CheckID_Company == NULL && $CheckID_Contact != NULL){
            $company->AddCompany($req['name_da_empresa'],$req['CNPJ']);
            $contact->UpdateContact($CheckID_Contact,$req['name'], $req['phone'], $req['email']);

            $CheckID_Company = $company->ListCompany($req['CNPJ']);
            $company->AddCompanyContact($CheckID_Company,$CheckID_Contact);
            return redirect()->route('cadastro-realizado');
        }

        elseif($CheckID_Company != NULL && $CheckID_Contact == NULL){
            $company->UpdateCompany($CheckID_Company,$req['name_da_empresa']);
            $contact->AddContact($req['name'], $req['phone'], $req['email'],$req['CPF']);

            $CheckID_Contact = $contact->ListContact($req['CPF']);
            $company->AddCompanyContact($CheckID_Company,$CheckID_Contact);
            return redirect()->route('cadastro-realizado');
        }


        else{
            $contact->UpdateContact($CheckID_Contact,$req['name'], $req['phone'], $req['email']);
            $company->UpdateCompany($CheckID_Company,$req['name_da_empresa']);

            $company->AddCompanyContact($CheckID_Company,$CheckID_Contact);
            return redirect()->route('cadastro-atualizado');
        }
    }
}
