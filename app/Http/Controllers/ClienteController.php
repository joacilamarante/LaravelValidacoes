<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use \App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('cliente');
       //retorna a view ou seja a pagina criada n.blade.php na view...
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     // declarando class... pode se user use tbm. ex: Use \App\Http\Requests;
    public function store(ClienteRequest $request)    
    {
       /* 
       $this->validate($request,[
            //nome = input name do formulario
            'nome'=> 'required|min:5|max:100',
            'email'=> 'required|max:255|email'
        ],[
            'nome.required'=>'Este campo é obrigatório!',
            'nome.min'=>'minimo é 5 caracteres!',
            'nome.max'=>'maximo de 100 caracteres!', 
            'email.required'=>'Este campo email é obrigatório!',          
            'email.max'=>'maximo de 255 caracteres!',
            'email.email'=>'Este e-mail não é valido!',            
        ]);
        */

        return response()->json(['data'=>'ok']);
       //dd($request->all()); pode se utilizar como debug... execuuta até nele e para...
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
