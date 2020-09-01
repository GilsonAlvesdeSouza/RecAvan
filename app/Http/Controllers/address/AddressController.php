<?php

namespace LaraDev\Http\Controllers\address;

use Illuminate\Http\Request;
use LaraDev\Http\Controllers\Controller;
use LaraDev\Models\Address;

class AddressController extends Controller
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
        $address = Address::find($id);
        echo "<h1><b>Dados do Endereço</b></h1>";
        echo "End: {$address->address}<br>";
        echo "Número: {$address->number}<br>";
        echo "Complemento: {$address->complement}<br>";
        echo "Cep: {$address->zipcode}<br>";
        echo "Cidade/Estado: {$address->city} - {$address->state}<br>";

        $addressUser = $address->user()->get()->first();
        if($addressUser){
            echo "<h1><b>Dados do Usuário</b></h1>";
            echo "Nome: {$addressUser->name}<br>";
            echo "Email: {$addressUser->email}";
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
