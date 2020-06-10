<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;
class EmployeeController extends Controller
{
    public function index()
    {
        $company = Company::all();
        return view('createEmployee',compact('company'));
    }

    public function store(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'position' => $request->position,
            'company_id' => $request->company,
        ]);

        return redirect('/home');
    }

    public function edit($id)
    {
        $emplo = Employee::findOrFail($id);
        $company = Company::all();
        return view('editEmployee',compact('emplo','company'));
    }

    public function update(Request $request, $id)
    {
        Employee::where('id',$id)
                ->update([
                    'name' => $request->name,
                    'age' => $request->age,
                    'position' => $request->position,
                    'company_id' => $request->company,
                ]);
            
        return redirect('/home');
    }

    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        return redirect('/home');
    }
}
