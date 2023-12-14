<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use Illuminate\Http\Request;

class VeicController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }



    public function edit($id)
    {
        $veiculo = Veiculos::findOrFail($id);

        return view('edit_veic', ['veiculo' => $veiculo]);
    }


    public function update(Request $request, $id)
    {
        $veiculo = Veiculos::find($id);
        $veiculo->name = $request->name;
        $veiculo->placa = $request->placa;
        $veiculo->chassi = $request->chassi;
        $veiculo->modelo = $request->modelo;
        $veiculo->save();

        return redirect()->route('welcome')->with('veiculo', $veiculo->id);
    }


    public function destroy(string $id)
    {
        //
    }
}
