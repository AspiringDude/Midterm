<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    public function create()
    {
        return view('colleges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'college_id' => 'required|integer|unique:colleges,college_id',
            'college_name' => 'required|string|max:255',
            'college_code' => 'required|string|max:50|unique:colleges,college_code',
        ]);

        College::create([
            'college_id' => $request->college_id,
            'college_name' => $request->college_name,
            'college_code' => $request->college_code,
        ]);

        return redirect()->route('colleges.index')->with('success', 'College added successfully.');
    }

    public function edit(College $college)
    {
        return view('colleges.edit', compact('college'));
    }

    public function update(Request $request, College $college)
    {
        $request->validate([
            'college_id' => 'required|integer|unique:colleges,college_id,' . $college->college_id,
            'college_name' => 'required|string|max:255',
            'college_code' => 'required|string|max:50|unique:colleges,college_code,' . $college->college_id,
        ]);

        $college->update([
            'college_id' => $request->college_id,
            'college_name' => $request->college_name,
            'college_code' => $request->college_code,
        ]);

        return redirect()->route('colleges.index')->with('success', 'College updated successfully.');
    }

    public function destroy(College $college)
    {
        $college->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully.');
    }
}