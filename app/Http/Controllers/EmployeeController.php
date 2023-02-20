<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(){
        return view('employees.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'Nama'      => 'required|string|min:5',
            'Usia'      => 'required|string|min:1',
            'Alamat'    => 'required|string|min:10',
            'No_Telp'   => 'required|string|min:10'
        ]);

        Employees::create([
            'Nama'      => request->Nama,
            'Usia'      => request->Usia,
            'Alamat'    => reqest->Alamat,
            'No_Telp'   => request->No_Telp
        ]);

        return redirect()->route('employess.index');
    }

    public function index(){
        $employees = Employee::Latest()->paginate(5);
        return view('Employee.index', compact('employees'));
    }

    public function edit(Employee $employee){
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee){
        $this->validate($request, [
            'Nama'      => 'required|string|min:5',
            'Usia'      => 'required|string|min:1',
            'Alamat'    => 'required|string|min:10',
            'No_Telp'   => 'required|string|min:10'
        ]);

        $employee->update([
            'Nama'      => request->Nama,
            'Usia'      => request->Usia,
            'Alamat'    => reqest->Alamat,
            'No_Telp'   => request->No_Telp
        ]);

        return redirect()->route('employees.index');
    }
}