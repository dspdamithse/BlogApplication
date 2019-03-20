<?php

namespace App\Http\Controllers;

use App\ActivityOne;
use Illuminate\Http\Request;

class ActivityOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activities.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ActivityOne  $activityOne
     * @return \Illuminate\Http\Response
     */
    public function show(ActivityOne $activityOne)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ActivityOne  $activityOne
     * @return \Illuminate\Http\Response
     */
    public function edit(ActivityOne $activityOne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ActivityOne  $activityOne
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ActivityOne $activityOne)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ActivityOne  $activityOne
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActivityOne $activityOne)
    {
        //
    }
}
