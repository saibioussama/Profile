<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable=[
        'title','content','type','subject_id'
    ];
}
