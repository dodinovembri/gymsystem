<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativeModel extends Model
{
    public $table ='alternative';
    public $guarded ='[]';

    public function alternative_value()
    {
    	return $this->hasMany('App\Models\AlternativeValueModel', 'alternative_id', 'id');
    }
}
