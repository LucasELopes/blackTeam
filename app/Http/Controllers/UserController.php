<?php

namespace App\Http\Controllers;

use App\Models\Pupil;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'tel' => 'required|unique:pupils',
                'email' => 'email|unique:pupils',
                'password' => 'required'
            ],
            [
                'required' => 'O campo :attributes é obrigatório!',
                
                'email.email' => 'email inválido',
                'email.unique' => 'O email informado já está em uso.',

                'tel.unique' => 'O número de telefone informado já está em uso.'
            ]
        );

        Pupil::create([
            'name' => $request->name,
            'tel' => $request->tel,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('site.login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
