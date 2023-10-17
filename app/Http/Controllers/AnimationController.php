<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animation;

class AnimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $animations = Animation::all();
       return view ('animations.index')->with('animations', $animations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animations.create');
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
        Animation::create($input);
        return redirect('animation')->with('flash_message', 'animation Addedd!');

    }

/**
 * Display the specified resource.
 *
 * @param int $id
 * 
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $animation = Animation::find($id);
    return view('animations.show')->with('animations', $animation);
}
/**
 * Show the form for editing the specified resource.
 *
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $animation = Animation::find($id);
    return view('animations.edit')->with('animations', $animation);
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animation = Animation::find($id);
        $input = $request->all();
        $animation->update($input);
        return redirect('animation')->with('flash_message', 'animation Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Animation::destroy($id);
        return redirect('animation')->with('flash_message', 'Animation deleted!');
    }
}
