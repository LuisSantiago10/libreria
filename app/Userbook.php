<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userbook extends Model
{
  protected $table = 'userbook';
  protected $primaryKey='id_user';
  public $timestamps=false;
  protected $fillable = [
      'name',
      'email',
      'status_user'
  ];
}
