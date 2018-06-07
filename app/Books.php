<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'book';
    protected $primaryKey='id_book';
    public $timestamps=false;
    protected $fillable = [
        'name',
        'author',
        'category',
        'published_date',
        'user',
        'status_book'
    ];
}
