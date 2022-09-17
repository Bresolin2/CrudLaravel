<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Events\ModelsPruned;

class ModelCliente extends Model
{
    protected $table = 'cliente';
    protected $fillable = ['nome', 'telefone', 'email'];


    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_user');
    }
}
