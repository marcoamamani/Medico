<?php

namespace Citas;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
  protected $table = 'citas';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['hora','fecha','id_especialidad'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $guarded =['id'];
}
