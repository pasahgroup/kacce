<?php

namespace App\Http\Controllers;

use App\Models\supply;
use App\Http\Requests\StoresupplyRequest;
use App\Http\Requests\UpdatesupplyRequest;

class SupplyController extends Controller
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
     * @param  \App\Http\Requests\StoresupplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresupplyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function show(supply $supply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function edit(supply $supply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesupplyRequest  $request
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesupplyRequest $request, supply $supply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supply  $supply
     * @return \Illuminate\Http\Response
     */
    public function destroy(supply $supply)
    {
        //
    }
}
