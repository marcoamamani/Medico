<?php

namespace Citas;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
  protected $table = 'especialidades';

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['nombre'];

/**
 * The attributes excluded from the model's JSON form.
 *
 * @var array
 */
protected $guarded =['id'];
}
