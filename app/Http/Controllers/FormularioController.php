<?php

namespace App\Http\Controllers;

use App\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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

        $KPI = ['CPC', 'Alcance', 'CPM', 'CPV', 'Impresiones', 'Interaccion con una publicacion', 'Clics en el enlace', 'Tasa de Interaccion', 'Tasa de Clicks en el enlace'];
        $proyectos = ['J-134','D-42','C-23','G-31','W-30','M-26','F-116','A-22','H-6' ];   
        $marcas = ['A-140', 'D-42', 'D-45', 'M-31', 'R-172']; 
        return view('form',compact('KPI','proyectos','marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(),[
            'inversion' => 'numeric',
        ]);


        Formulario::forceCreate([

          'marca' => request('tags2'),
          'proyecto' => request('tags'),
          'KPI' => request('KPI'),
          'fecha1' => request('date1'),
          'fecha2' => request('date1'),
          'inversion' => request('date1')

        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function show(Formulario $formulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulario $formulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulario $formulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulario  $formulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulario $formulario)
    {
        //
    }
}
