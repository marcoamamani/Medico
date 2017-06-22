<?php

namespace Citas;

use Illuminate\Database\Eloquent\Model;

class Recepcion extends Model
{
  protected $table = 'recepcion';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['turno','id_usuario'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $guarded =['id'];
}
