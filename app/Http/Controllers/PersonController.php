<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest;
use App\Models\People;

class PersonController extends Controller
{
    
    /**
     * Retorna todas as pessoas
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function index() {
        return People::whereActive(true)->get();
    }
    
    /**
     * Retorna uma pessoa
     *
     * @param int $id
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function show($id) {
        return People::findOrFail($id);
    }
    
    /**
     * Armazena uma pessoa
     *
     * @param PersonRequest $request
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function store(PersonRequest $request) {
        return People::create($request->all());
    }

    /**
     * Atualiza uma pessoa
     * 
     * @param People $person
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function update(People $person) {
        return $person->save();
    }
}
