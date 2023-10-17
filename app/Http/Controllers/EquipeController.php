<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $equipes = Equipe::all();
       return view ('admin.equipes.index')->with('equipes', $equipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Equipe::create($input);
        return redirect('admin/equipe')->with('flash_message', 'Equipe Addedd!');

    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $equipe = Equipe::find($id);
    return view('admin.equipes.show')->with('equipes', $equipe);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $equipe = Equipe::find($id);
    return view('admin.equipes.edit')->with('equipes', $equipe);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inscription = Equipe::find($id);
        $input = $request->all();
        $inscription->update($input);
        return redirect('admin/inscription')->with('flash_message', 'inscription Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Equipe::destroy($id);
        return redirect('admin/inscription')->with('flash_message', 'Inscription deleted!');
    }
}
