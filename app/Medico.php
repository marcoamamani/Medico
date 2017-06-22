<?php

namespace Citas;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  protected $table = 'medicos';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['turno','id_usuario','id_especialidad'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $guarded =['id'];
}
