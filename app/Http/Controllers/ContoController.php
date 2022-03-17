<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conto as Conto;
use App\Http\Resources\Conto as ContosResource;
class ContoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conto = Conto::paginate(10);
        return ContosResource::collection($conto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new Conto;
        $story->title = $request->input('title'); 
        $story->body = $request->input('body');
        $story->is_enabled = $request->input('is_enabled');
        
        if ($story->save()) {
            return new ContosResource ($story);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Conto::findOrFail($id);
        return new ContosResource ($story);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $story = Conto::findOrFail($request->id);
        $story->title = $request->input('title'); 
        $story->body = $request->input('body');
        $story->is_enabled = $request->input('is_enabled');
        
        if ($story->save()) {
            return new ContosResource ($story);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Conto::findOrFail($id);
        if ($story->delete()) {
            return new ContosResource($story);
        }
    }
}
