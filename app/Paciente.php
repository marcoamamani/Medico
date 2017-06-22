<?php

namespace Citas;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $table = 'pacientes';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['nombres','apellidos','nick','cuenta','ci'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $guarded =['id'];
}
