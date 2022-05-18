<?php

namespace App\Http\Controllers;

use App\Models\Camisa;
use Illuminate\Http\Request;

class CamisaController extends Controller
{

    private $reglasValidacion= [
        "marca" => "required",
        "talla" => "required",
        "precio" => "required",
        "no_unidades" => "required",
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $camisas= Camisa::get();
        return view("camisas.indexCamisas", compact("camisas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create()
    {
        return view("camisas.formularioCamisa");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->reglasValidacion);

        $camisa= new Camisa();
        $camisa->marca= $request->marca;
        $camisa->talla= $request->talla;
        $camisa->precio= $request->precio;
        $camisa->no_unidades= $request->no_unidades;
        $camisa->save();

        return redirect("/dashboard");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Camisa  $camisa
     * @return \Illuminate\Http\Response
     */
    public static function show(Camisa $camisa)
    {
        return view("camisas.showCamisa",compact('camisa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Camisa  $camisa
     * @return \Illuminate\Http\Response
     */
    public static function edit(Camisa $camisa)
    {
        return view("camisas.formularioCamisa",compact('camisa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Camisa  $camisa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camisa $camisa)
    {
        $request->validate($this->reglasValidacion);

        $camisa->marca= $request->marca;
        $camisa->talla= $request->talla;
        $camisa->precio= $request->precio;
        $camisa->no_unidades= $request->no_unidades;
        $camisa->save();

        return redirect("/dashboard");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Camisa  $camisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camisa $camisa)
    {
        $camisa->delete();
        return redirect("/");
    }
}
