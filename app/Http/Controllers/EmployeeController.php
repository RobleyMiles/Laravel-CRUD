<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employee = employee::get();
        return view('employee.index',compact('employee'));
        
    }
    public function store(Request $request){
        Employee::create([
            'FirstName'=>$request->FirstName,
            'LastName'=> $request->LastName,
            'DateofBirth'=>$request->DateofBirth,
            'Phone'=>$request->Phone,
        ]);
        return redirect('employee');
    }
    public function edit(int $id){
    
        $employee = employee::findorfail($id);
        return view('employee.update',compact('employee'));
            
    }

    public function update(Request $request ,int $id){
        employee::findorfail($id)->update([
            'FirstName'=>$request->FirstName,
            'LastName'=> $request->LastName,
            'DateofBirth'=>$request->DateofBirth,
            'Phone'=>$request->Phone,
        ]);
        return redirect('employee');
        
    }


}