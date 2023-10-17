<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\club; //Club

class clubController extends Controller //Club
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $clubs = club::all();
       return view ('admin.clubs.index')->with('clubs', $clubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.clubs.create');
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
        club::create($input);
        return redirect('admin/club')->with('flash_message', 'Club Addedd!');

    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $club = club::find($id);
    return view('admin.clubs.show')->with('clubs', $club);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $club = club::find($id);
    return view('admin.clubs.edit')->with('clubs', $club);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $club = club::find($id);
        $input = $request->all();
        $club->update($input);
        return redirect('admin/club')->with('flash_message', 'club Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        club::destroy($id);
        return redirect('admin/club')->with('flash_message', 'Club deleted!');
    }
}
