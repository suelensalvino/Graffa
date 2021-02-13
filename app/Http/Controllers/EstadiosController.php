<?php

namespace App\Http\Controllers;

use App\Models\Estadios;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class EstadiosController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estadios::create([
            'Nome' => $request->Nome,
            'Jogo' => $request->Jogo,
            'Local' => $request->Local,
            'Descricao' => $request->Descricao,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estadios  $estadios
     * @return \Illuminate\Http\Response
     */
    public function show(Estadios $estadios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estadios  $estadios
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadios $estadios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estadios  $estadios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadios $estadios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estadios  $estadios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadios $estadios)
    {
        $estadios->delete();

        return redirect('dashboard');
    }
}
