<?php

namespace App\Http\Controllers;

use App\TarefasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lista = TarefasModel::all()->where('user_id', Auth::user()->id);
        return view('home', compact('lista'));
    }

    public function store(Request $request)
    {
            $tarefa = $request->tarefa;
            $cliente = new TarefasModel();
            $cliente->tarefa = $tarefa;
            $cliente->user_id = Auth::user()->id;
            $cliente->save();
            flash($tarefa.' - Inserida Com Sucesso!')->success();
            return redirect()->route('home');
    }

    public function destroy($id)
    {
        $product = TarefasModel::findOrFail($id);
        $product->delete();
        flash()->info("Tarefa Removida com Sucesso!");
        return redirect()->route('home');
    }

}
