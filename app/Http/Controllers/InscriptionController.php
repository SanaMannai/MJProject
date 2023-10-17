<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $inscriptions = Inscription::all();
       return view ('inscriptions.index')->with('inscriptions', $inscriptions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inscriptions.create');
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
        Inscription::create($input);
        return redirect('inscription')->with('flash_message', 'inscription Addedd!');

    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $inscription = Inscription::find($id);
    return view('inscriptions.show')->with('inscriptions', $inscription);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $inscription = Inscription::find($id);
    return view('inscriptions.edit')->with('inscriptions', $inscription);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inscription = Inscription::find($id);
        $input = $request->all();
        $inscription->update($input);
        return redirect('inscription')->with('flash_message', 'inscription Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Inscription::destroy($id);
        return redirect('inscription')->with('flash_message', 'Inscription deleted!');
    }
}
