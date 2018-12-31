<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedTask extends Model
{
    protected $fillable = [
        'user_id', 'task_id' , 'project_id', 'team_id'
    ];
}
