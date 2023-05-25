<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Http\Requests\CompaniesRequest;
use Illuminate\Support\Facades\App;


class CompaniesController extends Controller
{
    public function index(Request $request)
    {

       return view("companies.index",[
        "companies"=>$companies
       ]);
    }

    public function create()
    {
    return view("companies.creat");
    }

    public function save(CompaniesRequest $request)
    {
      //$request->validate();
      $company=new Companies();
      $company->id=$request->id;
      $company->name=$request->name;
      $company->address=$request->address;
      $company->save();
      return redirect()->route("companies.index");
  
    }

    public function edit($id)
    {
     return view("companies.edit",[
      "company"=>Companies::find($id)
     ]);
    }

    public function update($id, CompaniesRequest $request)
    {
        $company=Companies::find($id);
        $company->id=$request->id;
        $company->vardas=$request->vardas;
        $company->pavarde=$request->pavarde;
        $company->save();
        return redirect()->route("companies.index");
    }

    public function delete($id){
        Companies::destroy($id);
        return redirect()->route("companies.index");
      }

}
