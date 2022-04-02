<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothingRequest;
use App\Http\Requests\UpdateClothingRequest;
use App\Models\Clothing;

class ClothingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClothingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClothingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function show(Clothing $clothing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function edit(Clothing $clothing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClothingRequest  $request
     * @param  \App\Models\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClothingRequest $request, Clothing $clothing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clothing  $clothing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clothing $clothing)
    {
        //
    }
}
