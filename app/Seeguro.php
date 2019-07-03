<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seeguro extends Model
{
    use SoftDeletes;

    protected $fillable = ['apolice', 'cpf', 'placa', 'valor'];

    protected $dates = ['deleted_at'];
}
