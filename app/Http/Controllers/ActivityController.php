<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Activity;

class ActivityController extends Controller
{
    /**
     * Retorna todas as atividades de uma pessoa
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function index($people_id) {
        return People::findOrFail($people_id)
            ->activity()
            ->get();
    }
    
    /**
     * Retorna uma atividade
     *
     * @param int $id
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function show($id) {
        return Activity::findOrFail($id);
    }
    
    /**
     * Armazena uma atividade
     *
     * @param ActivityRequest $request
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function store(ActivityRequest $request, $people_id) {
        return People::findOrFail($people_id)
            ->activity()
            ->create($request->all());
    }

    /**
     * Atualiza uma atividade
     * 
     * @param Activity $activity
     * 
     * @return \Illuminate\Http\Resources\Json\ResourceResponse
     */
    public function update(Activity $activity) {
        return $activity->save();
    }
}
