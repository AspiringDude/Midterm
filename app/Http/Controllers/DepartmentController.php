<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\College;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::with('college')->get();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        $colleges = College::all();
        return view('departments.create', compact('colleges'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|integer|unique:departments,department_id',
            'college_id' => 'required|exists:colleges,college_id',
            'department_name' => 'required|string|max:255',
            'department_code' => 'required|string|max:50|unique:departments,department_code',
        ]);

        Department::create([
            'department_id' => $request->department_id,
            'college_id' => $request->college_id,
            'department_name' => $request->department_name,
            'department_code' => $request->department_code,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department added successfully.');
    }

    public function edit(Department $department)
    {
        $colleges = College::all();
        return view('departments.edit', compact('department', 'colleges'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'department_id' => 'required|integer|unique:departments,department_id,' . $department->department_id,
            'college_id' => 'required|exists:colleges,college_id',
            'department_name' => 'required|string|max:255',
            'department_code' => 'required|string|max:50|unique:departments,department_code,' . $department->department_id,
        ]);

        $department->update([
            'department_id' => $request->department_id,
            'college_id' => $request->college_id,
            'department_name' => $request->department_name,
            'department_code' => $request->department_code,
        ]);

        return redirect()->route('departments.index')->with('success', 'Department updated successfully.');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')->with('success', 'Department deleted successfully.');
    }
}