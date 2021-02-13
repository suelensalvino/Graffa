<?php

namespace App\Http\Controllers;

use App\Models\Perfis;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PerfisController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perfis::create([
            'Time' => $request->Time,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfis  $perfis
     * @return \Illuminate\Http\Response
     */
    public function show(Perfis $perfis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfis  $perfis
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfis $perfis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfis  $perfis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfis $perfis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfis  $perfis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfis $perfis)
    {
        //
    }
}
