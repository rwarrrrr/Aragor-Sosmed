<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    public $table = 't_post';

    protected $fillable = [
        'post'
    ];
}
