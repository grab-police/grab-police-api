<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable  = ['shortdesc','description','area'];

    protected $table     = 'reports';

    public function getCreatedAtAttribute($date=array())
    {
        return Carbon::createFromFormat('Y-m-d H:i:s',$date)->diffForHumans();
    }
}
