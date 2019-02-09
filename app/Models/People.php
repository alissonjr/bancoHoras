<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Builder;

/**
 * @property int    $id
 * @property string $name
 * @property int    $week_hours
 * @property bool   $active
 */
class People extends Model
{
    /**
     * Activities
     */
    public function activities()
    {
        return $this->hasMany(Activity::class, 'person_id');
    }

    /**
     * @param Builder
     */
    public function scopeActived(Builder $query)
    {
        return $query->whereActive(true);
    }
}
