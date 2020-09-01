<?php

namespace LaraDev\Http\Controllers\user;

use Illuminate\Http\Request;
use LaraDev\Http\Controllers\Controller;
use LaraDev\User;

class UserController extends Controller
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        echo "<h1><b>Dados do Usuário</b></h1>";
        echo "Nome: {$user->name}<br>";
        echo "Email: {$user->email}";

        $userAddress = $user->addressDelivery()->get()->first();

        if($userAddress){
            echo "<h1><b>Endereço do Usuário</b></h1>";
            echo "End: {$userAddress->address}<br>";
            echo "Número: {$userAddress->number}<br>";
            echo "Complemento: {$userAddress->complement}<br>";
            echo "Cep: {$userAddress->zipcode}<br>";
            echo "Cidade/Estado: {$userAddress->city} - {$userAddress->state}<br>";
        }

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
