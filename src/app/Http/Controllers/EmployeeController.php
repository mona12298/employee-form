<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('index', compact('employees'));
    }
    public function store(EmployeeRequest $request){
        $employee = $request->only(['name', 'email', 'age', 'department', 'joined_date']);
        Employee::create($employee);
        return redirect('/');
    }
    public function create(){
        return view('create');
    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('edit', compact('employee'));
    }
    public function update(EmployeeRequest $request){
        $form = $request->all();
        unset($form['_token']);
        Employee::find($request->id)->update($form);
        return redirect('/');
    }

    public function destroy(Request $request){
        Employee::find($request->id)->delete();
        return redirect('/');
    }
}
