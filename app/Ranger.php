<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranger extends Model
{
    protected $table = 'ranger';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email'];
//    protected $timestamps = true;
}