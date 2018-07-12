<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'salary',
        'resumed',
        'manager_id',
        'job_title'
    ];
    public function parent(){
    return $this->hasOne(Role::class, 'id', 'manager_id');
        }
}
