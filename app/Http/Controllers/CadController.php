<?php

namespace App\Http\Controllers;

use App\Models\Card;

use Illuminate\Http\Request;

class CadController extends Controller
{
    public function index()
    {

        $cards = Card::orderBy('id')->get();

        return view("index", ["cards" => $cards]);
    }

    public function show($id)
    {
        $card = Card::find($id);

        return view("show", ["card" => $card]);
    }


    public function create()
    {
        return view("create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "cpf" => "required|max:14",
            "email" => "required|email"
        ]);

        Card::create([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
        ]);


        return redirect()->route("index")->with("successs", "Registro inserido com sucesso!!");
    }

    public function destroy($id)
    {

        $card = Card::findOrFail($id);
        $card->delete();

        return redirect()->route("index")->with('success', 'Registro excluido com sucesso !!');
    }

    public function edit($id)
    {

        $card = Card::findOrFail($id);
        return view("edit", compact("card"));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            "name" => "required|min:3",
            "cpf" => "required|max:14",
            "email" => "required|email"
        ]);

        $card = Card::findOrFail($id);

        $card->update($request->all());


        return redirect()->route("show", ['id' => $card->id])->with("success", "Registro editado com sucesso!!");
    }
}