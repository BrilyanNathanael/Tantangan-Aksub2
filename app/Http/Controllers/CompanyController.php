<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class CompanyController extends Controller
{
    public function index()
    {
        return view('company');
    }

    public function store(Request $request)
    {
        Company::create([
            'name' => $request->name,
        ]);

        return redirect('/home');
    }
}
