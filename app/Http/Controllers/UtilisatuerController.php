<?php

namespace App\Http\Controllers;

use App\Utilisatuer;
use Illuminate\Http\Request;

class UtilisatuerController extends Controller
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
        return view('users.user');
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
     * @param  \App\Utilisatuer  $utilisatuer
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisatuer $utilisatuer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utilisatuer  $utilisatuer
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisatuer $utilisatuer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilisatuer  $utilisatuer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisatuer $utilisatuer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilisatuer  $utilisatuer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisatuer $utilisatuer)
    {
        //
    }
}
