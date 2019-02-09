<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

/**
 * @property int $id
 * @property int $time
 * @property int $operation
 * @property int $person_id
 */
class Activity extends Model
{
    /**
     * Person
     */
    public function person()
    {
        return $this->belongsTo(People::class, 'person_id');
    }
    
    /**
     * @param Builder $query
     * @param int     $status
     */
    public function filterOperation(Builder $query, int $status)
    {
        return $query->where('operation', $status);
    }
}
