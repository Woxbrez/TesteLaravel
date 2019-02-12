<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tarefa;

class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tars = Tarefa::all();
        return view('home', compact('tars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novatarefa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tar = new Tarefa();
        $tar->title = $request->input('title');
        $tar->description = $request->input('description');
        $tar->priority = $request->input('priority');
        $tar->status = TRUE;
        $tar->user_id = $request->input('user_id');
        $tar->save();
        return redirect('/tarefas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tar = Tarefa::find($id);
        if(isset($tar)){
            return view('editarTarefa', compact('tar'));
        }
        else{
            return redirect('/tarefas');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tar = Tarefa::find($id);
        if(isset($tar)){
            $tar->title = $request->input('title');
            $tar->description = $request->input('description');
            $tar->priority = $request->input('priority');
            $tar->save();
            return redirect('/tarefas');
        }
        else{
            return redirect('/tarefas');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tar = Tarefa::find($id);
        if (isset($tar)){
            $tar->delete();
        }
        return redirect('/tarefas');
    }
}
