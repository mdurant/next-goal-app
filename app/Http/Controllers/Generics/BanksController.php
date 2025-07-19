<?php

namespace App\Http\Controllers\Generics;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use Illuminate\Http\Request;

class BanksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banks = Banks::all();
        return view('generics.banks.index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generics.banks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:10|unique:banks,code',
            'name' => 'required|string|max:100',
            'status' => 'required|boolean',
        ]);
        Banks::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(Banks $banks)
    {
        // validate si tiene datos vaciones, entonces redireccionar a index
        if ($banks->isEmpty()) {
            return redirect()->route('banks.index')->with('error', 'No banks found.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banks $banks)
    {
        return view('generics.banks.edit', compact('banks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banks $banks)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:10|unique:banks,code,' . $banks->id,
            'name' => 'required|string|max:100',
            'status' => 'required|boolean',
        ]);
        $banks->update($validatedData);

        return redirect()->route('generics.banks.index')->with('success', 'Banks updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banks $banks)
    {
        $banks->delete();
        return redirect()->route('generics.banks.index')->with('success', 'Bank deleted successfully.');
    }
}
