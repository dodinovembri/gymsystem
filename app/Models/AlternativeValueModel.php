<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlternativeValueModel extends Model
{
    public $table ='alternative_value';
    public $guarded ='[]';

    public function alternative()
    {
        return $this->belongsTo('App\Models\AlternativeModel', 'alternative_id');
    }
}
