<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TarefasModel extends Model
{
    protected $table = 'tarefas_table';

    protected $fillable = [
        'tarefa', 'user_id',
    ];
}
