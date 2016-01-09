<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable  = ['shortdesc','description','area'];

    protected $table     = 'reports';
}
